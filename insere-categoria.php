<?php
include('controller/conexao.php');

// Verificar se a variável 'descricao' está definida no POST
if(isset($_POST['descricao'])){
    $descricao = $_POST['descricao'];

    // Exibir a descrição para depuração
    echo "<h3>Descricao:  $descricao </h3></br>";

    // Criar a consulta SQL
    $cad_cadastro = "INSERT INTO categoria(DESCRICAO) VALUES ('$descricao')";

    // Executar a consulta
    if(mysqli_query($mysqli, $cad_cadastro)){
        echo "<h1>Categoria cadastrada com sucesso!</h1></br>";
    } else {
        echo "Erro: " . $cad_cadastro . "</br>" . mysqli_error($mysqli);
    }
} else {
    echo "Erro: descrição não fornecida.";
}

// Fechar a conexão
mysqli_close($mysqli);
?>
