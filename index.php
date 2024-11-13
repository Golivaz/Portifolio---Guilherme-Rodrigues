<?php include 'helpers/url.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="<?= $BASE_URL ?>/assets/GOR.png">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
            <div class="projects-carousel">
                <div><a href="<?php echo $BASE_URL; ?>project_1/" target="_blank"><img
                            src="<?php echo $BASE_URL; ?>project_1/img/logo.svg" alt="Logo do projeto de blog"></a></div>
                <div><a href="<?php echo $BASE_URL; ?>project_2/" target="_blank"><img
                            src="<?php echo $BASE_URL; ?>project_2/img/logo.svg" alt="Logo do projeto de Agenda"></a></div>
                <div><a href="<?php echo $BASE_URL; ?>project_3/" target="_blank"><img
                            src="<?php echo $BASE_URL; ?>project_3/calculadora.png" alt="Logo do projeto Calculadora Javascript"></a></div>
                <div><a href="<?php echo $BASE_URL; ?>project_4/" target="_blank"><img
                            src="<?php echo $BASE_URL; ?>project_4/jogo-da-velha.png" alt="Logo do projeto Jogo da Velha"></a></div>    
            </div>
        </section>
        <section class="section-3">
            <h1>Stack</h1>
            <div class="stack-carousel">
                <div><img src="assets/php.png" alt="Imagem do PHP"></div>
                <div><img src="assets/html.png" alt="Imagem do HTML"></div>
                <div><img src="assets/css.png" alt="Imagem do CSS"></div>
                <div><img src="assets/mysql.png" alt="Imagem do MYSQL"></div>
                <div><img src="assets/PS.png" alt="Imagem do Photoshop"></div>
                <div><img src="assets/javascript.png" alt="Imagem do JavaScript"></div>
                <div><img src="assets/python.png" alt="Imagem do Python"></div>


            </div>
        </section>
    </main>
    <footer>
        <h3>Guilherme Rodrigues &copy; <?= date("Y"); ?></h3>
    </footer>
</body>

<script type="text/javascript">
    $(document).ready(function(){
        $('.stack-carousel').slick({
            infinite: true,
            slidesToShow: 4, /* Exibe até 5 imagens por vez */
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000, /* Movimento mais rápido */
            speed: 800, /* Transição suave e rápida */
            arrows: false,
            dots: false,
            pauseOnHover: false, /* Continua mesmo com o mouse sobre */
            centerMode: false,
            variableWidth: false, /* Todas as imagens com o mesmo tamanho */
        });
    });
    
    $(document).ready(function(){
        $('.projects-carousel').slick({
            infinite: true,
            slidesToShow: 4, /* Exibe até 5 projetos por vez */
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000, /* Movimento suave */
            speed: 1000, /* Transição suave */
            arrows: false,
            dots: false,
            pauseOnHover: false,
            centerMode: false,
            variableWidth: false, /* Tamanho uniforme para as imagens */
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
    
</script>




</html>
