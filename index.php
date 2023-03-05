<?php
session_start();

if(isset($_SESSION['username'])){
    echo '<h1 style="text-align:center;"> Welcome' . ' '.  $_SESSION['username'] . '</h1>';
}
else{
    echo '<h1> Welcome Guest</h1>';
   
    
}
?>
<!-- HTML -->
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css"> 
        <html lang="en">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Note App</title>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Write</a>
                <a href="chatroom.html">Community</a>
                <a href="index.php">Saved</a>
                <a href="#">Developer</a>
              </div>
              
              <h2>Sermon saver</h2>
              <p></p>
              <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
              
            <div id="note-app">
                <textarea>

                </textarea>
                <button onclick="saveNote()">Save Note</button>
            </div>
            

<script src="index.js"></script>
</body>
</html>
