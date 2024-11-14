<?php
$imagemSelecionada = $_POST['imagem'];
$host = "localhost:3306";
$user = "root";
$pass = "";
$base = "images";
$conexao = mysqli_connect($host, $user, $pass, $base);
$sqlSelectQuery = "select * from arquivo where codigo = $imagemSelecionada";
$resultadoQuery = mysqli_query($conexao, $sqlSelectQuery);

echo "<br><br>";
echo "<center>";
$verificaResultado = mysqli_fetch_array($resultadoQuery);
$contaLinha = $resultadoQuery -> num_rows;

if ($contaLinha == 1) {
    echo "<img src= upload/" .$verificaResultado['arquivo'] . " heigth='100' width='200' >";
} else {
    echo "Nenhuma imagem encontrada";
}

mysqli_close($conexao);
echo "<h2><a href='index.php'>Página inicial</a><br></h2>";
echo "</center>";
?>