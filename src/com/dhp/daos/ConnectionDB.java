package com.dhp.daos;

import java.sql.DriverManager;
import java.sql.SQLException;

import com.mysql.jdbc.Connection;

public class ConnectionDB {


	public static Connection getConnection() {
		 Connection cons = null;
		    try {
		        Class.forName("com.mysql.jdbc.Driver");
		        cons = (Connection) DriverManager.getConnection("jdbc:mysql://localhost:3306/cuahangdidong?useUnicode=true&characterEncoding=UTF-8", "root", "");
		    } catch (Exception e) {
		        e.printStackTrace();
		    }
		    return cons;
	}
}
