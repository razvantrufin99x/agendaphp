<?php
   include("toppage.php");
?>

<?php


  $i=0;
  $sql = " select * from utilizatori where id=".$_GET['id'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $i++;
	print ' ';
	print $row['id'];
	print ' ';
	print $row['nume'];
	print ' ';
	print $row['prenume'];
	print ' ';
	print $row['username'];
	print ' ';
	print $row['parola'];
	print ' ';
	print $row['telefon'];
	print ' ';
	print $row['adresa'];
	print ' ';
	print $row['email'];
	print ' ';
	
		
	print '</br>';
	
  }
  
  ?>




<?php
include("bottompage.php");
?>


