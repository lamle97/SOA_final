package com.dhp.daos;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

import com.dhp.models.Category;
import com.dhp.models.Detail;
import com.dhp.models.Product;

public class ProductDao {
	public static int getQuantityOfModel(int idModel, int idStorage, int idColor) {
		int quantity = 0;
		Connection con = ConnectionDB.getConnection();
		String sql = "select count(*) from product where idDetail = (select s.idDetail from detail s "
				+ "where s.id_storage = ? "
				+ "and s.idColor= ? "
				+ "and s.idModel = ? )";
		PreparedStatement stmt = null;
		
		try {
	        //prepare SQL
			stmt = con.prepareStatement(sql);
			
			stmt.setInt(1, idStorage);
			stmt.setInt(2, idColor);
			stmt.setInt(3, idModel);
			ResultSet records = stmt.executeQuery();
			while(records.next()) {
				quantity = records.getInt(1);
				
			}
				
			return quantity;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return quantity;
	}
	
	public static int getQuantityOfDetail(int idDetail) {
		int quantity = 0;
		Connection con = ConnectionDB.getConnection();
		String sql = "select count(*) from product where idDetail =?";
		PreparedStatement stmt = null;
		
		try {
	        //prepare SQL
			stmt = con.prepareStatement(sql);
			
			stmt.setInt(1, idDetail);
			ResultSet records = stmt.executeQuery();
			while(records.next()) {
				quantity = records.getInt(1);
				
			}
				
			return quantity;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return quantity;
	}
	
	
	public static int getDetail(int idModel, int idStorage, int idColor) {
		int idDetail = -1;
		Connection con = ConnectionDB.getConnection();
		String sql = "select s.idDetail from detail s "
				+ "where s.id_storage = ? "
				+ "and s.idColor= ? "
				+ "and s.idModel = ?";
		PreparedStatement stmt = null;
		
		try {
	        //prepare SQL
			stmt = con.prepareStatement(sql);
			
			stmt.setInt(1, idStorage);
			stmt.setInt(2, idColor);
			stmt.setInt(3, idModel);
			ResultSet records = stmt.executeQuery();
			while(records.next()) {
				idDetail = records.getInt(1);
				
			}
				
			return idDetail;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return idDetail;
	}
	
//	public static Detail getDetailIdFromModelId(int modelId) {
//		Detail detail = null;
//		Connection con = ConnectionDB.getConnection();
//		String sql = "SELECT idDetail FROM detail WHERE idModel = ?";
//		PreparedStatement stmt = null;
//		
//		try {
//	        //prepare SQL
//			stmt = con.prepareStatement(sql);
//			
//			ResultSet records = stmt.executeQuery(sql);
//			while(records.next()) {
//				 int idmodel = records.getInt(1);
//				 String image =  records.getString(2);
//				 String color =  records.getString(3);
//				 int storage = records.getInt(4);
//				 int price = records.getInt(5);
//				detail = new Detail();
//				detail = new Detail(idmodel, image, color, storage, price, );
//
//			}
//				
//			return detail;
//		}catch(SQLException e) {
//			e.printStackTrace();
//		}
//		finally {
//			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
//			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
//		}
//		return detail;
//	}
//	
//}

	
	public static Detail getDetailInfo(int idDetail) {
		Detail detail = null;
		Connection con = ConnectionDB.getConnection();
		String sql = "select d.idModel, d.image,c.color,s.storage,d.price from model m, detail d, color c, storage s where "
				+ "d.idDetail = " + idDetail
				+ " and c.idColor=d.idColor "
				+ "and s.id_storage = d.id_storage "
				+ "and d.idModel= m.idModel";
		PreparedStatement stmt = null;
		
		try {
	        //prepare SQL
			stmt = con.prepareStatement(sql);
			
			ResultSet records = stmt.executeQuery(sql);
			while(records.next()) {
				 int idmodel = records.getInt(1);
				 String image =  records.getString(2);
				 String color =  records.getString(3);
				 int storage = records.getInt(4);
				 int price = records.getInt(5);
				detail = new Detail();
				detail = new Detail(idmodel, image, color, storage, price, idDetail);

			}
				
			return detail;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return detail;
	}
	
}
