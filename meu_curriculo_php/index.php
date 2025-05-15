<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo - John Emanuel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
            $nomeCompleto = "John Emanuel Onias da Silva"; 
            $idade = 25;
            $fotoPerfil = "imagens/foto_perfil.jpg"; 
        ?>
        <div class="perfil">
            <img src="<?php print $fotoPerfil; ?>" alt="foto do perfil">
            <h1><?php print $nomeCompleto; ?></h1>
            <p>Idade: <?php print $idade; ?> anos</p>
        </div>
    </header>

    <section id="experiencia">
        <h2>Experiência Profissional</h2>
        <?php
            $experiencias = [
                [
                    "empresa" => "Jammes Pizzas",
                    "cargo" => "Garçom Freelancer",
                    "periodo" => "12/2020 - 05/22",
                    "descricao" => "Atendimento ao publico"
                ], 
                [
                    "empresa" => "A1 Academia",
                    "cargo" => "Auxiliar",
                    "periodo" => "05/2022 - 01/23",
                    "descricao" => "Auxiliar em Manutenção de maquinas, limpeza e atendimento"
                ],

            ];
        ?>
        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia['cargo']; ?></h3>
                        <h4><?php echo $experiencia['empresa']; ?></h4>
                        <p class="periodo"><?php echo $experiencia['periodo']; ?></p>
                        <p><?php echo $experiencia['descricao']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Sem experiência profissional para mostrar.</p>
        <?php endif; ?>
    </section>

    <section id="cursos">
        <h2>Cursos e Formação</h2>
        <?php
            $cursos = [
                [
                    "nome" => "Assistente de Logística",
                    "instituicao" => "E.E.E Profissional Professor César Campelo",
                    "periodo" => "22/12/2020 - 22/01/2021"
                ],
                [
                    "nome" => "Inglês Básico Intensivo 1, 2, 3 e 4",
                    "instituicao" => "SENAC",
                    "periodo" => "09/05/2022 - 18/10/2022"
                ]
            ];
        ?>
        <?php if (!empty($cursos)): ?>
            <ul>
                <?php foreach ($cursos as $curso): ?>
                    <li>
                        <h3><?php echo $curso['nome']; ?></h3>
                        <h4><?php echo $curso['instituicao']; ?></h4>
                        <p class="periodo"><?php echo $curso['periodo']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum curso ou formação para mostrar.</p>
        <?php endif; ?>
    </section>

    <section id="habilidades">
        <h3>Habilidades</h3>
        <?php
            $habilidades = [
                "PHP" => 2,
                "HTML" => 9,
                "CSS" => 9,
                "JavaScript" => 3,
                "Banco de Dados" => 9
            ];
        ?>
        <?php if (!empty($habilidades)): ?>
            <ul>
                <?php foreach ($habilidades as $habilidade => $nivel): ?>
                    <li>
                        <?php echo $habilidade; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $nivel; $i++): ?>
                                <span class="preenchido"></span>
                            <?php endfor; ?>
                            <?php for ($i = $nivel; $i < 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                            <?php echo $nivel; ?>/10
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h3>Hobbies</h3>
        <?php
            $hobbies = [
                "Ler" => 7,
                "Desenhar" => 9,
                "Eletrônica" => 8
            ];
        ?>
        <?php if (!empty($hobbies)): ?>
            <ul>
                <?php foreach ($hobbies as $hobby => $interesse): ?>
                    <li>
                        <?php echo $hobby; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $interesse; $i++): ?>
                                <span class="preenchido hobby"></span>
                            <?php endfor; ?>
                            <?php for ($i = $interesse; $i < 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                            <?php echo $interesse; ?>/10
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> John Emanuel Onias da Silva</p>
    </footer>
</body>
</html>
