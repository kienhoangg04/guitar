<?php 
	$this->view('partitions.frontend.header', [
		'menus' 	   => $menus,
	 ]);
	$this->view('frontend.products.index', [
		'products' => $products,
		'productBooks' => $productBooks,
		 ]);
	$this->view('partitions.frontend.footer');
?>