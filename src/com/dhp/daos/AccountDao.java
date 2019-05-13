package com.dhp.daos;

import java.nio.charset.StandardCharsets;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

import com.dhp.models.Account;
import com.dhp.daos.ConnectionDB;
import com.dhp.models.CustomerAccount;


public class AccountDao {
	public static String hashMD5(String toHash) {
		String password = toHash;

        MessageDigest md;
		try {
			md = MessageDigest.getInstance("MD5");
			 byte[] hashInBytes = md.digest(password.getBytes(StandardCharsets.UTF_8));

		        StringBuilder sb = new StringBuilder();
		        for (byte b : hashInBytes) {
		            sb.append(String.format("%02x", b));
		        }
		        return (sb.toString());
		} catch (NoSuchAlgorithmException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
       return "null";
        
	}
	public static Account isAccountStaff(String username, String pwd) {
		Connection con = ConnectionDB.getConnection();
		String hashPass = hashMD5(pwd);
		System.out.println(hashPass);
		System.out.println(username);
		
		String sql = "select a.username, a.name, a.idStaff, a.phone from account a, staff s where a.idStaff = s.idStaff and a.username='"+ username +"' and a.password='"+hashPass+"' ";
		PreparedStatement stmt = null;
		
		ResultSet rs = null;
		try {
			
			stmt = (PreparedStatement) con.prepareStatement(sql);
			rs = stmt.executeQuery();
			while (rs.next())
			{
				int staffId= rs.getInt("idStaff");
				String userName = rs.getString("username");
				String staffName = rs.getString("name");
				String phone = rs.getString("phone");
				Account user = new Account(userName,staffName,staffId, phone);
				return user;
				
			}
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (rs != null) rs.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return null;
	}
	
	
	public static CustomerAccount isAccountCustomer(String username, String pwd) {
		Connection con = ConnectionDB.getConnection();
		String hashPass = hashMD5(pwd);
		System.out.println(hashPass);
		System.out.println(username);
		
		String sql = "select c.name, c.phone, c.gender, c.address, c.DOB, c.email, c.ZIP from customer c,account a "
				+"where c.phone COLLATE utf8_unicode_ci =  a.phone "
				+"and a.username COLLATE utf8_unicode_ci =? "
				+"and a.password COLLATE utf8_unicode_ci=?";
				
		PreparedStatement stmt = null;
		
		ResultSet rs = null;
		try {
			
			stmt = (PreparedStatement) con.prepareStatement(sql);
			stmt.setString(1, username);
			stmt.setString(2, hashPass);
			rs = stmt.executeQuery();
			while (rs.next())
			{
			

						 String phone = rs.getString("phone");
						 String name = rs.getString("name");
						
						 String DOB = rs.getDate("DOB").toString();
						
						 String gender = rs.getString("gender");
						 String address = 		rs.getString("address");	
						 String email = rs.getString("email");
						 String ZIP = rs.getString("ZIP");
				CustomerAccount user = new CustomerAccount(username, phone, name, DOB, gender, address, ZIP, email);
				return user;
				
			}
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (rs != null) rs.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return null;
	}
}
