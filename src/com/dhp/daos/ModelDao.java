package com.dhp.daos;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import com.dhp.models.Model;
import com.mysql.jdbc.Connection;
import com.mysql.jdbc.PreparedStatement;

public class ModelDao {

	public static List<Model> getAllModel() {
		List<Model> ModelList =  new ArrayList<>();
		Model model = null;
		Connection con = ConnectionDB.getConnection();
		String sql = "Select * from model";
		PreparedStatement stmt = null;
		try {
	        //prepare SQL
			stmt = (PreparedStatement) con.prepareStatement(sql);
			ResultSet records = stmt.executeQuery();
			while(records.next()) {
				 int idModel =  records.getInt(1);
 
						  String attachments =  records.getString("Attachments");

						  int battery = records.getInt("Battery");

						  String camera = records.getString("Camera");

						  String display = records.getString("Display");

						  String front_camera = records.getString("Front_camera");

						  int memory = records.getInt("Memory");

						  String model_name = records.getString("Model_name");

						  String os = records.getString("OS");

						  String sim = records.getString("SIM");
						  String img = records.getString("img");


						  int warranty = records.getInt("guarantee");
						  int idBrand = records.getInt("idBrand");
				model = new Model(idModel ,attachments ,battery ,camera , display ,front_camera ,memory ,model_name ,os ,sim  ,warranty ,idBrand,img);
				ModelList.add(model );
			}
				
			return ModelList;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return ModelList;
	}
	
	public static List<Model> getModelsByBrand(int idBrand) {
		List<Model> ModelList =  new ArrayList<>();
		Model model = null;
		Connection con = ConnectionDB.getConnection();
		String sql = "select * from model where idBrand = ?";
		PreparedStatement stmt = null;
		try {
	        //prepare SQL
			stmt = (PreparedStatement) con.prepareStatement(sql);
			stmt.setInt(1, idBrand);
			ResultSet records = stmt.executeQuery();
			while(records.next()) {
				 int idModel =  records.getInt(1);
 
						  String attachments =  records.getString("Attachments");

						  int battery = records.getInt("Battery");

						  String camera = records.getString("Camera");

						  String display = records.getString("Display");

						  String front_camera = records.getString("Front_camera");

						  int memory = records.getInt("Memory");

						  String model_name = records.getString("Model_name");

						  String os = records.getString("OS");

						  String sim = records.getString("SIM");
						  String img = records.getString("img");


						  int 	guarantee = records.getInt("guarantee");
				model = new Model(idModel ,attachments ,battery ,camera , display ,front_camera ,memory ,model_name ,os ,sim  ,	guarantee ,idBrand,img);
				ModelList.add(model );
			}
				
			return ModelList;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return ModelList;
	}
	
	
	
	
	public static Model getInfoModelByID(int idModel) {
		Model model = null;
		Connection con = ConnectionDB.getConnection();
		String sql = "Select * from model where idModel = ?";
		PreparedStatement stmt = null;
		try {
	        //prepare SQL
			stmt = (PreparedStatement) con.prepareStatement(sql);
			stmt.setInt(1, idModel);
			ResultSet records = stmt.executeQuery();
			while(records.next()) {
				
 
						  String attachments =  records.getString("Attachments");

						  int battery = records.getInt("Battery");

						  String camera = records.getString("Camera");

						  String display = records.getString("Display");

						  String front_camera = records.getString("Front_camera");

						  int memory = records.getInt("Memory");

						  String model_name = records.getString("Model_name");

						  String os = records.getString("OS");

						  String sim = records.getString("SIM");
						  String img = records.getString("img");


						  int guarantee = records.getInt("guarantee");
						  int idBrand = records.getInt("idBrand");
				model = new Model(idModel ,attachments ,battery ,camera , display ,front_camera ,memory ,model_name ,os ,sim ,	guarantee ,idBrand,img);
			
			}
				
			return model;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return model;
	}

}
