<?php
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_pward ='';
$mysql_db='realarts';
$coun_err='Could not connect';
global $connect;
$connect = mysqli_connect($mysql_host,$mysql_user,$mysql_pward,$mysql_db);

if(!$connect){
    die($coun_err);
}
/*else{
    if (mysqli_query($connect, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
      }
}*/
?>
