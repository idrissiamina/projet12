
    <?php
      include("head.html");
    ?>

    <title>Page de Securité</title>
   
    <link rel="stylesheet" href="securit.css" type="text/css" />
    
<!--le corp du page -->
  <body>


  <form action="user.php" method="post"><br>
  <div class="secu"> <br><br><br> 
        <p id="txt_conf1">Form security </p><br>

        <div class="form3">
        
        <p id="txt_conf2"> Type  : </p><br>

        <label for="User">Your User    : </label>
        <input type="text" name="user" id="user" placeholder="Type your User"><br><br>


        <label for="mdp"> Your Pass Word    : </label>
        <input type="password" name="mdp" id="mdp" placeholder="Type your Pass Word" ><br><br>
        <input id="sub1" type="submit" value="Connecter" >
      </div>
</form>
    
<footer>

    
        </footer>
  </body>
</html>

<?php
       include("footer1.html");
    ?>

<?php 
  Function pre_r($array){
      echo '<pre>';
           print_r($array); 
      echo '</pre>';
 }
?>