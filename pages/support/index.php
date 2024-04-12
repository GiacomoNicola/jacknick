<!DOCTYPE html>
<html lang="it">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
      <link rel="stylesheet" href="/assets/styles/support.css">
      <title>JackComputers - Support</title>
    </head>
    <body style="padding-top: 0;">

        <?php include("../../includes/navbar/navbar-page.php"); ?>

        <!-- SEARCH BAR -->
        <div class="container-search">
            <h1 class="support-title">COME POSSIAMO AIUTARTI?</h1>
            <div class="search-form">
                <form action="#" method="get">
                    <input type="search" name="q" placeholder="Cerca...">

                    <input type="submit" value="Cerca">
                </form>
            </div>
        </div>

        <div class="grey-box">
            <!-- GRIGLIA -->
            <h2 class="support-title">CERCA PER CATEGORIA DI PRODOTTO</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 text-center">
                        <ion-icon style="width: 100px; height: 100px"  name="desktop-outline"></ion-icon>
                        <p>Computers</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <ion-icon style="width: 100px; height: 100px" name="hardware-chip-outline"></ion-icon>
                        <p>Parti di ricambio</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <ion-icon style="width: 100px; height: 100px" name="cube-sharp"></ion-icon>
                        <p>Ordini</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <ion-icon style="width: 100px; height: 100px" name="cog-sharp"></ion-icon>
                        <p>Periferiche</p>
                    </div>
                </div>
            </div>

            <!-- CONTACT AREA -->
            <h2 class="support-title">NON TROVI ANCORA QUELLO CHE CERCI? MANDACI UNA EMAIL</h2>
            <div class="support-form">
                <form action="#">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required><br>
                    <label for="textarea">Descrivi il problema</label>
                    <textarea style="resize:none" name="textarea" cols="100" rows="20"></textarea>

                    <input type="submit" name="submit" value="submit">
                </form>     
            </div>   
        </div>

        <?php include("../../includes/footer/footer.php"); ?>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>