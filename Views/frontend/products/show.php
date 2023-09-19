<!-- chi tiết 1 sản phẩm gọi đến detal-->
<?php 
	$this->view('partitions.frontend.header', ['menus' => $menus ?? []]);
	$this->view('frontend.products._detail', [
		'product'  => $product ?? [],
		'products' => $products ?? [],
	]);
	$this->view('partitions.frontend.footer');
?>