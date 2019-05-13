package com.dhp.models;

public class Account {
	private String userName;

	private String password;

	private int staffId;
	
	private String staffName;
	
	private String phone;

	public Account() {
	}

	public Account(String userName, String staffName, int staffId, String phone) {
		super();
		this.userName = userName;
		this.staffName = staffName;
		this.staffId = staffId;
		this.phone = phone;
		
	}

	public String getUserName() {
		return userName;
	}

	public void setUserName(String userName) {
		this.userName = userName;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public int getIdStaff() {
		return staffId;
	}

	public void setIdStaff(int idStaff) {
		this.staffId = idStaff;
	}

	public String getNameOfStaff() {
		return staffName;
	}

	public void setNameOfStaff(String nameOfStaff) {
		this.staffName = nameOfStaff;
	}

	public int getStaffId() {
		return staffId;
	}

	public void setStaffId(int staffId) {
		this.staffId = staffId;
	}

	public String getStaffName() {
		return staffName;
	}

	public void setStaffName(String staffName) {
		this.staffName = staffName;
	}

	public String getPhone() {
		return phone;
	}

	public void setPhone(String phone) {
		this.phone = phone;
	}
	

}
