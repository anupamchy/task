<?php 
    $servername = "localhost";
    $username   = "root";
    $password   ="";
    $dbname    ="assignment";

    $conn   = mysqli_connect($servername, $username ,$password, $dbname);
    if(!$conn)
    {
        die("connection Failed".mysqli_connect_error());
    }
    if(isset($_POST['submit'])) {
        $name=$_POST['name'];
        $price =$_POST['price'];

        var_dump($name);
        if(isseet($name)&&($name!="")){
        $fetchQuery = "INSERT INTO add_to_cart(p_name, p_price) VALUES ('$name','$price')";

        }
        if(mysqli_query($conn,$fetchQuery)){
            echo "record inserted";
        }
        else{
            echo "not inserted";
        }
    }
?>