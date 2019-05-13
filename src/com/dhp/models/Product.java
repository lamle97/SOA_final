package com.dhp.models;

import java.util.Date;

public class Product {
	private String imei;
	private Date outputDate;
	private String status;
	private String idDetail;
	private String idStore;
	
	public Product() {
	}
	public String getImei() {
		return imei;
	}
	public void setImei(String imei) {
		this.imei = imei;
	}
	public Date getOutputDate() {
		return outputDate;
	}
	public void setOutputDate(Date outputDate) {
		this.outputDate = outputDate;
	}
	public String getStatus() {
		return status;
	}
	public void setStatus(String status) {
		this.status = status;
	}
	public String getIdDetail() {
		return idDetail;
	}
	public void setIdDetail(String idDetail) {
		this.idDetail = idDetail;
	}
	public String getIdStore() {
		return idStore;
	}
	public void setIdStore(String idStore) {
		this.idStore = idStore;
	}
	

	
}
