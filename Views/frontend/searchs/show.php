<?php 
	$this->view('partitions.frontend.header', ['menus' => $menus ?? []]);
	$this->view('frontend.searchs._detail', [
		'products' => $products,
	]);
	$this->view('partitions.frontend.footer');
?>