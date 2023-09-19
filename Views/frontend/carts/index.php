<?php 
	$this->view('partitions.frontend.header', ['menus' => $menus ?? []]);
	$this->view('partitions.frontend.cart', [
		'products' => $products,
		'user'     => $user ?? null,
	]);
	$this->view('partitions.frontend.footer');
?>