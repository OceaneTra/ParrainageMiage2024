<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JI 2024-2025</title>
</head>

<body>

    <div>
        <nav class="navbar navbar-expand-md">
            <a href="/"><img class="navbar-brand ms-3 img-h" src="/images/logoJI_v4.png" alt=""></a>

            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
                <i class="fa-thin fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="btn">
                <ul class="navbar-nav ms-auto ul-bg">
                    <li class="nav-item">
                        <a href="/ji/" class="nav-link mt-2 mx-3 fs-5">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="/ji/parrainage" class="nav-link mt-2 mx-3 fs-5">Parrainage</a>
                    </li>
                    <li class="nav-item">
                        <a href="/ji/restauration" class="nav-link mt-2 mx-3 fs-5">Restauration</a>
                    </li>
                    <li class="nav-item">
                        <a href="/ji/mon-compte" class="nav-link mt-2 mx-3 fs-5">Mon compte</a>
                    </li>
                    <li class="nav-item" id="inscription-nav">
                        <a href="/ji/inscription"
                            class="nav-link mt-2 px-4 mx-3 fs-5 my-button primary-button">Inscription</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main>
        @yield('content')
    </main>
    <footer class="footer-distributed mt-4">

        <div class="footer-left">

            <h3>JOURNÉE D'INTÉGRATION 2023<span></h3>
            <!-- <br><img style="height: 20vh;" src="images/logoJI_v2.png" alt=""></span> -->

            <p class="footer-links">
                <a href="/" class="link-1">Accueil</a>

                <a href="/ji/restauration">Restauration</a>

                <a href="/ji/parrainage">Parrainnage</a>
                <!-- <a href="/ji/panel">Panel</a> -->


            </p>

            <p class="footer-company-name">journée d'intégration © 2023</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>DÉPARTEMENT B2C</span> UNIVERSITÉ FHB </p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+225 07 52 78 85 20</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="">softJI@team</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p style="color: white;" class="footer-company-about">
                <span>Réseaux sociaux</span>
                Rejoignez-nous sur les réseaux sociaux pour suivre les activités de la JI
            </p>

            <div class="footer-icons">

                <a href="https://www.instagram.com/jimiage2023/"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>


            </div>

        </div>

    </footer>





    <!-- Modal HTML -->
    <div id="error-modal" class="modal fade">
        <div class="modal-dialog modal-confirm modal-error">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body text-center">
                    <h4 id="title-error">Ooops!</h4>
                    <p id="msg-error"></p>
                    <button class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <div id="success-modal" class="modal fade">
        <div class="modal-dialog modal-confirm modal-success">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="icon-box">
                        <i class="material-icons">&#xe5ca;</i>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                </div>
                <div class="modal-body text-center">
                    <h4 id="title-success">FELICITATION!</h4>
                    <p id="msg-success"></p>
                    <button class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/qrcode@latest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/javascripts/scripts.js"></script>
    <script src="/javascripts/requests.js"></script>
    <script type="text/javascript">
        $(".menu-toggle-btn").click(function() {
            $(this).toggleClass("fa-times");
            $(".navigation-menu").toggleClass("active");
        });
    </script>
</body>

</html>
