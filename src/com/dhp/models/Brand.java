package com.dhp.models;

public class Brand {

	private int idBrand;
	private String brandName;

	public Brand() {
	}

	public Brand(int idBrand, String brandName) {
		super();
		this.idBrand = idBrand;
		this.brandName = brandName;
	}

	public int getIdBrand() {
		return idBrand;
	}

	public void setIdBrand(int idBrand) {
		this.idBrand = idBrand;
	}

	public String getBrandName() {
		return brandName;
	}

	public void setBrandName(String brandName) {
		this.brandName = brandName;
	}

}
