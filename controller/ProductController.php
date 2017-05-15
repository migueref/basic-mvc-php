<?php
include_once("model/Model.php");

class ProductController {
	public $model;
	public function __construct() {
    $this->model = new Model();
  }
	public function index()
	{
		$products = $this->model->get();
		include 'view/products/index.php';
	}
}

?>
