<?php
// Start session.
session_start();
//Connect to the database.
include('connection.php');
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
$time = time();
//$_SESSION['email'];
//console.log($user_id);
//These session are defined in login.php file.
//errros
$missingcomment = "<p class='alert alert-danger'><strong>Error:</strong> Please Write Your Comment! </p>";
$alreadycomment ="<p class='alert alert-danger'>We already received your comment.</p>";

if(empty($_POST['comment'])){
    $error .= $missingcomment;   
}else{
    $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
}
if($error){
    echo $error;
}else{
    $comment = mysqli_real_escape_string($link, $comment);  //prepare for query
    $sql = "SELECT * FROM comment WHERE `user_id` = '$user_id' AND `username` = '$username'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'><strong>Error: </strong> Running in Query!</div>";
    }
    // $count = mysqli_num_rows($result);
    // if($count !== 1){
    //     echo "<div class='alert alert-danger'>We have Already reached your comment!</div>";
    // } 
    
    $sql = "INSERT INTO comment (`user_id`, `username`, `comment`, `date`) VALUES ('$user_id',  '$username' ,'$comment', '$time')";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'><strong>Error: </strong>In storing comment to database </div>". $username;
    }else{
        echo 'success';
    }
    
    
}

?>