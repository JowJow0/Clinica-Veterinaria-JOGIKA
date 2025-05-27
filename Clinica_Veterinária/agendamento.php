<?php
session_start();
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Consultas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</html><section id="AgendeumaConsulta">
    <h2>Agende uma Consulta</h2>
    <form id="contatoForm">
        <h3>Dados do Tutor</h3>
        <label for="nome">Nome Completo do Tutor:</label>
        <input type="text" id="nomePet" name="nomePet" required>

        <label for="telefone">Telefone/WhatsApp:</label>
        <input type="text" id="telefone" name="telefone" required>
        
        <label for="email">Email:</label>
        <input type="text" id="Email" name="Email" required>

        <br><br>
        <h3>Dados do Pet</h3>
        <br>
        <label for="nome">Nome do Pet:</label>
        <input type="text" id="nomePet" name="nomePet" required>

        <label for="especie">Espécie:</label>
        <input type="text" id="especie"  value="cão/gato/coelho..."  name="especie" required>
        
        <label for="raça">Raça/Porte:</label>
        <input type="text" id="raça" name="raça" required>
        
        <label for="sexo">Sexo:</label>
        <input type="text" id="sexo" name="sexo" required>

        <label for="idade">Idade/Data de Nascimento:</label>
        <input id="idade" name="idade"  required>

        <br><br>
        <h3>Motivo da Consulta</h3>
        <textarea name="motivo" placeholder="Vacina, sintoma, check‑up…" required></textarea>
        <input type="datetime-local" name="data_preferida">

          <label>
            <input type="checkbox" required>
            Autorizo o uso dos meus dados para fins de agendamento (LGPD).
          </label>
        
        <button type="submit">Agendar</button>
        <p id="mensagemSucesso" style="display: none; color: green;">Agendamento realizado com sucesso!</p>
    </form>
</section>
</body>
