package com.dhp.services;


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.SimpleDateFormat;

import java.util.Date;
import java.util.List;
import java.util.Properties;

import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import javax.ws.rs.Consumes;
import javax.ws.rs.FormParam;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import javax.ws.rs.core.Response.ResponseBuilder;

import com.dhp.daos.*;
import com.dhp.models.*;

@Path("/services")
public class MyServices
{
	ProductDao productdao = new ProductDao();
	AccountDao accountdao = new AccountDao();
	@POST
	@Path("/sign-in-secure-v2/")
	@Consumes(MediaType.APPLICATION_FORM_URLENCODED)
	@Produces(MediaType.APPLICATION_JSON)
	public Account signIn_ver2(@FormParam("username") String username, @FormParam("password") String password)
	{
		Account recentAccount = AccountDao.isAccountStaff(username, password);
		if(recentAccount != null ) {
			return recentAccount;
		}
		return  null;
	}
	
	
	@POST
	@Path("/log-in-customer/")
	@Consumes(MediaType.APPLICATION_FORM_URLENCODED)
	@Produces(MediaType.APPLICATION_JSON)
	public CustomerAccount loginCustomer(@FormParam("username") String username, @FormParam("password") String password)
	{
		CustomerAccount accCust = AccountDao.isAccountCustomer(username, password);
		if(accCust != null ) {
			return accCust;
		}
		return  null;
	}
	
	@POST
	@Path("/getBrands")
	@Produces(MediaType.APPLICATION_JSON)
	public List<Brand> getBrands()
	{
		List<Brand> Brands = BrandDao.getAllBrand();
		return Brands;	
	}
	@POST
	@Path("/getModels")
	@Produces(MediaType.APPLICATION_JSON)
	public List<Model> getProducts()
	{
		List<Model> productList = ModelDao.getAllModel(); 
		return productList;	
	}
	@POST
	@Path("/getModelsByBrand")
	@Produces(MediaType.APPLICATION_JSON)
	public List<Model> getModelByBrand(@FormParam("idBrand") int idBrand)
	{

		List<Model> productList = ModelDao.getModelsByBrand(idBrand); 
		return productList;	
	}
	@POST
	@Path("/getColorsOfModel")
	@Produces(MediaType.APPLICATION_JSON)
	public List<Color_image> getColorsOfModel(@FormParam("idModel") int idModel)
	{
		List<Color_image> colorList = DetailDao.getAllColorOfModel(idModel); 
		return colorList;	
	}
	
	@POST
	@Path("/getModelByID")
	@Produces(MediaType.APPLICATION_JSON)
	public Model getModelByID(@FormParam("idModel") int idModel)
	{
		Model model = ModelDao.getInfoModelByID(idModel) ;
		return model;	
	}
	

	@POST
	@Path("/getAllStorageOfModel")
	@Produces(MediaType.APPLICATION_JSON)
	public List<Storage_Price> getAllStorageOfModel(@FormParam("idModel") int idModel)
	{
		List<Storage_Price> storageLst = DetailDao.getAllStorageOfModel(idModel); 
		return storageLst;	
	}
	@POST
	@Path("/getDetailId/")
	@Produces(MediaType.APPLICATION_JSON)
	public int getDetailId(@FormParam("idModel") int idModel,
						   @FormParam("idStorage") int idStorage,
						   @FormParam("idColor") int idColor)
	{

		int idDetail = ProductDao.getDetail(idModel, idStorage, idColor); 
		return idDetail;
	}
	
	@POST
	@Path("/getInfoDetail/")
	@Produces(MediaType.APPLICATION_JSON)
	public Detail getInfoDetail(@FormParam("idDetail") int idDetail)
	{
		Detail detail = ProductDao.getDetailInfo(idDetail); 
		int maxQuantity = ProductDao.getQuantityOfDetail(idDetail);
		detail.setMaxQuantity(maxQuantity);
		return detail;
	}
	
	@POST
	@Path("/getQuantity/{idModel}/{idStorage}/{idColor}")
	@Produces(MediaType.APPLICATION_JSON)
	public Response getQuantityProduct(@PathParam("idModel") int idModel,
								  @PathParam("idStorage") int idStorage,
								  @PathParam("idColor") int idColor)
	{
		

		int quantity = ProductDao.getQuantityOfModel(idModel, idStorage, idColor); 
		
		ResponseBuilder builder = Response.ok(quantity);
		 builder.header("Access-Control-Allow-Origin", "*");
		    builder.header("Access-Control-Max-Age", "3600");
		    builder.header("Access-Control-Allow-Methods", "*");
		    builder.header(
		            "Access-Control-Allow-Headers",
		            "X-Requested-With,Host,User-Agent,Accept,Accept-Language,Accept-Encoding,Accept-Charset,Keep-Alive,Connection,Referer,Origin");
		    
		    return builder.build();
	}
	@POST
	@Path("/saveOrder")
	@Consumes({MediaType.APPLICATION_JSON,MediaType.APPLICATION_XML})
	@Produces(MediaType.APPLICATION_JSON)
	public boolean saveOrder(Order order) {
		EmailHandle.sendEmail(order.getUserInfo().getEmail(), order);
		int result = OrderDao.saveOder(order);
		if(result != 0)
		return true;
		else return false;
	}

}
