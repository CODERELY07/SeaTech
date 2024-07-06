<?php
    require_once 'config.php';
    if(isset($_POST)){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $radio = $_POST['radio'];

        //check if user already Exist in the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows > 0){
            echo "Your name or email is Already Exists";
        }else{
            $stmtNew = $conn->prepare("INSERT INTO users (username,email,phone,password,position) VALUES(?,?,?,?,?)");
            $stmtNew->bind_param("sssss",$username,$email,$phone,$password,$radio);

            if($stmtNew->execute()){
                echo 1;
            }else{
                echo 0;
            }
        }
        $stmt->close();
        $conn->close();
        
    }else{
        echo "No data";
    }

?>