package com.dhp.daos;

import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

import com.dhp.models.Brand;
import com.mysql.jdbc.Connection;
import com.mysql.jdbc.PreparedStatement;
import java.sql.SQLException;

public class BrandDao {

	public static List<Brand> getAllBrand() {
		List<Brand> BrandList =  new ArrayList<>();
		Brand brand = null;
		Connection con = ConnectionDB.getConnection();
		String sql = "Select * from brand";
		PreparedStatement stmt = null;
		try {
	        //prepare SQL
			stmt = (PreparedStatement) con.prepareStatement(sql);
			ResultSet records = stmt.executeQuery();
			while(records.next()) {
				int id_brand = records.getInt(1);
				String brandName = records.getString(2);
				brand = new Brand(id_brand,brandName);
				BrandList.add(brand);
			}
				
			return BrandList;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return BrandList;
	}
}
