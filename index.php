<?php 
    include 'init.php';
    include 'header.php';
    ?>
    <div class="container pb-1">
        <div class="ab justify-content-center text-center" 
            style="background-image : url('<?php echo $img .'background_tech.jpg'; ?>');">
            <h3 class="mt-5 mb-5 pt-5" style="color : #fff !important;">Through the smart management website, you can conduct transactions electronically without the trouble 
                of navigating to the relevant departments
            </h3>
            <h6 class="mt-5 mb-5" style="color : #fff !important;">
            You can request the national card, extract civil status documents, book travel visas and an appointment 
            with embassies or any ministry. You can also make online payments, book airline tickets and many more.
            </h6>
        </div>
        <div class="content">
            <!--ministries-->
            <div class="ministries">
                <h3 class="mt-3 mb-3 text-center color-w">1- Ministries</h3>

                <div class="card-group">
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .'وزارة_التعليم_العالي.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ministry of Higher Education and Scientific Research</h5>
                            <p class="card-text">Through the Ministry of Education website, you can register for any university or scholarship - 
                                submit an application for a student card - obtain courses, files, education books and many more.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .'وزارة_الخارجية.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ministry of Foreign Affairs</h5>
                            <p class="card-text">Through the Ministry of Foreign Affairs website, you can get all your files and documents signed electronically 
                                - with instructions and information about all embassies in the country.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $img .'وزارة_الداخلية.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ministry of Communication</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>
             <!--embassies-->
            <div class="embassies">
                <h3 class="mt-3 mb-3 text-center color-w">2- Embassies</h3>

                <div class="card-group">
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .'سفارة_الجزائر_ببيروت.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Embassy of Algeria in Beirut</h5>
                            <p class="card-text">Through the embassies’ websites, you can: book an appointment with the embassy 
                                - electronically authenticate files - get instructions around the country 
                                - book a visa online and much more.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .'سفارة_الجزائر_بروما.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Embassy of Algeria in Rome</h5>
                            <p class="card-text">Through the embassies’ websites, you can: book an appointment with the embassy 
                                - electronically authenticate files - get instructions around the country 
                                - book a visa online and much more.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $img .'سفارة_الجزائر_ابوظبي.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Embassy of Algeria in Abu Dhabi</h5>
                            <p class="card-text">Through the embassies’ websites, you can: book an appointment with the embassy 
                                - electronically authenticate files - get instructions around the country 
                                - book a visa online and much more.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>

             <!--Transport-->
             <div class="transport">
                <h3 class="mt-3 mb-3 text-center color-w">3- Transport</h3>
                <p class="text-center color-w">Through the transportation site, you can book airline tickets using your identity number 
                    and credit card - book a tramway ticket or even book a taxi to move around in comfort and safety.</p>
                <div class="card-group">
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .'الخطوط_الجوية.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Algerian airlines</h5>
                            <p class="card-text">Online reservation of airline tickets.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .'ترامواي.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">tram lines</h5>
                            <p class="card-text">Reservation of tram tickets.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $img .'طاكسي.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Taxi</h5>
                            <p class="card-text">Book a taxi.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>

             <!--Others-->
             <div class="other">
                <h3 class="mt-3 mb-3 text-center color-w">4- Others</h3>
                
                <div class="card-group">
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .'بحث_عن_وظائف.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Choose work,training ...</h5>
                            <p class="card-text">Online chhose works, training and others.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card mr-1">
                        <img class="card-img-top" src="<?php echo $img .'حجز_فنادق.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Reservation of hotel rooms.</h5>
                            <p class="card-text">Reservation of hotel rooms online.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $img .'دفع_اونلاين.jfif'; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Pay online</h5>
                            <p class="card-text">Pay your expenses online.</p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--more link-->
            <div class="more justify-content-center text-center mt-4 mb-3">
                <p class="more-p mb-3">You can view more of services online</p>
                <a href="#" class="more-link">view more</a>
            </div>
        </div>
    </div>

    <?php
    include 'sidebar.php';
?>
<?php
    include 'footer.php';
?>

