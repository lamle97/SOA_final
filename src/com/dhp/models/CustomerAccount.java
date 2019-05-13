package com.dhp.models;

public class CustomerAccount {

	private String username;
	private String phone;
	private String name;
	private String DOB;
	private String gender;
	private String address;
	private String ZIP;
	private String email;
	
	
	public CustomerAccount() {
		
	}
	
	public CustomerAccount(String username, String phone, String name, String dOB, String gender, String address,
			String zIP, String email) {
		super();
		this.username = username;
		this.phone = phone;
		this.name = name;
		DOB = dOB;
		this.gender = gender;
		this.address = address;
		ZIP = zIP;
		this.email = email;
	}

	public String getUsername() {
		return username;
	}
	public void setUsername(String username) {
		this.username = username;
	}
	public String getPhone() {
		return phone;
	}
	public void setPhone(String phone) {
		this.phone = phone;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getDOB() {
		return DOB;
	}
	public void setDOB(String dOB) {
		DOB = dOB;
	}
	public String getGender() {
		return gender;
	}
	public void setGender(String gender) {
		this.gender = gender;
	}
	public String getAddress() {
		return address;
	}
	public void setAddress(String address) {
		this.address = address;
	}

	public String getZIP() {
		return ZIP;
	}

	public void setZIP(String zIP) {
		ZIP = zIP;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}
	
	

}
