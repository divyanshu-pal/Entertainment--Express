<?php
$server = "localhost" ;
$username = "root" ;
$password ="" ;
$dbname ="project" ;

$conn = mysqli_connect($server, $username, $password ,$dbname) ;

if(isset($_POST['submit'])){
    if(!empty($_POST['name'])  && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['text'])){
     
     
        $name  =   $_POST['name'] ;
        $phone =   $_POST['phone'] ;
        $email    =   $_POST['email'] ;
        $text =   $_POST['text'] ;

        $query = "insert into website(name,phone,email,text) values('$name', '$phone', '$email', '$text')" ;

         $run = mysqli_query($conn,$query) or die(mysqli_error());

         if($run){
             echo " Thank you! Your message has been successfully sent.<br>  we will respond you as soon as possible " ;
         }

         else{
             echo "form not submitted. please retry!" ;
         }
         




    }
    else{
        echo " all feilds required" ;
    }
}

?>