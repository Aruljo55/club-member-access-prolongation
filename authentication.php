<?php      
    include('connection.php');  
   
    $username = $_POST['name'];
    $password = $_POST['registerno'];
    $registerno = $_POST['registerno'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $clubname = $_POST['club'];
     
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);
$registerno = stripcslashes($registerno);
$name = stripcslashes($name);
$class = stripcslashes($class);
$clubname = stripcslashes($clubname);
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
$registerno = mysqli_real_escape_string($con, $registerno);
$name = mysqli_real_escape_string($con, $name);  
$class = mysqli_real_escape_string($con, $class);
$clubname = mysqli_real_escape_string($con, $clubname);
     
        $sql = "select *from login where username = '.$username.' and password = '.$password.'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
         
        if($count == 1){  
           echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> your application</h1>";  
        }  

$sql = "select *from student where registerno = '.$registerno.' and name = '.$name.' and class = '.$class.' and clubname = '.$clubname.'";
$result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);

         
        if($count == 0){  
           echo "<h1><center> Register successful </center></h1>";  
        }  
        else{  
            echo "<h1> registration failed. Invalid .</h1>";  
        }

?>