package com.dhp.daos;


import java.text.NumberFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Properties;

import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

import com.dhp.models.*;


public class EmailHandle {

	private static final String username = "anhhao1996@gmail.com";
	private static final String password = "ANHhao2411";	
	
	private static String getSubject() {
		return "Announcement from MobileShop " + getNow();
	}
	
	private static String getContentOrder(Order order) {
		String content = "";
		Order_detail order_detail[] =  order.getOrder_detail();
		int STT = 0;
		int grandPrice = 0;
		for(Order_detail detail: order_detail) {
			STT++;
			String model = detail.getModel();
			String color = detail.getColor();
			int storage = detail.getStorage();
			int quantity = detail.getSoluong();
			int sumPrice = detail.getPrice() * quantity;
			grandPrice += sumPrice;
			content += STT + ". Model: " + model + 
					 "\n Quantity: " + NumberFormat.getInstance().format(quantity) + "\n Sum : " + NumberFormat.getInstance().format(sumPrice) + " VND\n";
			
		}
		content += "Grand Price: " + NumberFormat.getInstance().format(grandPrice) + "VND\n";
		return content;
	}
	
	private static String getContent(String email,Order order) {
		CustomerAccount acc = order.getUserInfo();
		
		return "Dear " + acc.getEmail()+ ", "
						+ "You have successfully placed the order at "+ getNow() +". Your order includes:\r\n" + 
						getContentOrder(order) + 
						"We will deliver within 3 days, please check the caller's delivery."
						+ "\n\nRegards,"
						+ "\nMobile Shop.";
	}
	

	
	
	public static boolean sendEmail(String email,Order order) {
		Properties props = new Properties();
		props.put("mail.smtp.host", "smtp.gmail.com");
		props.put("mail.smtp.socketFactory.port", "587");
		props.put("mail.smtp.socketFactory.class", "javax.net.ssl.SSLSocketFactory");
		props.put("mail.smtp.auth", "true");
		props.put("mail.smtp.port", "587");		
		
		Session session = Session.getInstance(props,
			new javax.mail.Authenticator() {
				protected PasswordAuthentication getPasswordAuthentication() {
					return new PasswordAuthentication(username, password);
				}
			});
        
		try {			
			String subject = getSubject();
			String content = getContent(email,order);
			Message message = new MimeMessage(session);			
			message.setFrom(new InternetAddress(username));
			message.setRecipients(Message.RecipientType.TO, InternetAddress.parse(email));			
			message.setSubject(subject); 
			message.setText(content);	
			Transport.send(message);

			return true;

		} catch (MessagingException e) {
			throw new RuntimeException(e);
		}
	}

	public static String getNow()
	{
		SimpleDateFormat formatter = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
	    Date date = new Date();
	    return formatter.format(date).toString();
	}
	
	
}
