
<?php
spl_autoload_register(function ($class_name) {
    include_once dirname(__FILE__) . '/classes/' . $class_name . '.php';
});
session_start();
$users = $_SESSION['users'];
foreach($users as $i => $k) {
}
?>
<html>
<head>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta charset="UTF-8">
<title> </title>

</head>
<body>
<img src="imagens/crazy-egg.jpg"  height="150px" width="350px">
    <form action="login.php" method="POST" align="center">
    <div class="fundo">   
    </div>
    <p>Nome Utilizador: <input type="text" name="nome" value=<?php echo @$k->nome?>></p>
    <p>Password: <input type="password" name="password" value=<?php echo @$k->password?>></p>
    <center>
    <button>Entrar</button>
    <br><br>
    <a class='w3-button w3-green' href="registar.php">Registar</a>
    </center>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$user=$_SESSION['users'];
$nome= $_POST['nome'];
$password= $_POST['password'];

if(array_key_exists($nome,$user)){
    if(!isset( $_SESSION["users"] ) ){
        $_SESSION["users"] = array();
         }
    if($password==$user[$nome]->password){
        $_SESSION['user']=$user[$nome];
        foreach($users as $i => $k) {
        $_SESSION['display'] = $k->nome;
        $_SESSION['dmorada'] = $k->morada;
        $_SESSION['demail'] = $k->email;
        header("Location: catalogo.php?tipo=1");
        }
    }else{
        echo "Nome de Utilizador/Password inválido";
    }
}else{
        echo "Nome de Utilizador/Password inválido";
    }
}
?>


</body>
</html>