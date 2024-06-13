


<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>

   

    <section class="home-section" id="home-section">
	    <div class="home-section-content">
		    <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home-section-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-section-carousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/images/1.jpeg" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Nije samo šišanje, nego cijelo iskustvo</h3>
                            
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Design/images/druga.jpg" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                        <h3>Nije samo šišanje, nego cijelo iskustvo</h3>
                            
                        </div>
                    </div>
                   
                </div>
                
                <a class="carousel-control-prev" href="#home-section-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#home-section-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
		</div>
	</section>

    

    <section id="about" class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content" style="text-align: center;">
                        <h2>Barbershop <br>Amigo's</h2>
                        <img src="Design/images/about-logo.png" alt="logo">
                        <p style="color: #777">
                        Barber je osoba čije je zanimanje uglavnom šišanje mladoženja i brijanje kose muškaraca i dječaka. Radno mjesto brijača poznato je kao "brjačnica" ili "brijačnica". Brijačnice su također mjesta društvene interakcije i javnog diskursa. U nekim su slučajevima brijačnice također javne tribine.
                        </p>
                        <a href="#" class="default_btn" style="opacity: 1;">Više o nama</a>
                    </div>
                </div>
                <div class="col-md-6  d-none d-md-block">
                    <div class="about_img" style = "overflow:hidden">
                        <img class="about_img_1" src="Design/images/friz1.jpg" alt="about-1">
                        <img class="about_img_2" src="Design/images/friz2.jpg" alt="about-2">
                        <img class="about_img_3" src="Design/images/friz3.jpg" alt="about-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="services_section" id="services">
        <div class="container">
            <div class="section_heading">
                <h2>Naše usluge</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Kosa</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, suscipit. Placeat architecto neque nam doloremque.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-razor-2"></i>
                        <h3>Brada</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cupiditate recusandae qui inventore, molestiae dolorum?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padd_col_res" >
                    <div class="service_box">
                        <i class="bs bs-brush"></i>
                        <h3>Kosa i brada</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam magni enim voluptates quidem fugiat. Ad.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    

    <section class="book_section" id="booking">
        <div class="books_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="appointment.php" method="post" id="appointment_form" class="form-horizontal appointment_form">
                        <div class="book_content">
                            <h2 style="color: white;">Rezerviraj termin</h2>
                            <p style="color: #999;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, repellat? <br> Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>
                        

                        

                        <button id="app_submit" class="default_btn" type="submit">
                            Rezervacija
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    

    <section class="gallery-section" id="gallery">
        <div class="section_heading">
            <h2>Galerija</h2>
            <div class="heading-line"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/friz1.jpg');">    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/friz2.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/friz3.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/friz1.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/5.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/6.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/7.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/friz2.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <section id="team" class="team_section">
        <div class="container">
            <div class="section_heading ">
                <h2>Ekipa</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row"> 
                <li class="col-lg-12 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/druga.jpg" style="z-index: 1;" class="ekipa" alt="Team Member">
                    </div>
                
            </ul>
            
        </div>
    </section>

   

    <section id="reviews" class="testimonial_section">
        <div class="container">
            <div id="reviews-carousel" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/images/ekipa.jpg" alt="First slide" style="visibility: hidden;">
                        <div class="carousel-caption d-md-block">
                        <h3>Nije samo šišanje, nego cijelo iskustvo</h3>
                           
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>

  

    <section class="pricing_section" id="pricing">

       

            <?php

                $stmt = $con->prepare("Select * from service_categories");
                $stmt->execute();
                $categories = $stmt->fetchAll();

            ?>

       

        <div class="container">
            <div class="section_heading">
                <h2>Naše cijene</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <?php

                    foreach($categories as $category)
                    {
                        $stmt = $con->prepare("Select * from services where category_id = ?");
                        $stmt->execute(array($category['category_id']));
                        $totalServices =  $stmt->rowCount();
                        $services = $stmt->fetchAll();

                        if($totalServices > 0)
                        {
                        ?>

                            <div class="col-lg-4 col-md-6 sm-padding">
                                <div class="price_wrap">
                                    <ul class="price_list">
                                        <?php

                                            foreach($services as $service)
                                            {
                                                ?>

                                                    <li>
                                                        <h4><?php echo $service['service_name'] ?></h4>
                                                        <p><?php echo $service['service_description'] ?></p>
                                                        <span class="price">€<?php echo $service['service_price'] ?></span>
                                                    </li>

                                                <?php
                                            }

                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>

                        <?php
                        }
                    }

                ?>
                
            </div>
        </div>
    </section>

    

    <section class="contact-section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 sm-padding">
                    <div class="contact-info">
                        <h2>
                            Stupite u kontakt s nama i 
                            <br>pošaljite nam poruku!
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione est aliquam quidem quod autem deleniti quam atque aperiam magni quo.
                        </p>
                        <h3>
                        Adresa1
                            <br>
                            Adresa2
                            <br>
                            Adresa3 
                        </h3>
                        <h4>
                            <span style = "font-weight: bold">Email:</span> 
                            barbershop@gmail.com 
                            <br> 
                            <span style = "font-weight: bold">Phone:</span> 
                            +365 32135141231
                            <br> 
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <div class="contact-form">
                        <div id="contact_ajax_form" class="contactForm">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Ime">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Opis">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Poruka"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="contact_send" class="default_btn">Pošalji poruku</button>
                                </div>
                            </div>
                            <img src="Design/images/ajax_loader_gif.gif" id = "contact_ajax_loader" style="display: none">
                            <div id="contact_status_message"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="widget_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <br>
                    <div class="footer_widget">
                        <img src="Design/images/skarelogo.jpg" style="width: 60px;" alt="Brand">
                        <p>
                            Naš barbershop nije samo mjesto iz kojeg ćete izaći ne samo kao ljepši, već kao i bolji čovjek!
                        </p>
                        <ul class="widget_social">
                            <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <br>
                     <div class="footer_widget">
                        <h3>Lokacije</h3>
                        <p>
                        Adresa 1
                        </p>
                        <p>
                        Adresa 2
                        </p>
                        <p>
                            Adresa 3

                        </p>
                     </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <br>
                    <div class="footer_widget">
                        <h3>
                            Radno vrijeme
                        </h3>
                        <ul class="opening_time">
                            <li>Ponedjeljak - Petak 08:00 - 18:00</li>
                            <li>Subota 08:00 - 14:00</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    

    <?php include "Includes/templates/footer.php"; ?>