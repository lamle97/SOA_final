package com.dhp.models;

import java.util.HashMap;

public class Cart {
	private int id_card;
	private int idDetail;
	private int quantity;
	private int sum;
	
	public Cart(int id_card, int id_detail, int quantity, int sum) {
		super();
		this.id_card = id_card;
		this.idDetail = id_detail;
		this.quantity = quantity;
		this.sum = sum;
	}
	public int getId_card() {
		return id_card;
	}
	public void setId_card(int id_card) {
		this.id_card = id_card;
	}
	public int getId_detail() {
		return idDetail;
	}
	public void setId_detail(int id_detail) {
		this.idDetail = id_detail;
	}
	public int getQuantity() {
		return quantity;
	}
	public void setQuantity(int quantity) {
		this.quantity = quantity;
	}
	public int getSum() {
		return sum;
	}
	public void setSum(int sum) {
		this.sum = sum;
	}

	
}
