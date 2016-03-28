<?php
$pageTitle = 'Korisnici';
include './inc/header.php';

if($_SESSION['isLoged'] == TRUE){
    
}
 else {
     if ($_POST){
         $usermame = trim($_POST['username']);
         $password = trim($_POST['password']);
         
         if ($usermame == 'boris' && $password == 'todorov'){
             $_SESSION['isLoged'] = TRUE;
             header('Location: files.php');
         }
         
     }
     else{
         echo 'Greska';
     }
}


?>
      
<form method="post" style="text-align: center;">
    <div>
       Ime:<input type="text" name="username" />
    </div>
     <div>
        Sifra:<input type="text" name="password" />
    </div>
     <div>
         <input type="submit" value="GO"/>
    </div>
    
</form>


<?php

include './inc/footer.php';
        
   

