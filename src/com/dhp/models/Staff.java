package com.dhp.models;

import java.util.Date;

public class Staff  {
	private int idStaff;

	private Date dob;

	private String gender;

	private String name;


	private int idRole;


	public Staff() {
	}


	public int getIdStaff() {
		return idStaff;
	}


	public void setIdStaff(int idStaff) {
		this.idStaff = idStaff;
	}


	public Date getDob() {
		return dob;
	}


	public void setDob(Date dob) {
		this.dob = dob;
	}


	public String getGender() {
		return gender;
	}


	public void setGender(String gender) {
		this.gender = gender;
	}


	public String getName() {
		return name;
	}


	public void setName(String name) {
		this.name = name;
	}



	public int getIdRole() {
		return idRole;
	}


	public void setIdRole(int idRole) {
		this.idRole = idRole;
	}


}