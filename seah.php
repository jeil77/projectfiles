<?php

$con= mysqli_connect('localhost','root','','med');

if (isset($_get["search"])){
    $name= $_get["text"] ;
   $sql = "SELECT * FROM  search WHERE name LIKE '%$name%'" ;
   $exe = mysqli_query($con,$sql)
   
    or die("query failled");
    if(mysqli_num_rows($exe) > 0){
     $count=0;
    while ($row = mysqli_fetch_assoc($exe)) {
      $count++;
  
      ?>
<!DOCTYPE html>
<html>
<head>
  <title>search for medicine  </title>

</head>
<body>
 <table> 
<form action="seah.php" method="post">
<label>search</label>
<input type="text" name="search">
<input type="submit" name="search">  
<a type="submit" name="search">hkh</a>  

</form>
     
      <tr>
          <td>  
               <?php echo $count; ?>
          </td> 
            <td> <?php echo $row['name'];?> </td>
     </tr>
    </table>
     </body>
</html>
<?php 

    
    
}    ?>
