<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_produto = $_POST['nome_produto'];
    $data_validade = $_POST['data_validade'];
    $preco = $_POST['preco'];

    
    echo "Produto adicionado com sucesso:<br>";
    echo "Nome do Produto: $nome_produto<br>";
    echo "Data de Validade: $data_validade<br>";
    echo "Preço: $preco<br>";
}
?>
