package com.dhp.daos;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;

import com.dhp.models.CustomerAccount;
import com.dhp.models.Order;
import com.dhp.models.Order_detail;
import com.mysql.jdbc.Connection;
import com.mysql.jdbc.PreparedStatement;
public class OrderDao{
public static int saveOder(Order order) {
	int id_order = getMaxID() + 1;
	CustomerAccount cus = order.getUserInfo();
	Order_detail orders[] = order.getOrder_detail();
	int grandPrice = 0;
	for(Order_detail detail : orders) {
		grandPrice += detail.getSoluong()*detail.getPrice();
	}
	
	int isInsert = -1;
	Connection con = ConnectionDB.getConnection();
	String sql = "INSERT INTO order_total (id_order, date_order_placed, date_order_paid, grand_total, phone) "
			+ "VALUES (?, ?, null, ?, ?);";
	PreparedStatement stmt = null;
	
	try {
        //prepare SQL
		stmt = (PreparedStatement) con.prepareStatement(sql);
		DateTimeFormatter dtf = DateTimeFormatter.ofPattern("yyyy/MM/dd");
		LocalDate localDate = LocalDate.now();
		System.out.println(dtf.format(localDate)); //2016/11/16
		stmt.setInt(1, id_order);
		stmt.setString(2, dtf.format(localDate));			
		stmt.setInt(3, grandPrice);
		stmt.setString(4, cus.getPhone());
		isInsert = stmt.executeUpdate();
		saveDetailOder(id_order,order);
		return isInsert;
	}catch(SQLException e) {
		e.printStackTrace();
	}
	finally {
		try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
		try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
	}
	return isInsert;
}


public static int getMaxID() {
	
	Connection con = ConnectionDB.getConnection();
	String sql = "SELECT id_order FROM order_total ORDER BY id_order DESC LIMIT 1";
	PreparedStatement stmt = null;
	int maxID = -1;
	try {
        //prepare SQL
		stmt = (PreparedStatement) con.prepareStatement(sql);
		ResultSet rs = stmt.executeQuery();
		while(rs.next()) {
			maxID = rs.getInt(1);
		}
		return maxID;
	}catch(SQLException e) {
		e.printStackTrace();
	}
	finally {
		try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
		try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
	}
	return maxID;
}

public static int saveDetailOder(int id_order, Order order) {
	CustomerAccount cus = order.getUserInfo();
	Order_detail orders[] = order.getOrder_detail();
	int grandPrice = 0;
	for(Order_detail detail : orders) {
		grandPrice += detail.getSoluong()*detail.getPrice();
	}
	int isInsert = -1;
	for(Order_detail detail : orders) {
		int idDetail = -1;
		
		Connection con = ConnectionDB.getConnection();
		String sql = "INSERT INTO order_datail (order_id, detail_pro_id, quantity, sum ) "
				+ "VALUES (?, ?,?,?);";
		PreparedStatement stmt = null;
		
		try {
	        //prepare SQL
			stmt = (PreparedStatement) con.prepareStatement(sql);
			stmt.setInt(1, id_order);
			
			stmt.setInt(2, detail.getIdDetail());
			stmt.setInt(3, detail.getSoluong());
			stmt.setInt(4, detail.getSoluong()*detail.getPrice());
			isInsert = stmt.executeUpdate();
			
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		
	}
	return isInsert;
}
}
