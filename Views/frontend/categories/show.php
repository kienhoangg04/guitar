<!-- danh sách sản phẩm theo id gọi đến detail -->
<?php 
	$this->view('partitions.frontend.header', ['menus' => $menus ?? []]);
	$this->view('frontend.categories._detail', [
		'products' => $products ?? [],
		'category' => $category,
	]);
	$this->view('partitions.frontend.footer');
?>