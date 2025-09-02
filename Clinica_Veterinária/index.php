<?php
session_start();
require 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Veterinária JOGIKA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="container-header">
      <img src="./imagens/JOGIKA.png" alt="Logo Jogika" width="150">
 
    </div>
    <div class="container-contato">
      <h2>Contato</h2>
      <p><b>Endereço:</b> Rua dos Animais, 456 – Centro, SP</p>
      <p><b>Telefone:</b> (11) 99876-5432</p>
      <p><b>Email:</b> contato@jogikaveterinaria.com</p>
    </div>
    </div>
  
    
    <nav class="menu">
        <ul>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#equipe">Equipe</a></li>
            <li><a href="agendamento.php" target="_blank">Agende uma Consulta</a></li>
        </ul>
    </nav>

    <section id="imagens">
        <div class="carousel">
            <button id="prev">&lt;</button>
            <img src="./imagens/Slide-clinica.png" class="active" alt="Imagem da clínica 1">
            <img src="./imagens/servico1.avif" alt="Imagem da clínica 2">
            <img src="./imagens/servico2.avif" alt="Imagem da clínica 3">
            <img src="./imagens/servico3.jpg" alt="Imagem da clínica 4">
            <button id="next">&gt;</button>
        </div>
        <br>
    </section>
    <section id="sobre">
        <h2>Sobre a Clínica</h2>
        <p>Fundada em 2015, a Clínica Veterinária JOGIKA nasceu com o propósito de oferecer um atendimento veterinário humanizado, acessível e de alta qualidade. Desde então, temos cuidado de centenas de pets com carinho, respeito e profissionalismo, sempre priorizando o bem-estar dos animais e a tranquilidade de seus tutores.
        <br><br>
        Contamos com uma estrutura moderna, equipada com tecnologia de ponta e um ambiente acolhedor que proporciona conforto tanto para os pets quanto para seus donos. Nosso atendimento é totalmente personalizado e realizado por uma equipe apaixonada por animais, formada por profissionais capacitados e em constante atualização.
        <br><br>
        Na JOGIKA, acreditamos que cada vida importa — por isso, oferecemos um cuidado completo e individualizado, com dedicação em cada consulta, procedimento e orientação.
        </p>
        <br><br>
        <h2>Nossa Missão</h2>
        <p>Oferecer cuidados veterinários com excelência, carinho e responsabilidade, promovendo a saúde, a qualidade de vida e o bem-estar dos animais, sempre com foco no atendimento humanizado e na confiança dos tutores.</p>
        <br><br>
        <h2>Nossa Visão</h2>
        <p>Ser reconhecida como referência em medicina veterinária na região, unindo inovação, empatia e compromisso ético para transformar a vida dos animais e de seus tutores.</p>
        <br><br> 
        <h2>Nossos Valores</h2>
        
         <p>❤️ Amor e respeito pelos animais
            <br>
            👩‍⚕️ Atendimento humanizado e personalizado
            <br>
            🧠 Atualização constante e excelência técnica
            <br>
            ⚖️ Ética, responsabilidade e transparência
            <br>
            🌿 Bem-estar animal como prioridade
            <br>
            🤝 Relação de confiança com os tutores
        </p>
   
    </section>

    <section id="servicos">
        <h2>Nossos Serviços</h2>
        <ul>
            <li>Consultas Veterinárias</li>
            <li>Vacinação</li>
            <li>Cirurgias</li>
            <li>Exames Laboratoriais</li>
            <li>Atendimento Emergencial</li>
        </ul>
    </section>

    <section id="equipe">
        <h2>Nossa Equipe</h2>
            <div class="container-medicos">
                <div class="medico">
                    <img src="./imagens/Anapet.png" alt="Dra. Ana Pet" class="img-pequena"> 
                    <p><strong>Dra. Ana Pet</strong> - Especialista em Pequenos Animais</p>
                </div>
                <div class="medico">
                    <img src="./imagens/Carlos Bicho.png" alt="Dr. Carlos Bicho" class="img-pequena">
                    <p><strong>Dr. Carlos Bicho</strong> - Cirurgião Veterinário</p>
                </div>
                <div class="medico">
                    <img src="./imagens/Flora Fauna.png" alt="Dra. Flora Fauna" class="img-pequena">
                    <p><strong>Dra. Flora Fauna</strong> - Veterinária de Animais Silvestres</p>
                </div>
                <div class="medico">
                    <img src="./imagens/José Bizerro.png" alt="Dra. Flora Fauna" class="img-pequena">
                    <p><strong>Dra. José Bizerro</strong> - Veterinária de Animais Silvestres</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Clínica Veterinária JOGIKA - Todos os direitos reservados.</p>
    </footer>

    <button id="btnTopo">&#8679;</button>

    <script src="script.js"></script>

</body>
</html>