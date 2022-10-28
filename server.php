    
<!-- pour que le navigateur connait que c'est du html-->
<!DOCTYPE html>
<html lang="en">

<!-- le haut de site en tete-->
 <head class="en_tete">
<!-- pour connait bien le codage des ascent-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <!--   <meta name="viewport" content="width=device-width, initial-scal=1">  -->

<!-- le titre qui cecrit en haut de navigyeur -->
    <title>Halifax Canoe and Kayak</title>

    <!-- lier avec fichier css -->
     <link rel="stylesheet" href="style.css" type="text/css" />

   <!--  <a href="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" class="icone" alt="icone"></a>"-->
  

<!--le corp du page -->
  <body>

<!--l'entete du corp-->
    <header>
    <?php
      include("head.php");
    ?>
      <p>Thank you  
        <?php 
            echo $_POST["Fir_Nam"];
          ?> 
         <?php 
            echo $_POST["Fam_Nam"];
          ?> 
           For Reservation.</p>
    </header>
    
        <p>we will contact you in Email :
          <?php 
            echo $_POST["email_inp"];
          ?>  
        </p>

        <p> about the location  :
          <?php
            echo $_POST["location"];
           ?>
        </p>

        <p> your trip on Date   :
          <?php 
            echo $_POST["dat"];
          ?>  
        </p>

        <footer>

    <?php
       include("footer1.php");
    ?>
        </footer>
  </body>
</html>