<html>
    <head>
        <link rel="stylesheet" href="signup_style.css">
    </head>
    <body>
        <h1>REGISTRATION</h1>
        <form method="post" action="signup.php">
           <h6> NAME:</h6>
            <input type="text" name="t1"><br>
            <h6>PHONE:</h6>
            <input type="text" name="t2"><br>
            <h6>USERNAME:</h6>
            <input type="text" name="t3"><br>
            <h6>PASSWORD:</h6>
            <input type="password" name="t4"><br>
            <input type="submit" value="submit">
</form>
</body>
    </html>

    <?php
    $con=mysql_connect("localhost","root","");
    if($con==false){
        die("Error in db connection...");

    }
    $nm=$_POST["t1"];
    $ph=$_POST["t2"];
    $u=$_POST["t3"];
    $p=$_POST["t4"];
    mysql_select_db("phppro");
    $k=mysql_query("insert into login values('$nm',$ph,'$u','$p')");
    if($k==true){
echo("Register succ....");
header("location://welcome.php");
    }
    else{
        echo("Not Register....");
    }
    
    mysql_close($con);
    ?>