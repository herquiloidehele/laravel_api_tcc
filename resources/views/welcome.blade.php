<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API Agri</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
    </head>

    <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light fixed-top" id="navidation-bar">
        <div class="container">
            <a class="navbar-brand" href="/">API - AGRI</a>
            <a class="btn btn-primary" href="/register">Criar Conta</a>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">API Agricultura</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="row">
                            <div class="col-12 ">
                                <a href="/documentacao" class="mx-auto  btn  btn-lg btn-primary"> Documentação</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-screen-desktop m-auto text-primary"></i>
                        </div>
                        <h3>Fácil Integrar</h3>
                        <p class="lead mb-0">Integrável a qualquer aplicação independente da plataforma</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-layers m-auto text-primary"></i>
                        </div>
                        <h3>Fácil de Manipular</h3>
                        <p class="lead mb-0">Os dados são disponibilizados em formatos em json (Javasript Object Notation)</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="icon-check m-auto text-primary"></i>
                        </div>
                        <h3>Fácil de Usar</h3>
                        <p class="lead mb-0">Com uma documentação muito clara, torna-se muito facil de usar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">

                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/cross-platform.png');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Integração a Diferentes Plataformas</h2>
                    <p class="lead mb-0">A integração pode ser feita em diferentes plataformas, desde
                        Desktop, Web e Mobile (Android, IOS, Windows Phone, incuido SSD Apps)</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Conexão com Qualquer Linguagem de Programação</h2>
                    <p class="lead mb-0">A integracao pode ser feita com recurso a diferentes linguagens de Programação, desde Java, PHP, Javascript, Python, Swift, GO entre outras</p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/json-snipet.png');"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Comunição no Format JSON</h2>
                    <p class="lead mb-0">Toda a interação e comunicação é feita com recusro a JSON (Javascript Object Notation), por ser fácil, rapido e acessivel</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Pronto para Começar? Veja a Documentação...</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <div class="form-row">
                        <div class="col-12 center-text">
                            <a href="/documentacao"  class="btn btn-lg btn-primary">Documentação</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Herquiloide 2019. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="https://www.facebook.com/herquiloide">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="https://www.tweeter.com/herquiloide">
                                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/herquiloidehele/">
                                <i class="fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </body>

        <script src="{{asset('js/script.js')}}"></script>

</html>
