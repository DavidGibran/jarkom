<?php include("inc_header.php") ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./asset/model1.jpg" class="d-block w-100" alt="model1">
        </div>
        <div class="carousel-item">
            <img src="./asset/model2.jpeg" class="d-block w-100" alt="model2">
        </div>
        <div class="carousel-item">
            <img src="./asset/model3.jpeg" class="d-block w-100" alt="model3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?php include("product_slider.php") ?>

<div class="main-photo">
    <img src="./asset/Hoodie-enigma.png" class="img-fluid main-model" alt="mainModel">
</div>

<div class="secondary-photo">
    <img src="./asset/tshirt1.jpeg" class="img-fluid secondary-model" alt="secondModel">
    <img src="./asset/tshirt2.jpeg" class="img-fluid secondary-model" alt="secondModel">
</div>

<?php include("inc_footer.php") ?>