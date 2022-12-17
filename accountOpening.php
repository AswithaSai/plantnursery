<center><?php
        include('conn.php');
        $name=$_POST['Username'];
        $area=$_POST['Address'];
        $city=$_POST['city'];
        $PhoneNo=$_POST['PhoneNo'];
        $Email=$_POST['Email'];
        $User_id=$_POST['UserId'];
        $Pass=$_POST['pwd'];
        
        $query="INSERT INTO customer values('$name','$area','$city','$PhoneNo','$Email','$User_id','$Pass')";
        $data =mysqli_query($conn,$query);

        if($data){
            header('location:login.html');
        }
        else{
            header('location:signUp.html');
        }
        echo '</left>';
        ?>
</center>