<?php 
	$this->view('partitions.admins.nav', [
	 ]);
	$this->view('partitions.admins.updateUser', [
			'user'   => $user,
			'idUser' => $idUser,
		 ]);
?>