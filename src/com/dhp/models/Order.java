package com.dhp.models;
import java.util.List;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class Order {
		private Order_detail order_detail[];
		private CustomerAccount userInfo;

		public Order() {
			
		}

		public Order(Order_detail[] order_detail) {
			this.order_detail = order_detail;
		}

		public Order_detail[] getOrder_detail() {
			return order_detail;
		}

		public void setOrder_detail(Order_detail[] order_detail) {
			this.order_detail = order_detail;
		}

		public CustomerAccount getUserInfo() {
			return userInfo;
		}

		public void setUserInfo(CustomerAccount userInfo) {
			this.userInfo = userInfo;
		}

		
}


