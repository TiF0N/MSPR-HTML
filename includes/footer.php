</main>

<footer id="footer" class="site-footer">
    <div class="container">

        <div class="grid-3">
            <div class="col">
                <div class="footer-plan">
                    <h6>Plan du site</h6>
                    <ul class="footer-links">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="concept.php">Concept</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="zenattitude.php">ZenAttitude</a></li>
                        <li><a href="tarifs.php">Tarifs</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="confidentiality.php">Confidentialité</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="footer-contact">
                    <h6>Nous contacter</h6>
                    <ul class="footer-find">
                        <li>Ouvert du lundi au vendredi de 7h à 22h</li>
                        <li>Adresse : Île de Versailles 44000 Nantes</li>
                        <li>Téléphone : 07.36.16.62.46</li>
                        <li>Email : contact@zenoffice.com</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="footer-find">
                    <h6>Nous trouver</h6>
                    <style>
                        /* Set the size of the div element that contains the map */
                        #map {
                            height: 280px;
                            width: 100%;
                            align-content: center;
                        }
                    </style>

                    <body>

                    <div id="map"></div>
                    <script>

                        function initMap() {

                            var Nantes = {lat: 47.2263792, lng: -1.556537};

                            var map = new google.maps.Map(
                                document.getElementById('map'), {zoom: 14, center: Nantes});

                            var marker = new google.maps.Marker({position: Nantes, map: map});
                        }
                    </script>

                    <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyjqStVo2J_5xPmPu4WqM4AWIuOzBnz1s&callback=initMap">
                    </script>
                    </body>
                </div>
            </div>
        </div>
        <div class="footer-social">
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
            <div class="copyright">
                <p>Copyright &copy; 2020 <a href="#">ZenOffice</a>.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <div class="container"

</footer>

