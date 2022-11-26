<?php
   include("toppage.php");
?>

<?php

//INSERT INTO `agenda`.`utilizatori` (`id`, `nume`, `prenume`, `parola`, `username`, `telefon`, `email`, `adresa`) VALUES ('1', 'razvan', 'alexandru', '130278', 'razvan99x', '0754357465', 'razvantrufin99x@gmail.com', 'sibiu, romania , strada bihorului 2');

  $sql = " select * from utilizatori ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    print ' <b>'.$row['id'].'</b> | ';
	print ' <b>'.$row['nume'].'</b> | ';
	print ' <b>'.$row['prenume'].'</b> | ';
	print ' <b>'.$row['username'].'</b> | ';
	print ' <b>'.$row['parola'].'</b> | ';
	print ' <b>'.$row['telefon'].'</b> | ';
	print ' <b>'.$row['email'].'</b> | ';
	print ' <b>'.$row['parola'].'</b> | ';
	print ' ';
    print ' <b><a href = "utilizator.php?id='.$row['id'].'">'.$row['id'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



