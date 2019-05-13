package com.dhp.services;

import java.text.SimpleDateFormat;
import java.util.Date;

public class Test
{

	public static void main(String[] args)
	{
//		MyServices s = new MyServices();
//		s.sendEmail("admin");
//		System.out.println(s.signIn_ver2("admin", "123"));
		
		SimpleDateFormat formatter = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");  
	    Date date = new Date();  
	    System.out.println(formatter.format(date));
	}

}
