<?php
    include ".env";

    $connectionInfo = array(
        "UID" => "" . getenv("DB_SERVER") . "",
        "pwd" => "" . getenv("DB_PASSWORD") . "",
        "Database" => "" . getenv("DB_NAME") . "",
        "LoginTimeout" => 30,
        "Encrypt" => 1,
        "TrustServerCertificate" => 0
    );
    
    $server_name = "" . getenv("DB_SERVER") . "," . getenv("DB_PORT") . "";
    // $conn = sqlsrv_connect($server_name, $connectionInfo);
?>

<!DOCTYPE html>
<html lang="it">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets\styles\main.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
      <title>JackComputers</title>
    </head>
    <body>
        <!-- NAVBAR -->
        <?php include("includes/navbar/navbar.php"); ?>

        <!-- LOGIN - REGISTER -->
        <?php include("includes/login-register/login-register.php"); ?>

        <!-- CAROSELLO -->
        <div class="main">
            <!-- SIDEBAR LEFT-->
            <div class="sidebar-left">
                <p>qui andranno i filtri di ricerca</p>
            </div>
        
            <div class="carosello_content">
                <div id="carouselExampleIndicators" class="carousel slide w-75 mx-auto custom-carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets\img\carousel\pc-carousel-1.jpg" class="d-block w-100" alt="img1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/carousel/pc-carousel-2.jpg" class="d-block w-100" alt="img2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/carousel/pc-carousel-3.jpg" class="d-block w-100" alt="img3">
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
                <!-- CONTENT -->
                <div class="content-container content">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex cupiditate, magni necessitatibus tempora sunt, quasi possimus accusamus impedit, maxime non eligendi dolor repellat deserunt omnis obcaecati laboriosam quis architecto amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cupiditate nemo accusantium? Doloremque labore asperiores distinctio magnam vero enim similique consectetur quas iusto! Vitae consectetur distinctio accusamus! Dolor, dolores nihil? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat soluta sequi nostrum adipisci praesentium ea rerum culpa, perspiciatis ab tempore sed consectetur incidunt eius tenetur pariatur sapiente! Laudantium, provident iusto!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex cupiditate, magni necessitatibus tempora sunt, quasi possimus accusamus impedit, maxime non eligendi dolor repellat deserunt omnis obcaecati laboriosam quis architecto amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cupiditate nemo accusantium? Doloremque labore asperiores distinctio magnam vero enim similique consectetur quas iusto! Vitae consectetur distinctio accusamus! Dolor, dolores nihil? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat soluta sequi nostrum adipisci praesentium ea rerum culpa, perspiciatis ab tempore sed consectetur incidunt eius tenetur pariatur sapiente! Laudantium, provident iusto!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex cupiditate, magni necessitatibus tempora sunt, quasi possimus accusamus impedit, maxime non eligendi dolor repellat deserunt omnis obcaecati laboriosam quis architecto amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cupiditate nemo accusantium? Doloremque labore asperiores distinctio magnam vero enim similique consectetur quas iusto! Vitae consectetur distinctio accusamus! Dolor, dolores nihil? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat soluta sequi nostrum adipisci praesentium ea rerum culpa, perspiciatis ab tempore sed consectetur incidunt eius tenetur pariatur sapiente! Laudantium, provident iusto!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex cupiditate, magni necessitatibus tempora sunt, quasi possimus accusamus impedit, maxime non eligendi dolor repellat deserunt omnis obcaecati laboriosam quis architecto amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cupiditate nemo accusantium? Doloremque labore asperiores distinctio magnam vero enim similique consectetur quas iusto! Vitae consectetur distinctio accusamus! Dolor, dolores nihil? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat soluta sequi nostrum adipisci praesentium ea rerum culpa, perspiciatis ab tempore sed consectetur incidunt eius tenetur pariatur sapiente! Laudantium, provident iusto!
                </div>
            </div>
            
            <!-- SIDEBAR RIGHT-->
            <div class="sidebar-right">
                <h5>PARTNERS</h5>
                <a href="#AMD-page"><img src="assets\img\brands\amd.jpg" alt="amd"></a>
                <a href="#ASUS-page"><img src="assets\img\brands\asus.jpg" alt="asus"></a>
                <a href="#GIGABYTE-page"><img src="assets/img/brands/gigabyte.jpg" alt="gigabyte"></a>
                <a href="#INTEL-page"><img src="assets\img\brands\intel.jpg" alt="intel"></a>
                <a href="#MSI_page"><img src="assets/img/brands/msi.jpg" alt="msi"></a>
                <a href="#NVIDIA-page"><img src="assets\img\brands\nvidia.jpg" alt="nvidia"></a>
                <a href="#SAPPHIRE-page"><img src="assets\img\brands\sapphire.jpg" alt="sapphire"></a>
            </div>
        </div>
        
        <!-- NEWSLETTER -->
        <div class="container newsletter">
            <h1>ISCRIVITI ALLA NEWSLETTER</h1>

            <div class="inserisci-email">
                <div class="registrati-news">    
                    <input type="email" placeholder="Inserisci il tuo indirizzo email">
                    <input type="button" value="Registrati">
                </div>
                <div class="acc-reg">
                    <label><input type="checkbox">Dichiaro di aver almeno 14 anni e di volermi iscrivere alla newsletter per ricevere comunicazioni commerciali e promozionali.</label>
                </div>
                
            </div>
        </div>

        <!-- PRE-FOOTER -->
        <div class="container pre-footer">
            <div class="row">
                <div class="col">
                    <h5>Consegna</h5>
                    <h5>Gratuita e veloce</h5>
                    <p>Ricevi gli ordini in 3 giorni lavorativi</p>
                </div>
                <div class="col">
                    <h5>Reso Gratuito</h5>
                    <h5>Gratuita e veloce</h5>
                    <p>Restituisci i prodotti entro 30 giorni</p>
                </div>
                <div class="col">
                    <h5>Pagamento a Rate</h5>
                    <h5>Gratuita e veloce</h5>
                    <p>Paga con <strong>Klarna</strong> in 3 rate senza interessi</p>
                </div>
                <div class="col">
                    <h5>Assistenza dedicata</h5>
                    <h5>Gratuita e veloce</h5>
                    <p>Lunedì-Venerdì (Eccetto festivita)</p>
                    <p style="margin-top:-17px;">8:00 - 18:00 Tel. 123 456 7890 da fisso o mobile</p>
                </div>
            </div> 
        </div>

        <?php include("includes/footer/footer.php"); ?>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="assets\scripts\script.js"></script>
    </body>
</html>