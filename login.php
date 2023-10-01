<html>
    <body>
        <h1>REGISTRATION</h1>
        <form method="post" action="signup.php">
            <h6>USERNAME:</h6>
            <input type="text" name="t1"><br>
            <h6>PASSWORD:</h6>
            <input type="password" name="t2"><br>
            <input type="submit" value="submit">
</form>
</body>
    </html>

    <?php
    $con=mysql_connect("localhost","root","");
    if($com==fasle){
        die("Error in db connection....");
    }
    $u=$_POST["t1"];
    $p=$_POST["t2"];
    mysql_select_db("phppro");
    $res=mysql_query("select * from login where username'$u' and password='$p'");
    if($row=mysql_fetch_array($res))
        echo("Login succ....");
    else
        echo("invalid user and password...");
    ?>