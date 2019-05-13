package com.dhp.models;

public class Detail {

	private int idModel;
	private String image;
	private String color;
	private int id_storage;
	private int price;
	private int idDetail;
	private int maxQuantity;

	public Detail() {
	}

	public Detail(int idModel, String image, String color, int id_storage, int price, int idDetail) {
		super();
		this.idModel = idModel;
		this.image = image;
		this.color = color;
		this.id_storage = id_storage;
		this.price = price;
		this.idDetail = idDetail;
	}

	public int getModel() {
		return idModel;
	}

	public void setModel(int idModel) {
		this.idModel = idModel;
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
		return id_storage;
	}

	public void setStorage(int id_storage) {
		this.id_storage = id_storage;
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

}
