<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_funcionario = $_POST['nome_funcionario'];
    $data_entrada = $_POST['data_entrada'];
    $cpf = $_POST['cpf'];

    
    echo "Funcionário Registrado com Sucesso:<br>";
    echo "Nome de Funcionário: $nome_funcionario<br>";
    echo "Data de Entrada: $data_entrada<br>";
    echo "CPF: $cpf<br>";
}
?>