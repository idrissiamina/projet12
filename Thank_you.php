<?php
      include("head.php");
    ?>

     <link rel="stylesheet" href="thankyou.css" type="text/css" />

     <div class="thank">
     <p id="tky1"> <br/>Thank you  </p>
     <br>
   
          <p>Thank you  
        <?php 
            echo $_POST["Fir_Nam"];
          ?> 
         <?php 
            echo $_POST["Fam_Nam"];
          ?> 
           for Reservation.</p>
    
        <p>We will contact you in Email :
          <?php 
            echo $_POST["email_inp"].".";
          ?>  
        </p>

        <p> About the location  :
          <?php
            echo $_POST["location"].".";
           ?>
        </p>

        <p> Your trip on Date   :
          <?php 
            echo $_POST["dat"].".";
          ?>  
        </p>

        </div>
        
    <?php
       include("footer1.php");
    ?>
       