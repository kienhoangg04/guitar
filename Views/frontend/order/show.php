<!-- Khi đặt hàng thành công -->
<?php 
	$this->view('partitions.frontend.header', ['menus' => $menus ?? []]);
	$this->view('partitions.frontend.order', [
		'user' => $user ?? null,
		'products' => $products,
	]);
	$this->view('partitions.frontend.footer');
?>