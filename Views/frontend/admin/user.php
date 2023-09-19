<?php 
	$this->view('partitions.admins.nav', []);
	$this->view('partitions.admins.users', [
			'users'  => $users,
		]);
?>