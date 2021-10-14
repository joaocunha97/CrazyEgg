<?php
spl_autoload_register(function ($class_name) {
    include_once dirname(__FILE__) . '/classes/' . $class_name . '.php';
});
session_start();



if(!isset( $_SESSION['users'] ) ){
	$_SESSION['users'] = array();
}

if(!isset( $_SESSION['products'] ) ){
	$_SESSION['products'] = createProducts();
}



function createProducts(){
	$telemoveis = array();
	
	$produto = new Produto(1, 1, "Samsung Galaxy Note9", 899.00, "imagens/galaxy-note9.jpg");
	$telemoveis[1] = $produto;
	$produto = new Produto(2, 1, "Smartphone Huawei P20 Pro", 639.00, "imagens/huawei-p20-pro.jpg");
	$telemoveis[2] = $produto;
	$produto = new Produto(3, 1, "Smartphone Xiaomi MI Mix", 362.00, "imagens/xiaomi-mi-2s.jpg");
	$telemoveis[3] = $produto;
	$produto = new Produto(4, 1, "Smartphone LG G7 THINK", 419.00, "imagens/lg-g7-think.jpg");
	$telemoveis[4] = $produto;
	
	$portateis = array();
	$produto = new Produto(5, 2, "Portátil Asus Transformer Book T101HA- X5DHD", 308.00, "imagens/Asus-Transformer-Book-T101HA-X5DHD.jpg");
	$portateis[5] = $produto;
	$produto = new Produto(6, 2, "Portátil HP 11-y001np N3060 32GB", 219.00, "imagens/HP-11-y001np-N3060-32GB-11-6.jpg");
	$portateis[6] = $produto;
	$produto = new Produto(7, 2, "Portátil Híbrido Lenovo Miix 320 x5-Z8350", 328.00, "imagens/Hibrido-Lenovo-Miix-320-x5-Z8350-4GB-10-1.jpg");
	$portateis[7] = $produto;
	$produto = new Produto(8, 2, "Portátil Híbrido Trekstor Surftab Twin 10.1 (2017) x5-Z8350", 412.00, "imagens/Hibrido-Trekstor-Surftab-Twin-10-1-2017-x5-Z8350-2GB-10-1.jpg");
	$portateis[8] = $produto;	
	
	$produtos = array(1=>$telemoveis, 2=>$portateis);
	return $produtos;
}



header("Location: login.php");
?>