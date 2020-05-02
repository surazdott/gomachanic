<?php
/*
==========================================================================
Application :      GoMachanic
Author      :      Suraj Datheputhes
Author URI  :      https://facebook.com/suraj.datheputhe
Description :      Gomachanic is the Service finder for Automobiles.
Version     :      1.0.0
License     :      GNU General Public License v2 or later
===========================================================================
*/

class database {
	var $con;
	var $hostname   =   'localhost';
	var $username   =   'root';
	var $password   =   '';
	var $database   =   'gomachanic';

	/**
		var $hostname  =  hostname of your server
		var $username  =  database username
		var $password  =  database password
		var $database  =  database name
	*/

	function __construct() {
		
		$this->con =new mysqli($this->hostname,$this->username,$this->password,$this->database);
		if($this->con->connect_error) {
			die("<h2>Hey Dude, You Just Lost Your Database Connection. Please Check Your Server Configuration.<h2>");
		}	
	}

	/** 
	* Admin Login Function 
	*/

	function sd_admin_login($email, $password) {
		$sql  =  "SELECT * FROM tbl_admin WHERE email = '$email' && password = '$password'";
		$res  =  $this->con->query($sql);
		$row  =  $res->num_rows;
		return $row;
	}

	function sd_add_admins($username, $email, $password) {
		$sql = "INSERT INTO tbl_admin (username, email, password) VALUES ('$username', '$email', '$password')";
		$res = $this->con->query($sql);
		return $res;
	}

	function sd_view_admins() {
		$sql = "SELECT * FROM tbl_admin ORDER BY ID ASC";
		$res = $this->con->query($sql);
		return $res;
	}

	function sd_edit_admins($id) {
		$sql="SELECT * FROM tbl_admin WHERE id='$id'";
		$res=$this->con->query($sql);	
		return $res;
	}

	function sd_update_admins($id, $username, $email, $password) {
		$sql = "UPDATE tbl_admin SET username='$username', email='$email', password='$password' WHERE id='$id'";
		$res = $this->con->query($sql);
		return $res;
	}

	function sd_delete_admins($did) {
		$sql = "DELETE FROM tbl_admin WHERE id='$did'";
		$res = $this->con->query($sql);
		return $res;
	}

	/** 
	* Admin Function for Add/Edit/View/Delete Services 
	*/

	function sd_add_services($service_title, $service_price, $service_desc, $service_img) {
		$sql  =  "INSERT INTO tbl_services (service_title, service_price, service_desc, service_img) VALUES ('$service_title', '$service_price', '$service_desc', '$service_img')";
		$res  =  $this->con->query($sql);
		return $res;
	}

	function sd_view_services() {
		$sql="SELECT * FROM tbl_services ORDER BY id DESC";
		$res=$this->con->query($sql);	
		return $res;
	}

	function sd_services_edit($id) {
		$sql="SELECT * from tbl_services WHERE id='$id'";
		$res=$this->con->query($sql);	
		return $res;
	}

	function sd_services_update($id, $service_title, $service_price, $service_desc, $service_img) {
		$sql = "UPDATE tbl_services SET service_title='$service_title', service_price='$service_price', service_desc='$service_desc', service_img='$service_img' WHERE id='$id'";
		$res = $this->con->query($sql);
		return $res;
	}

	function sd_delete_services($did) {
		$sql = "DELETE FROM tbl_services WHERE id='$did'";
		$res = $this->con->query($sql);
		return $res;
	}

	/** 
	* User Function for View Services 
	*/

	function sd_userview_services() {
		$sql="SELECT * FROM tbl_services ORDER BY id ASC LIMIT 0,8";
		$res=$this->con->query($sql);	
		return $res;
	}

	/** 
	* Most Popular Services 
	*/

	function sd_popular_services() {
		$sql="SELECT * FROM tbl_services ORDER BY id ASC LIMIT 0,8";
		$res=$this->con->query($sql);	
		return $res;
	}

	/** 
	* User Function for View Recent Services 
	*/

	function sd_recent_services() {
		$sql="SELECT * FROM tbl_services ORDER BY id DESC LIMIT 0,6";
		$res=$this->con->query($sql);	
		return $res;
	}

	/** 
	* Admin Function for Add/Edit/View/Delete Locations 
	*/

	function sd_add_locations($location_name, $location_image) {
		$sql = "INSERT INTO tbl_locations (location_name, location_image) VALUES ('$location_name', '$location_image')";
		$res = $this->con->query($sql);
		return $res;
	}

	function sd_view_locations() {
		$sql="SELECT * FROM tbl_locations ORDER BY id DESC";
		$res=$this->con->query($sql);	
		return $res;
	}

	function sd_locations_edit($id) {
		$sql="SELECT * from tbl_locations WHERE id='$id'";
		$res=$this->con->query($sql);	
		return $res;
	}

	function sd_locations_update($id, $location_name, $location_image) {
		$sql = "UPDATE tbl_locations SET location_name='$location_name', location_image='$location_image' WHERE id='$id'";
		$res = $this->con->query($sql);
		return $res;
	}

	function sd_delete_locations($did) {
		$sql="DELETE  from tbl_locations WHERE id='$did'";
		$res=$this->con->query($sql);
		return $res;
	}

	function sd_userview_locations() {
		$sql="SELECT * FROM tbl_locations ORDER BY id ASC LIMIT 0,6";
		$res=$this->con->query($sql);	
		return $res;
	}

	/** 
	* Admin Function for Add/Edit/View/Delete Service Providers 
	*/

	function sd_add_service_providers($company_name, $company_email, $company_service, $company_number, $company_address, $city_name, $company_desc, $company_image) {
		$sql  =  "INSERT INTO tbl_service_providers (company_name, company_email, company_service, company_number, company_address, city_name, company_desc, company_image) VALUES ('$company_name', '$company_email', '$company_service', '$company_number', '$company_address', '$city_name', '$company_desc', '$company_image')";
		$res  =  $this->con->query($sql);
		return $res;
	}

	function sd_view_service_providers() {
		$sql="SELECT * FROM tbl_service_providers ORDER BY id DESC";
		$res=$this->con->query($sql);	
		return $res;
	}

	function sd_edit_service_providers($id) {
		$sql="SELECT * from tbl_service_providers WHERE id='$id'";
		$res=$this->con->query($sql);	
		return $res;
	}

	function sd_update_service_providers($id, $company_name, $company_email, $company_service, $company_number, $company_address, $city_name, $company_desc, $company_image) {
		$sql = "UPDATE tbl_service_providers SET company_name='$company_name', company_email='$company_email', company_service='$company_service', company_number='$company_number', company_address='$company_address', city_name='$city_name', company_desc='$company_desc', company_image='$company_image'  WHERE id='$id'";
		$res = $this->con->query($sql);
		return $res;
	}

	function sd_delete_service_providers($did) {
		$sql="DELETE  from tbl_service_providers WHERE id='$did'";
		$res=$this->con->query($sql);
		return $res;
	}

	/** 
	* Admin Function Pagination for View Services in Admin Page
	*/

	function admin_services_pagination() {
		$sql = "SELECT count(id) FROM tbl_services";
		$res = $this->con->query($sql);
		$row = $res->num_rows;
		return $row;
	}

}


?>