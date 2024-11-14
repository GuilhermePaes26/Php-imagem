<?php
$imagemSelecionada = $_POST['imagem'];
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "images";
$conexao = mysqli_connect($host, $user, $pass, $base);
$sqlSelectQuery = "select * from arquivo";
$resultadoQuery = mysqli_query($conexao, $sqlSelectQuery);
echo "<table border=3px><tr><td>Código Imagem</td><td>Imagem</td><td>Data upload</td></tr>";
echo "</td><td>" .$escrever['codigo'] . "</td><td>" .$escrever['arquivo'] . "height='100 width='200' >" . "</td><td>" .$escrever['data'] . "</td></tr>";
echo "</table>";
echo "<br><br>";
mysqli_close($conexao);
echo "<h2><a href='index.php'>Página inicial</a><br></h2>";
echo "</center>";
?>