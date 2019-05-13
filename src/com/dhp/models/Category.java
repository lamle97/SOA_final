package com.dhp.models;

public class Category {

	private String category_id;
	private String category_name;
	private int category_delete;
	
	public Category() {
		super();
	}
	
	public Category(String category_id) {
		super();
		this.category_id = category_id;
	}

	public Category(String category_id, String category_name) {
		super();
		this.category_id = category_id;
		this.category_name = category_name;
	}
	public String getCategoryID() {
		return category_id;
	}
	public void setCategoryID(String category_id) {
		this.category_id = category_id;
	}
	public String getCategoryName() {
		return category_name;
	}
	public void setCategoryName(String category_name) {
		this.category_name = category_name;
	}
	public int getCategoryDelete() {
		return category_delete;
	}
	public void setCategoryDelete(int category_delete) {
		this.category_delete = category_delete;
	}
	
	
}
