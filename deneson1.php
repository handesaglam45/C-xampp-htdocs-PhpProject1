
<?php ?>


<?php
include ('db1.php');
$sql = "SELECT * FROM documents";

$res = mysql_query($sql);
?>


<html>

    <head>

    <title></title>

    <style>
        
        
           body{
                
                background: url("MAKALE-2.jpg") center no-repeat;
                height: 100vh;
                background-size: cover;
            }  
            
    </style>
    
    
    
    
    
    
</head>
<body>
  


<?php
while ($row = mysql_fetch_array($res)) {
    $id = $row['id'];
    $name = $row['name'];
    $path = $row['path'];
    
    
    echo $id."" .$name."<a href='dowland.php?dow=$path'>dowland</a></br>";
    
}
?>


    
    

</body>

</html>





