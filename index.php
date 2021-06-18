<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personal portfolio Website</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/e5aebb08d9.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    </head>

    


    <body>
        <div class="scroll-up-btn">
            <i class="fas fa-angle-up"></i>
        </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Over mij</a></li>
                <li><a href="#services">Projecten</a></li>
                <li><a href="#skills">Vaardigheden</a></li>
                <li><a href="#teams">Werkervaring</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hoi, mijn naam is</div>
                <div class="text-2">Daniel Garcia Espinales</div>
                <div class="text-3">en ik ben een <span class="typing"></span></div>
                <a href="#contact">Neem contact</a>
            </div>
        </div>
    </section>

    <!--About section-->

    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Over mij</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="" alt="image">
                </div>
                <div class="column right">
                    <div class="text">Ik ben Daniel en ik ben een <span>student</span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae harum fuga quis eius modi voluptatibus vitae, adipisci nesciunt id ea, et non omnis ex cupiditate commodi distinctio iure reprehenderit consequatur?</p>
                    <a href=#>Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!--Services section-->
    <section class="services" id="services">
    <div class="max-width">
    <h2 class="title">Projecten</h2>
    <div class="serv-content">
<?php
            $connection = mysqli_connect("localhost","root","","portfolio");
            $select = "SELECT projectnaam, projectomschrijving from projecten";
            $result = mysqli_query($connection,$select);
            
            while ($row = mysqli_fetch_array($result)){

                $projectnaam          = $row['projectnaam'];
                $projectomschrijving  = $row['projectomschrijving'];
                
                
                echo"<div class=\"card\">";
                echo"<div class=\"box\">";
                echo"<i class=\"fas fa-code\"></i>";
                echo"<div class=\"text\">$projectnaam</div>";
                echo"<p>$projectomschrijving</p>";
                echo"</div>";
                echo"</div>";

            }
            
        
        ?>
    
                
            </div>
        </div>
    </section>

    <!--Skills section-->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experience.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ut qui deserunt enim porro minima aut, cupiditate dolores vero aliquid nisi, tempora officiis blanditiis natus ipsam exercitationem totam quae. Unde voluptates esse fugit consectetur praesentium temporibus, perspiciatis eveniet reprehenderit dignissimos quae inventore eaque sapiente eligendi quasi laboriosam laborum illo veritatis accusantium eum fuga alias vero maiores porro earum? Asperiores, placeat.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">

                <?php
            $connection = mysqli_connect("localhost","root","","portfolio");
            $select = "SELECT skill_naam , width  from skills";
            $result = mysqli_query($connection,$select);
            while ($row = mysqli_fetch_array($result)){

                $skillnaam               = $row['skill_naam'];
                $width                   = $row['width'];

                    echo"<div class=\"bars\">";
                        echo"<div class=\"info\">";
                            echo"<span>$skillnaam</span>";
                            echo"<span>$width</span>";
                        echo"</div>";
                        echo"<div class=\"line skillline\" style=\"--width-var: $width;\"></div>";
                    echo"</div>";

            }
                    ?>
            </div>
        </div>
    </section>

    <!--Teams section-->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Werkervaring</h2>
            <div class="carousel owl-carousel">

                
                <?php
            $connection = mysqli_connect("localhost","root","","portfolio");
            $select = "SELECT ervaring_bedrijf , ervaring_omschrijving , plaatje from ervaring ";
            $result = mysqli_query($connection,$select);
            while ($row = mysqli_fetch_array($result)){

                $ervaring_bedrijf               = $row['ervaring_bedrijf'];
                $ervaring_omschrijving                   = $row['ervaring_omschrijving'];
                $plaatje                   = $row['plaatje'];

                    echo"<div class=\"card\">";
                    echo"<div class=\"box\">";
                    echo"<img src=\"./images/$plaatje\">";
                    echo"<div class=\"text\">$ervaring_bedrijf</div>";
                    echo"<p>$ervaring_omschrijving</p>";
                    echo"</div>";
                    echo"</div>";

            }
            ?>
            </div>
        </div>
    </section>

    <!--Contact section -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in touch</div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore velit quia harum iste quaerat ea facere delectus aut deserunt asperiores?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Daniel Garcia Espinales</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adres</div>
                                <div class="sub-title">Venkelstraat 5, Haarlem</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">D.a.garcia.espinales@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Stuur mij een bericht.</div>
                    <form action="index.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="naam" placeholder="*Naam..." required>
                            </div>
                            
                            <div class="field email">
                                <input type="email" name="email" placeholder="*Email..." required>
                            </div>
                            
                        </div>
                        
                        <div class="fields">
                            <div class="field bedrijfnaam">
                                <input type="text" name="bedrijfnaam" placeholder="Bedrijfsnaam..." >
                            </div>
                            
                            <div class="field vestigingsplaats">
                                <input type="text" name="vestigingsplaats" placeholder="Vestigingsplaats..." >
                            </div>
                            
                        </div>
                        
                        <div class="fields">
                            <div class="field adres">
                                <input type="text" name="adres" placeholder="Adres..." >
                            </div>
                            
                            <div class="field postcode">
                                <input type="text" name="postcode" placeholder="Postcode..." >
                            </div>
                            
                        </div>

                        <div class="field">
                                <input type="text" name="telefoonnummer" placeholder="Telefoonnummer..." >
                            </div>

                        <div class="field">
                                <input type="text" placeholder="*Onderwerp..." name="onderwerp" required>
                            </div>
                            <div class="field textarea">
                                <textarea  cols="30" rows="10" placeholder="*Bericht..." name="bericht" required></textarea>
                            </div>
                            <div class="button">
                                <button type="submit" name="submit">Verzend</button>
                            </div>
                    </form>

                    <?php
					$naam = "";
					$email = "";
                    $bedrijfnaam = "";
                    $vestigingsplaats = "";
					$adres = "";
					$postcode = "";
					$telefoonnummer = "";
					$onderwerp = "";
                    $bericht ="";
					$invoerfouten = array();
				
					
					if (isset($_POST['submit'])){
						$naam			        = $_POST['naam'];
						$email 	                = $_POST['email'];
                        $bedrijfnaam 			= $_POST['bedrijfnaam'];
						$vestigingsplaats 		= $_POST['vestigingsplaats'];
						$adres 			        = $_POST['adres'];
						$postcode		        = $_POST['postcode'];
						$telefoonnummer	        = $_POST['telefoonnummer'];
						$onderwerp	            = $_POST['onderwerp'];
                        $bericht                = $_POST['bericht'];


                        if (!ctype_alpha($naam)){
                            array_push($invoerfouten, "Naam is niet geldig");
                        }

                        if (!preg_match('/^[0-9]{4}+[A-Z]{2}+$/', $postcode) && $postcode != null)
                        {
                            array_push($invoerfouten, "Uw postcode moet een geldig formaat zijn. Voorbeeld: 0000AA");
                        }

                        if(!is_numeric($telefoonnummer) && $telefoonnummer != null){
                            array_push($invoerfouten, "Telefoonnummer mag geen letters bevatten");
                        }

                        if(!ctype_alnum($vestigingsplaats)){
                            array_push($invoerfouten, "Vestigingsplaats moet alfanumeriek zijn");
                        }

                            
                        

						if (count($invoerfouten)== 0){
							
							$connection = mysqli_connect("localhost","root","","portfolio");
							$sql = "insert into contact(naam,email,bedrijfnaam,vestigingsplaats, adres, postcode, telefoonnummer, onderwerp , bericht, datum)
												values('$naam','$email','$bedrijfnaam', '$vestigingsplaats','$adres','$postcode','$telefoonnummer', '$onderwerp', '$bericht', now())";
							//echo $sql;
							mysqli_query($connection, $sql);
							
							
						}
						else{
							
							foreach ($invoerfouten as $invoerfout){
								
								echo "<div style=color:red>".$invoerfout."</div>";
							}
						}
					} 
			?>  
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <span>Created By <a href="#">Daniel Garcia Espinales</a> | <span class="far fa-copyright"></span>2020 all rights reserved</span>
    </footer>
    <script src="script.js"></script>
    </body>


</html>
