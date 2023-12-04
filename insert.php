<!DOCTYPE html>
<html>
 
<head>

    <title>Insert Page page</title>
</head>
 
<body>
    <p>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "mydb");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $first_name =  $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender =  $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        $sql = "INSERT INTO college VALUES ('$first_name','$last_name','$gender','$address','$email')";

        if(mysqli_query($conn, $sql)){
            echo "<h2>Data Stored Successfully.</h2>"; 
             echo nl2br("
             <b>Name :</b> $first_name $last_name \n
             <b>Gender :</b> $gender \n
             <b>Address :</b> $address \n
             <b>Email :</b> $email \n\n");
            echo "<a href='http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=mydb&table=college'> Check Database </a>";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </p>
</body>
 
</html>