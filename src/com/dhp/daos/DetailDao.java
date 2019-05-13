package com.dhp.daos;
import com.dhp.models.*;
import com.mysql.jdbc.Connection;
import com.mysql.jdbc.PreparedStatement;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class DetailDao {

	public static List<Color_image> getAllColorOfModel(int idModel) {
		List<Color_image> colors =  new ArrayList<>();
		Color_image color_image = null;
		Connection con = ConnectionDB.getConnection();
		String sql = "select co.idColor,co.color, de.image FROM detail de , color co where idModel = ? and de.idColor = co.idColor GROUP BY de.idColor";
		PreparedStatement stmt = null;
		try {
	        //prepare SQL
			stmt = (PreparedStatement) con.prepareStatement(sql);
			stmt.setInt(1, idModel);
			ResultSet records = stmt.executeQuery();
			while(records.next()) {
				 int idColor =  records.getInt(1);
				 System.out.println(idColor);
				 String color =  records.getString(2);
				 String image = records.getString(3);
				 color_image =  new Color_image(idColor, color, image);
				 colors.add(color_image );
			}
				
			return colors;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return colors;
	}
	
	public static List<Storage_Price> getAllStorageOfModel(int idModel) {
		List<Storage_Price> storageList =  new ArrayList<>();
		Storage_Price storage_price = null;
		Connection con = ConnectionDB.getConnection();
		String sql = "select co.id_storage,  co.storage, co.price FROM detail de , storage co where idModel = ? and de.id_storage = co.id_storage GROUP BY de.id_storage";
		PreparedStatement stmt = null;
		
		try {
	        //prepare SQL
			stmt = (PreparedStatement) con.prepareStatement(sql);
			
			stmt.setInt(1, idModel);
			ResultSet records = stmt.executeQuery();
			while(records.next()) {
				int id_storage = records.getInt(1);
				int storage = records.getInt(2);
				int price = records.getInt(3);
				 storage_price =  new Storage_Price(id_storage,storage,price);
				 storageList.add(storage_price);
			}
				
			return storageList;
		}catch(SQLException e) {
			e.printStackTrace();
		}
		finally {
			try { if (stmt != null) stmt.close(); } catch (SQLException e) { e.printStackTrace(); }
			try { if (con != null) con.close(); } catch (SQLException e) { e.printStackTrace(); }
		}
		return storageList;
	}

}
