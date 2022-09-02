<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Front-End <?php echo date('Y-m-d');?></title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel = "stylesheet" href="css/styles.css">
    
    <!--Scripts-->
    <script src="js/scripts.js"></script>
    <script    src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--Progress Bar-->
    <script src="js/progressbar.min.js"></script>

    <!--Paralaxx-->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</head>

<body>
    <header>
        <div class= "container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="#" class="navbar-brand">
                    <img id="logo" src="img/hdcagency_logo.svg" alt="hDC Agency"> hDC Agency
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                    arial-controls= "navbar-links" arial-expanded="false" arial-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="home-menu">Home</a>
                        <a class="nav-item nav-link" id="about-menu">A agência</a>
                        <a class="nav-item nav-link" id="services-menu">Serviços</a>
                        <a class="nav-item nav-link" id="team-menu">Time</a>
                        <a class="nav-item nav-link" id="portfolio-menu">Projetos</a>
                        <a class="nav-item nav-link" id="contact-menu">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1">
                    <li data-target="#mainSlider" data-slide-to="2">
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner1.png" class="d-block w-100" alt="Projetos de e-commerce">
                        <div class="carousel-caption d-nome d-md-block">
                            <h2>Quer criar um e-commerce?</h2>
                            <p>Conte conosco, temos mais de 30 lojas no portifólio.</p>
                            <a href="#" class="main-btn">Ver portifólio</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="img/banner2.png" class="d-block w-100" alt="Engenharia de Software">
                        <div class="carousel-caption d-nome d-md-block">
                            <h2>Está querendo tirar o projeto do papel?</h2>
                            <p>Nossa equipe de engernharia de softwares está pronta para lhe atender</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="img/banner3.png" class="d-block w-100" alt="Manutenção em Software">
                        <div class="carousel-caption d-nome d-md-block">
                            <h2>Está buscando manutenção no seu software?</h2>
                            <p>A hDC conta com engenheiros altamentes qualificados para rexolver seu problema.</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>  
</body>
</html>