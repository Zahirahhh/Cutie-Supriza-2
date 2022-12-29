<?php      
    include('db_connect.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connect, $username);  
        $password = mysqli_real_escape_string($connect, $password);  
      
        $sql = "select * from signup where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($connect, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script>alert('Login Successful')</script>"; 
			header("location:../Cutie Supriza 3/homepage(regcust).php");
        }  
        else{ 
			header("location:../Cutie Supriza 3/loginPage.php");
            echo "<script>alert('Login Not Successful')</script>"; 
        }     
?>  