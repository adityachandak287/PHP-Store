<?php
    $username =  $_POST["username"];
    $password =  $_POST["password"];

    $conn = mysqli_connect('localhost','root','123456','ospda');

    if(mysqli_connect_errno())  {
        echo "Connection failed";
    }
    else    {
        $query = "select * from users where username = \"".$username."\"";
        $result = mysqli_query($conn, $query);
        $users = mysqli_fetch_all($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result)>0)   {
            //User found
            if($users[0]["password"] == $password)  {
                //Logged in successfully
                
                setcookie("username", $username, time()+(604800),"/");
                setcookie("name", $users[0]["name"], time()+(604800),"/");
                header('Location: '."productsHTML.php");
                die();
            }
            else{
                header('Location: '."loginHTML.php");  //Wrong credentials
                die();
            }
        }
        else{
            header('Location: '."loginHTML.php");
            die();
        }

        mysqli_free_result($result);        
        mysqli_close($conn);
    }
?>

