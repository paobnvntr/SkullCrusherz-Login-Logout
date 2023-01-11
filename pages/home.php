<?php include('./layout/header.php'); ?>

<section id="home">
    <div class="container-fluid" id="intro-landing">
        <?php include(dirname(__FILE__) . '/layout/navbar.php'); ?>
        <div class="container-fluid" id="homepage">
            <div  id="intro-home">
                <h1>Introducing<br>CrushBeats Pro</h1>
                <p>Tired of the outside noise? Order now!</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid carousel-section">  
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="../assets/images/carousel-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Simple and elegant sound, adopt OFC + OFC with silver plated braided cable, <br>
                            achieving the sound fidelity and musicality and making the monitoring more emotional.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="../assets/images/carousel-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>CrushBeats Pro is a hybrid IEM, with 2BA 1DD driver, including 7mm titanium-plated dome <br> 
                            PU composite high poly fiber suspension diaphragm dynamic unit, Knowles RAF-32873 BA <br>
                            unit and customized BTC-30095 BA driver.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/carousel-3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Collecting a large amount of real human auricle model data,combining ergonomics to design <br> 
                            the shape of the cavity more in line with the Asian auricle, just to bring you a more <br>
                            comfortable wearing experience.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid" id="gumiho">
        <div class="description">
            <h1 class="text-center">10mm CrushBeats Driver</h1>
            <p>New generation of 10*10mm driver for bass. After testing hundreds of driver materials, at last our own material & mechanical design was achieved. It breaks through in the low-frequency limit of dynamic driver. With excellent transient response, the low frequency maintains a sense of depth and volume.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="description" id="frequency">
            <h1 class="text-center">High Frequency – Custom BTC-30095</h1>
            <p>Customized BTC-30095 BA driver is responsible for the high frequency, making sound  round and transparent, result in fast transient response. After scientific adjustment, it not only closely connects with the mid-range, but also gives full play to the excellent characteristics, to ensure high frequency ductility and separation.</p>
            <br>
            <h1 class="text-center">Frequency Graph</h1>
            <img src="../assets/images/graph.png" id="graph">
        </div>
    </div> 
</section>

<section>
    <div class="container-fluid double-grid">
        <div id="location">
            <h1 class="text-center">SKULLCRUSHERZ FACTORY</h1>
        </div>
        
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424146.10295281606!2d150.65178197337877!3d-33.84735666154916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2sph!4v1669606442997!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php include('./layout/footer.php'); ?>