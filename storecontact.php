<?php 


 $link = mysqli_connect('localhost:8889', 'nhuluong2212', '12101291','contactinfo');

if(!$link) {
   echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$errorName= '';
$errorEmail ='';
$errorSubject = '';
$errorMessage = '';
$result = '';
if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['subject'];
    $message = $_POST['message'];

    $from = 'Demo Contact Form';
    $to = 'nhuluong2212@gmail.com';
    $title = 'Title';

    
    $body = "From: $name\n Email: $email\n Message:\n $message";

    if (!$_POST['name']){
        $errorName = 'Please enter your name';
    }
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errorEmail = 'Please enter a valid email';
    }
    if (!$_POST['subject']) {
        $errorSubject = 'Please enter your subject';
    }
    if (!$_POST['message'])
    {
        $errorMessage = 'Please enter your message';
    }
    
if (!$errorName && !$errorEmail && !$errorSubject && !$errorMessage){
        $t = date('Y-m-d H:i:s');
        $query = "INSERT INTO ContactInfo (Name, Email, subject, Message, SubmitTime)
            VALUES ('$name', '$email', '$subject', '$message','$t')";
        if(!mysqli_query($link, $query)){
             printf("error: %s\n", mysqli_error($link));
             
        }
        else{
             $result='<div class="alert alert-success">Thank You! We will get back to you within 24 hours</div>';
        }
        echo "Hi";

    }
}

?>
