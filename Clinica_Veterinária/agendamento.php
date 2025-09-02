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
    <section id="AgendeumaConsulta">
        <h2><center>Agende uma Consulta</center></h2>
        <div class="formbox">
        <form id="contatoForm" action="processaagendamento.php" method="POST">
            <h3>Dados do Tutor</h3>
            <label for="nome">Nome Completo do Tutor:</label>
            <input type="text" id="nomeTutor" name="nome_tutor" required>
            <br>
            <label for="telefone">Telefone/WhatsApp:</label>
            <input type="text" id="telefoneWhatsapp" name="telefone_whatsapp" required>
            <br>
            <label for="email">Email:</label>
            <input type="text" id="Email" name="email" required>

            <br><br>
            <h3>Dados do Pet</h3>
            <label for="nome">Nome do Pet:</label>
            <input type="text" id="nomePet" name="nome_pet" required>
            <br>
            <label for="especie">Espécie:</label>
            <input type="text" id="Especie"  placeholder="cão/gato/coelho..."  name="especie" required>
            <br>
            <label for="raça">Raça/Porte:</label>
            <input type="text" id="racaPorte" name="raca_porte" required>
            <br>
            <label for="sexo">Sexo:</label>
            <select name="sexo">
            <option value="M">Macho</option>
            <option value="F">Fêmea</option>
            </select>
            <br>
            <label for="idade">Idade:</label>
            <input type="number" id="idadeDataNascimento" name="idade_data_nascimento"  required>
            <br>
            <label for="idade">Data da Consulta:</label>
            <input type="datetime-local" id="dataPreferida" name="data_preferida">
            <br>
            <h3>Motivo da Consulta</h3>
            <textarea id="motivoConsulta" name="motivo_consulta" placeholder="Vacina, sintoma..." required></textarea>
            <br><br>
            <div class="lgpdcheck">
              <label class="checkbox-container">
                <input type="checkbox" name="autorizacao_lgpd" required>
                <span>Autorizo o uso dos meus dados para fins de agendamento (LGPD).</span>
              </label>
            </div>
            <br>
            <button type="submit" value="Agendar">Agendar</button>
            <p id="mensagemSucesso" style="display: none; color: green;">Agendamento realizado com sucesso!</p>
       </form>
      </div>
    </section>
  </body>
</html>