
<!-- 
  table name=login
database name=phppro -->

<html>
  <head>
    <link rel="stylesheet" href="welcome_style.css"></link>
  </head>
    <body>
    <h1>LOGIN</h1>
        <form method="post" action="welcome.php">
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <h6>USERNAME:</h6>
          <input type="text" size="30px" width="10px" name="t1">

          <h6>PASSWORD:</h6>
          <input type="password"size="30px" width="10px" name="t2"><br><br>

          <input type="submit" name="b1" value="login">
          <input type="submit" name="b1" value="signup">
        </form>
    </body>
</html>
<?php
$ch=$_POST["b1"];
if($ch=='login'){
$con=mysql_connect("localhost","root","");
if($con==false){
die("Error in database connection......");
}
$u=$_POST["t1"];
$p=$_POST["t2"];
mysql_select_db("phppro");
$res=mysql_query("select * from login where username='$u'and password='$p'");
if($row=mysql_fetch_array($res))
header("location:http://www.unipune.ac.in");
else
echo("invalid user and password....");

}
if($ch=="signup"){
  header("location:signup.php");}
?>