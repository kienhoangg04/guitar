<?php 
	$this->view('partitions.admins.nav', [
	 ]);
	$this->view('partitions.admins.products', [
		'menus'    => $menus,
		'products' => $products,
		 ]);
?>