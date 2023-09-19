<?php 
	$this->view('partitions.admins.nav', [
	]);
	$this->view('partitions.admins.order_detail', [
		'products' => $products,
	]);
?>