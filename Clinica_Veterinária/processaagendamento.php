<?php
session_start();
require 'conexao.php';

// Função para limpar dados
function limpar_dado($conexao, $dado) {
    return mysqli_real_escape_string($conexao, trim($dado));
}

// Captura e limpa os dados
$nome_tutor = limpar_dado($conexao, $_POST['nome_tutor'] ?? '');
$telefone_whatsapp = limpar_dado($conexao, $_POST['telefone_whatsapp'] ?? '');
$email = limpar_dado($conexao, $_POST['email'] ?? '');
$nome_pet = limpar_dado($conexao, $_POST['nome_pet'] ?? '');
$especie = limpar_dado($conexao, $_POST['especie'] ?? '');
$raca_porte = limpar_dado($conexao, $_POST['raca_porte'] ?? '');
$sexo = limpar_dado($conexao, $_POST['sexo'] ?? '');
$idade_data_nascimento = limpar_dado($conexao, $_POST['idade_data_nascimento'] ?? '');
$data_de_agendamento = limpar_dado($conexao, $_POST['data_preferida'] ?? NULL);
$motivo_consulta = limpar_dado($conexao, $_POST['motivo_consulta'] ?? '');
$autorizacao_lgpd = isset($_POST['autorizacao_lgpd']) ? 1 : 0;

// Prepara a query
$sql = "INSERT INTO agendamentos 
    (nome_tutor, telefone_whatsapp, email, nome_pet, especie, raca_porte, sexo, idade_data_nascimento, data_de_agendamento, motivo_consulta, autorizacao_lgpd) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

if ($stmt) {
    // Define os parâmetros
    mysqli_stmt_bind_param($stmt, "ssssssssssi", 
        $nome_tutor, 
        $telefone_whatsapp, 
        $email, 
        $nome_pet, 
        $especie, 
        $raca_porte, 
        $sexo, 
        $idade_data_nascimento, 
        $data_de_agendamento, 
        $motivo_consulta, 
        $autorizacao_lgpd
    );

    // Executa a query
    if (mysqli_stmt_execute($stmt)) {
        echo "<p style='color:green;'>Agendamento realizado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro ao agendar: " . mysqli_stmt_error($stmt) . "</p>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "<p style='color:red;'>Erro na preparação da consulta: " . mysqli_error($conexao) . "</p>";
}

mysqli_close($conexao);
?>
