<html>
    
    <head>
        <style>
            
            body{
                
                background: url("MAKALE-2.jpg") center no-repeat;
                height: 100vh;
                background-size: cover;
            }  
            
            .menudropdown1{
                
           width: 80%;
           height: 100px;
           margin: 0px auto;
           
                
            }
            
            .menudropdown1 ul{
                padding: 0px;
                
                
            }  
            
            
            .menudropdown1 ul li{
                
                float: left;
                background-color: black;
                color: white;
                width: 200px;
                height: 50px;
                line-height: 50px;
                font-size: 25px;
                text-align: center;
                    
                list-style: none;
                opacity: 0.6;
                
            }
            .menudropdown1 ul li ul{
                
                display: none;
            }
            .menudropdown1 ul li:hover > ul{
                display: block;
            }
            
            
            .menudropdown1 ul li:hover{
                
               background-color: #32CD32;
               opacity: 0.9;
                
            }
            
        </style>
        
        
        
        
        
        
        
        
        
        
        
    </head>
    <body>
        

       
    <div class="menudropdown1" >
        <ul>
        <li>yazar
            <ul>
                <li><a href="register.php">yazar regist</a></li>
                <li><a href="login.php">yazar login</a></li>
                
            </ul>
        
        
        </li>
        
        <li>editör
        
            <ul>
                
                
                <li><a href="editregist.php">editör regist</a></li>
                <li><a href="editlogin.php">editörlogin</a></li>
                  
                
            </ul>
            
            
        
        
        </li>
        <li>hakem
            <ul>
                
                <li><a href="hakemregist.php">hakem regist</a></li>
                <li><a href="hakemlogin.php">hakem login</a></li>
                  
                
                
                
            </ul>
        
        
        </li>
            <li><a href=hakkımızda.html>hakkımızda</a></li>
        
        
        </ul>
    </div>
    

       </body>
    
    
    
</html>