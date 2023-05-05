<?php
    // Starting the current sesssion
    session_start();
    
    // connection file inclusion contain batabase files.
    include('connection.php');
    
    // As we placed the code like that in comment.php so that comment can't be empty
    $sql = "SELECT * FROM comment";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $note = $row['comment'];
                $username = $row['username'];
                $time = $row['date'];
                echo"
            <div class='commentheader p-1 mb-1 bg-secondary rounded' style='box-shadow: 3px 3px white'>
                <div class='commentname p-2'>User: $username</div>
                <div class='commentnote bg-black text-white p-2 mt-2'>Comment: &#9997; $note</div>    
            </div>
        </div>
                ";
                
            }
        }
    }

?>