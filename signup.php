<?php
    $name =  $_POST["name"];
    $username =  $_POST["username"];
    $password =  $_POST["password"];
    $email =  $_POST["email"];
    $gender =  $_POST["gender"];

    $conn = new mysqli('localhost','root','123456','ospda');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $query = "select * from users where username = \"".$username."\"";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
    
    if(mysqli_num_rows($result)>0)   {  //Username taken
        header('Location: '."signupHTML.php");
        die();
    }
    else{
        
        $newUser = "insert into users(name,email,username,password,gender) values(\"".$name."\",\"".$email."\",\"".$username."\",\"".$password."\",\"".$gender."\")";
        if (mysqli_query($conn, $newUser)) {
            
            setcookie("username", $username, time()+(604800),"/");
            setcookie("name", $name, time()+(604800),"/");
            header('Location: '."productsHTML.php");
            die();

        } else {
            header('Location: '."signupHTML.php");
            die();
        }

    }

    mysqli_free_result($result);    
    mysqli_close($conn);
?>

