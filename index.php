<?php include 'helpers/url.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="<?= $BASE_URL ?>/assets/GOR.png">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Portifólio - Guilherme Rodrigues</title>
</head>

<body>
    <header>

        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
            <img src="<?= $BASE_URL ?>/assets/GOR.png" alt="Agenda">
        </a>
        <h3>Guilherme <strong>Rodrigues</strong></h3>
    </header>
    <main>
        <section class="section-1">
            <article>
                <h2>Hi, I'm Guilherme!</h2>
                <h1>Dev <strong>Aprendice</strong></h1>
            </article>
            <p>Contato: goliva12@hotmail.com</p>
            <div>
                <h3 class="rotate">Follow-me</h3>
                <hr class="rotate" />
                <a class="a-1" href="https://github.com/Golivaz" target="_blank">
                    <img src="assets/github.svg" alt="Logo do GitHub">
                </a>
                <a href="https://www.linkedin.com/in/guilherme-rodrigues-21102a158" target="_blank">
                    <img src="assets/linkedin.png" alt="Logo do LinkedIn">
                </a>
                <a href="https://www.instagram.com/guioliva_/" target="_blank">
                    <img src="assets/instagram.png" alt="Logo do Instagram">
                </a>
            </div>
            <hr class="hr-1" />
            <hr class="hr-2" />
            <hr class="hr-3" />
            <hr class="hr-4" />
        </section>
        <section class="section-2">
            <h1>Projects</h1>
            <ul>
                <li><a href="<?php echo $BASE_URL; ?>project_1/" target="_blank"><img
                            src="<?php echo $BASE_URL; ?>project_1/img/logo.svg" alt="Logo do projeto de blog"></a></li>
                <li><a href="<?php echo $BASE_URL; ?>project_2/" target="_blank"><img
                            src="<?php echo $BASE_URL; ?>project_2/img/logo.svg" alt="Logo do projeto de Agenda"></a>
                </li>
            </ul>
        </section>
        <section class="section-3">
            <h1>Stack</h1>
            <ul>
                <li class="php"><img src="assets/php.png" alt="Imagem do PHP"> </li>
                <li><img src="assets/html.svg" alt="Imagem do HTML"> </li>
                <li><img src="assets/css.svg" alt="Imagem do CSS"> </li>
                <li><img src="assets/mysql.png" alt="Imagem do MYSQL"> </li>
                <li><img src="assets/PS.png" alt="Imagem do Photoshop"> </li>

            </ul>
        </section>
    </main>
    <footer>
        <h3>Guilherme Rodrigues &copy; <?= date("Y"); ?></h3>
    </footer>
</body>

</html>
