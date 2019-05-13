package com.dhp.models;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class Order_detail {
	private String model;
	private String image;
	private String color;
	private int storage;
	private int price;
	private int idDetail;
	private int maxQuantity;
	private int soluong;
	
	public Order_detail() {
		
	}
	public Order_detail(String model, String image, String color, int storage, int price, int idDetail, int maxQuantity,
			int quantity) {
		super();
		this.model = model;
		this.image = image;
		this.color = color;
		this.storage = storage;
		this.price = price;
		this.idDetail = idDetail;
		this.maxQuantity = maxQuantity;
		this.soluong = quantity;
	}
	public String getModel() {
		return model;
	}
	public void setModel(String model) {
		this.model = model;
	}
	public String getImage() {
		return image;
	}
	public void setImage(String image) {
		this.image = image;
	}
	public String getColor() {
		return color;
	}
	public void setColor(String color) {
		this.color = color;
	}
	public int getStorage() {
		return storage;
	}
	public void setStorage(int storage) {
		this.storage = storage;
	}
	public int getPrice() {
		return price;
	}
	public void setPrice(int price) {
		this.price = price;
	}
	public int getIdDetail() {
		return idDetail;
	}
	public void setIdDetail(int idDetail) {
		this.idDetail = idDetail;
	}
	public int getMaxQuantity() {
		return maxQuantity;
	}
	public void setMaxQuantity(int maxQuantity) {
		this.maxQuantity = maxQuantity;
	}
	public int getSoluong() {
		return soluong;
	}
	public void setSoluong(int soluong) {
		this.soluong = soluong;
	}
}