<?php 
	$this->view('partitions.admins.nav', [
	 ]);
	$this->view('partitions.admins.update', [
		'categories' => $categories,
		'product' => $product,
		'idProduct' => $idProduct,
		 ]);
?>