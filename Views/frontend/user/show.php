<?php 
	$this->view('partitions.frontend.header', ['menus' => $menus ?? []]);
	$this->view('frontend.user._detail', [
		'user' => $user,
	]);
	$this->view('partitions.frontend.footer');
?>