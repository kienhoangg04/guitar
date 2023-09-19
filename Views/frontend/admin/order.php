<?php 
	$this->view('partitions.admins.nav', [
	]);
	$this->view('partitions.admins.order', [
		'customers' => $customers,
	]);
?>