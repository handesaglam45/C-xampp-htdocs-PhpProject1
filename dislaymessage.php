
<?php


include ('db1.php');

if(isset($_POST['submit']))
            {
               // Putting data from form into variables to be manipulated
               $title = $_POST['title'];
               $article = $_POST['article'];

               // Getting the form variables and then placing their values into the MySQL table
               mysql_query("INSERT INTO blog (title, article) VALUE('$title', '$article')");
            }



?>




<html>
<head>

    
    <style>
        
         body{
                
                background: url("MAKALE-2.jpg") center no-repeat;
                height: 100vh;
                background-size: cover;
            }  
            
        
    </style>
    
    
    
    
 
</head>
<body>
  <div class="header">
  	<h2>message</h2>
  </div>
	<form id="form1" method="post" action="dislaymessage.php">
            <p>
                <label for="title">Title:</label>
                <input name="title" type="text" class="widebox" id="title">
            </p>
            <p>
                <label for="mesaj">mesaj:</label>
                <textarea name="article" cols="60" rows="8" class="widebox" id="article">
                </textarea>
            </p>
            <p>
               <input type="submit" name="submit" value="sent message" id="submit">
            </p>
        </form>
  </html>