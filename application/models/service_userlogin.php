    <?php   
        $conn = new mysqli('localhost', 'root', '');  
        mysqli_select_db($conn, 'db_login');  
        if (isset($_GET[username]) && $_GET[username] != '' &&isset($_GET['password']) && $_GET['password'] != '')   
        {  
            $email = $_GET[username];  
            $password = $_GET['password'];   
      
            $getData = "SELECT `ur_Id`,`ur_username`,`ur_password` FROM `tbl_user` WHERE `ur_username`='" .$email."'  
            and `ur_password`='".$password."'";  
      
            $result = mysqli_query($conn,$getData);  
      
            $userId="";  
            while( $r = mysqli_fetch_row($result))  
            {  
                $userId=$r[0];  
            }  
      
            if ($result->num_rows> 0 ){  
      
                $resp["status"] = "1";  
                $resp["userid"] = $userId;  
                $resp["message"] = "Login successfully";  
            }  
            else{  
                $resp["status"] = "-2";  
                $resp["message"] = "Enter correct username or password";  
            }  
      
        }  
        else  
        {  
      
            $resp["status"] = "-2";  
            $resp["message"] = "Enter Correct username.";  
      
      
        }  
      
        header('content-type: application/json');  
      
        $response["response"]=$resp;  
        echojson_encode($response);  
      
        @mysqli_close($conn);  
      
    ?>  