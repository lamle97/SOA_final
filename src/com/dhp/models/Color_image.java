package com.dhp.models;

public class Color_image {

	private int idColor;
	private String color;
	private String img;
	public Color_image(int idColor, String color, String img) {
		super();
		this.idColor = idColor;
		this.color = color;
		this.img = img;
	}
	public Color_image() {
		super();
		// TODO Auto-generated constructor stub
	}
	public int getId_color() {
		return idColor;
	}
	public void setId_color(int idColor) {
		this.idColor = idColor;
	}
	public String getColor() {
		return color;
	}
	public void setColor(String color) {
		this.color = color;
	}
	public String getImg() {
		return img;
	}
	public void setImg(String img) {
		this.img = img;
	}

}
