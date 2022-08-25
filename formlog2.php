<?php
$host="localhost";
$user="root";
$password="";
$db="test";


mysql_connect($host,$user,$password) ;
$mysql_select_db($db) ;
if(isset($_POST['username'])){
   $uname=$_post['username'];
   $password=$_post['password'];
   $sql= "select * from test where username='".$uname."' AND password='".$password."'
   limit 1;
   $result =mysql_query($sql);
   if(mysql_num_rows($result)==1){
     echo " yes";
     exit();
   }

    else{
        echo" wrong password";
        exit()
    }


}



?>