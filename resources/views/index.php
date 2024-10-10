<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JI MIAGE 2024-2025</title>
</head>

<body>
    <!-- DEBUT DU HEADER-->

    <nav>
        <a href="">Accueil</a>
        <a href="">Inscription</a>
        <a href="">Mon compte</a>
    </nav>


    <!--FIN DU HEADER-->

    <!-- DEBUT DU CONTENU PRINCIPALE -->

    <section>
        <div>
            <div>
                <div>
                    <!-- ICI IL Y AVAIT UN CAROUSEL QUI FAISAIT DEFILER LES IMAGES-->
                    <div>
                        <div>
                            <h3>JOURNÉE D'INTÉGRATION 2023</h3>
                            <p>Une histoire qui s'écrit chaque année.
                            </p>

                        </div>

                    </div>

                    <div>

                        <div>
                            <h3>JI 2025</h3>
                            <p>Inscris-toi dès maintenant</p>
                            <a href="">INSCRIPTION</a>
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#one-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#one-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- SECTION A PROPOS DE LA JI-->
        <div class="container">
            <div class="timer pt-4">
                <h2 class="text-center"> C'est pour bientôt!</h2>
            </div>
            <div id="apropos" class="container p-5 my-5 bg-cover rounded">
                <h1> A PROPOS</h1>
                <p>
                    La Journée d'Intégration est une occasion unique
                    pour les étudiants de renforcer leurs
                    liens avec les alumnis, le personnel administratif
                    et les entreprises qui les soutiennent. Cette année,
                    le thème sera: <b>"L'innovation du miagiste en milieu professionnel"</b>.
                    L'objectif est d'intégrer les nouveaux étudiants, partager des expériences inspirantes avec les
                    alumnis
                    et renforcer les liens entre les membres de la filière.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <img src="/images/conf.jpg" width="100%" alt="">
                </div>
                <div class="col-md-6 pt-4">
                    <h4 class="them">Thème:</h4>
                    <h1>LA POLYVALENCE DU MIAGISTE EN MILIEU PROFESSIONNEL</h1>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quasi vel rem quod earum eaque. Sint ab quaerat nostrum ut est. Consectetur nemo eos</p> -->
                    <!-- <br><br>
                <h4 class="them">Lieu:</h4>
                <h3>CAISTAB,PLATEAU</h3> -->
                </div>
            </div>
            <br><br><br>

            <!-- SECTION ACTUALITE-->
            <h1 class="text-center">
                ACTUALITÉS
            </h1>
            <div id="actualite" class="row owl-carousel owl-theme">
                <% locals.data.news.forEach(function(obj){ %>
                <div class="item event-card p-2 m-2 mb-4 shadow">
                    <img src="<%=obj.image%>" height="200px" alt="">
                    <div class="pt-2 px-2">
                        <h4><%=obj.title%></h4>
                        <p><%=obj.description%></p>
                    </div>

                </div>
                <% }); %>



            </div>
        </div>

        <br><br><br>
        <div class="activiter">

            <div class="row justify-content-center p-1">
                <div class="bg col-md-4 mt-3 mb-4 p-4 raduis-25">
                    <h1>ACTIVITÉS</h1>
                    <p>Ne te fais pas raconter la cérémonie!
                        <br>Ce programme a été concu pour toi.
                    </p>
                    <div style="padding:20px 0px 0px 20px;">
                        <% locals.data.activities.forEach(function(obj){ %>
                        <!-- <span class="activity-span"> -->
                        <a class="activity-span" style="text-decoration: none;"
                            href="/ji/panel/<%=obj.room%>"><%=obj.title%></a>
                        <!-- </span> -->

                        <!-- <div class="activity-card">
                                <div class="space-between">
                                    <span class="dot"></span>
                                    <div class="title">
                                        <span ><%=obj.title%></span>
                                        <h6 class="time"><%=obj.time%></h6>
                                    </div>
                                    
                                </div>
                                <div class="detail">
                                    <% if(obj.description!="") {%>
                                    <div class="description">
                                        <%=obj.description%>
                                    </div>
                                    <% } %>
                                </div>
                            </div>
                             -->

                        <% }); %>

                    </div>

                </div>
                <div class="col-md-5">
                    <div id="activities-img" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="/images/activity-1.jpg" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="/images/activity-2.jpg" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="/images/activity-3.jpg" width="100%" alt="">
                        </div>
                        <div class="item">
                            <img src="/images/activity-4.jpg" width="100%" alt="">
                        </div>




                    </div>

                </div>

            </div>
        </div>

        </div>

        <!-- FIN SECTION ACTIVITE-->

        <!-- POURQUOI LA JI-->


        <div class="modal" id="pourquoi-ji">
            <div class="modal-dialog modal-md modal-dialog-scrollable">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center">POURQUOI PARTICIPER A LA JI?</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body p-4">
                        <ul class="why-ji">
                            <li>
                                Les étudiants peuvent rencontrer des employeurs potentiels et postuler pour des stages
                                ou
                                des emplois.
                            </li>
                            <li>
                                Ils peuvent également obtenir des conseils et des informations sur les processus de
                                recrutement et les exigences des employeurs.
                            </li>
                            <li>
                                Les étudiants peuvent également découvrir les différentes opportunités de poursuite
                                d'études
                                et de carrière.
                            </li>
                            <li>
                                La Journée d'intégration offre également un excellent moyen de rencontrer des camarades
                                de
                                classe et de se connecter avec d'autres étudiants qui ont des intérêts similaires.
                            </li>
                            <li>
                                C'est une occasion pour les étudiants de développer leur réseau professionnel et de se
                                connecter avec des professionnels expérimentés dans leur domaine d'intérêt.
                            </li>
                            <li>
                                C'est un excellent moyen de découvrir les opportunités de carrière et de se préparer
                                pour
                                l'entrée sur le marché du travail, en se concentrant sur leur capacité à être
                                polyvalent.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <%- include('components/footer'); -%>


    <script type="text/javascript">
    $(document).ready(function() {
        if (localStorage.getItem("read") == null) {
            $("#pourquoi-ji").modal('show');
            localStorage.setItem("read", true)
        }
    });



    $('#actualite').owlCarousel({
        loop: false,
        margin: 1,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        },
        dots: true,

    })
    $('#activities-img').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 1,
        nav: false,
        items: 1,
        dots: true,

    })

    $(".carousel3").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: false,
        // autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    });
    </script>
</body>

</html>


</body>

</html>