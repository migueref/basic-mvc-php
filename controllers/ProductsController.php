<?php
include_once("models/Model.php");

class ProductController {
	public $model;
	public function __construct() {
    $this->model = new Model();
  }
	public function index()
	{
		$products = $this->model->get();
		include 'views/products/index.php';
	}
}

?>
