package com.dhp.models;

public class Model {

	private int idModel;

	private String attachments;

	private int battery;

	private String camera;

	private String display;

	private String front_camera;

	private int memory;

	private String model_name;

	private String os;

	private String sim;



	private int guarantee;
	private int idBrand;
	private String img;

	public Model() {
	}

	

	public Model(int idModel, String attachments, int battery, String camera, String display, String front_camera,
			int memory, String model_name, String os, String sim, int guarantee, int idBrand, String img) {
		super();
		this.idModel = idModel;
		this.attachments = attachments;
		this.battery = battery;
		this.camera = camera;
		this.display = display;
		this.front_camera = front_camera;
		this.memory = memory;
		this.model_name = model_name;
		this.os = os;
		this.sim = sim;
		this.guarantee = guarantee;
		this.idBrand = idBrand;
		this.img = img;
	}



	public String getImg() {
		return img;
	}



	public void setImg(String img) {
		this.img = img;
	}



	public int getIdModel() {
		return idModel;
	}

	public void setIdModel(int idModel) {
		this.idModel = idModel;
	}

	public String getAttachments() {
		return attachments;
	}

	public void setAttachments(String attachments) {
		this.attachments = attachments;
	}

	public int getBattery() {
		return battery;
	}

	public void setBattery(int battery) {
		this.battery = battery;
	}

	public String getCamera() {
		return camera;
	}

	public void setCamera(String camera) {
		this.camera = camera;
	}

	public String getDisplay() {
		return display;
	}

	public void setDisplay(String display) {
		this.display = display;
	}

	public String getFront_camera() {
		return front_camera;
	}

	public void setFront_camera(String front_camera) {
		this.front_camera = front_camera;
	}

	public int getMemory() {
		return memory;
	}

	public void setMemory(int memory) {
		this.memory = memory;
	}

	public String getModel_name() {
		return model_name;
	}

	public void setModel_name(String model_name) {
		this.model_name = model_name;
	}

	public String getOs() {
		return os;
	}

	public void setOs(String os) {
		this.os = os;
	}

	public String getSim() {
		return sim;
	}

	public void setSim(String sim) {
		this.sim = sim;
	}


	public int getGuarantee() {
		return 	guarantee;
	}

	public void setGuarantee(int guarantee) {
		this.guarantee = guarantee;
	}

	public int getIdBrand() {
		return idBrand;
	}

	public void setIdBrand(int idBrand) {
		this.idBrand = idBrand;
	}

}
