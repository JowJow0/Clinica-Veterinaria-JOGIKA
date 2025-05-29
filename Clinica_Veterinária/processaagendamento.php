<?php
include 'conexao.php';

// Captura od dados
$nome_tutor = $_POST['nome_tutor'];
$telefone_whatsapp = $_POST['telefone_whatsapp'];
$email = $_POST['email'];
$nome_pet = $_POST['nome_pet'];
$especie = $_POST['especie'];
$raca_porte = $_POST['raca_porte'];
$sexo = $_POST['sexo'];
$idade_data_nascimento = $_POST['idade_data_nascimento'];
$motivo_consulta = $_POST['motivo_consulta'];
$autorizacao_lgpd = isset($_POST['autorizacao_lgpd']) ? 1 : 0;

// Preenche a tabela de banco de dados
$sql = "INSERT INTO agendamentos (nome_tutor, telefone_whatsapp, email, nome_pet, especie, raca_porte, sexo, idade_data_nascimento, motivo_consulta, autorizacao_lgpd) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssi", $nome_tutor, $telefone_whatsapp, $email, $nome_pet, $especie, $raca_porte, $sexo, $idade_data_nascimento, $motivo_consulta, $autorizacao_lgpd);

if ($stmt->execute()) {
    echo "Agendamento realizado com sucesso!";
} else {
    echo "Erro ao agendar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>