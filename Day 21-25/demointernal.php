

<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="get">
        Name :<input type="text" name="name" >
        <br>
        Age : <input type="text" name="age" >
        <br>
        <input type="submit" >
    </form>
    </body>
</html>
<?php
if($_GET['name'] || $_GET['age'] )
{
    echo "Welcome: ".$_GET['name']."<br>";
    echo "Your are: ".$_GET['age']."old";
    exit();
}
?>