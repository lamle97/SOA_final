package com.dhp.models;

public class Storage_Price {

	private int id_storage;
	private int storage;
	private int price;
	
	public Storage_Price() {
		super();
		// TODO Auto-generated constructor stub
	}
	
	public Storage_Price(int id_storage, int storage, int price) {
		
		this.id_storage = id_storage;
		this.storage = storage;
		this.price = price;
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
	public int getId_storage() {
		return id_storage;
	}
	public void setId_storage(int id_storage) {
		this.id_storage = id_storage;
	}

}
