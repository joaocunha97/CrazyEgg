<?php
spl_autoload_register(function ($class_name) {
	
    include_once dirname(__FILE__) . '/classes/' . $class_name . '.php';
});
session_start();
if((!isset ($_SESSION['users']) == true))
{
    header('location:login.php');
    
    } else {
      $users= $_SESSION['users'];
      foreach($users as $i => $k) {
      }
}

?>

<html>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}


</style>
<head>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<img src="imagens/crazy-egg.jpg"  height="150px" width="350px">
<a href="end_session.php" style="float:right; color:#d31919; margin-top:130px"><b>Terminar Sessao</b></a>
<div class="fundo">  
  <a style="float:right; margin-top:15px"><b> <?php echo $_SESSION['display']; ?></b> </a>
  </div>
  <ul>
  <li><a href="catalogo.php?tipo=1">Telemoveis</a></li>
  <li><a href="catalogo.php?tipo=2">Portateis</a></li>
  <li style="float:right"><a href="ver_cart.php">Ver Carrinho</a></li>
  </ul>
  <?php
echo "<center>";
$tipo = $_GET["tipo"];
$produtos= $_SESSION["products"];
foreach($produtos[$tipo] as $i => $k) {
echo "<h2>".$k->descricao."</h2>";
echo "<img src=$k->imagemUrl>";
echo "<b><h5>Preço: ".$k->preco."€</h5> </b>";
echo "<a class='w3-button w3-orange' href=catalogo.php?tipo=".$tipo."&id=".$i." name=add>Adicionar ao Carrinho</a>";
echo "<br><br>";
}
if(isset($_GET['id'])) {
  $tipo = $_GET["tipo"];
  $id=$_GET['id'];
  $produtos = $_SESSION['products'];
  $_SESSION['cart'][$id]= $_SESSION['products'][$tipo][$id];
  echo "<script>alert('Produto Adicionado ao Carrinho!');window.location.href = 'catalogo.php?tipo=1';</script>;";
}
?>
  
</body>
</html>
