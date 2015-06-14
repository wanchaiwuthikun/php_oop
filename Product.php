<?php
	/**
	* 
	*/
	class Product
	{
		//properties or variables

		public $productID = 0;
		public $productName = '';
		public $productPrice = 0.00;

		//method

		public function getInfo() {

			$info = "ID:".$this->productID." Name:".$this->productName;

			return $info;
		}

		public function showPrice(){

			echo ' '.$this->productPrice;
		}


		
	}



?>