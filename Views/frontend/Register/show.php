<?php 
	// $this->view('partitions.frontend.header', ['menus' => $menus ]);
	$this->view('partitions.frontend.register', [
		'error' => $error ?? null,
		]);
	// $this->view('partitions.frontend.footer');
?>