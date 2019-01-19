<?php

include ('dp.php');
if(isset($_POST['submit'])){
    
    
    $doc_name=$_POST['doc_name'];
    $name=$_FILES['myfile']['name'];
    $tmp_name=$_FILES['myfile']['tmp_name'];
    
    if($name && doc_name ){
        
    $location="upload/$name";
    move_uploaded_file($tmp_name, $location);
    $query=mysql_query("INSERT INTO documents(name,path) VALUES('doc_name','$location')");
    header('Location:deneson.php');
    } else 
        
        
        die("Please select a file");
        
    }
    
    




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
    <form action="upload1.php" method="post" enctype="multipart/form-data">
        
        <label>Document name</label>
        <input type="text" name="doc_name">
            <input type="file" name="myfile">    
                <input type="submit" name="submit" value="upload">
            
        
    </form> 
    
    
    <p>
        
        
        
        etinler genel olarak "edebî" ve "öğretici" olarak iki başlık altında değerlendirilir. 
        Öğretici metinler bilimsel veya bilgilendirici metinler olarak da adlandırılır.
        Edebî metinler hem dili kullanış biçimleri hem de kurmaca oluşlarıyla bilgilendirici 
        metinlerden ayrılır. Edebî metinlerde dilin etkili ve çok anlamlılığa açık biçimde
        kullanılması amaçlanırken bilgilendirici metinlerin anlatımı olabildiğince açık ve anlaşılır olmak
        durumundadır. Çünkü bu tür metinlerde önemli olan, bir bilgiyi veya düşünceyi doğru ve anlaşılır bir şekilde sunmaktır.
Bilimsel metin türlerinin en önemlilerinden biri makaledir. Makaleler, belli bir düşünceyi kanıtlara dayandırarak 
açıklayan yazılardır. Makaleler bir görüşün doğruluğunu veya yanlışlığını ispatlamak amacıyla da yazılabilir. Makalede önemli olan ortaya konulan düşüncelerin bilimsel temellere ve bilgilere dayandırılarak sunulmasıdır.
Gazetelerde güncel konular hakkında nesnel bir bakış açısıyla yayımlanan yazılar da makale olarak nitelendirilir. Bilimsel veya akademik makaleler ise genellikle bu türde yayın yapan dergi veya kitaplarda yayımlanır. Bilgisayarın yaygınlaşması ile birlikte İnternet'te her gün çok sayıda bilimsel makale okurla buluşmaktadır. Bilimsel makale, tarama yazıları, değerlendirme yazıları veya herhangi bir bilimsel konferansın ve toplantının tutanakları da makale türünde değerlendirilebilecek yazı türleridir.
Makalelerin en önemli özelliği alanında uzman kişilerce yazılmış olmalarıdır. Bu tür metinler nesnel bir anlatım dili ile kaleme alınır. Dolayısıyla yazarın tavrı, kişiliği veya tarafı bu tür metinlerde hissedilmez. Ortaya konan veri, bilgi veya düşünceler sağlam kaynaklarla desteklenir ve bu kaynaklar yazının sonunda ayrıntılı olarak sıralanır. Makalelerde kullanılan bilgi veya düşüncelerin alındığı kaynakların gösterilmesinde ve aktarılmasında belli kurallar vardır. Bu kurallar makalelerin bilimsel ölçütleriyle doğrudan ilgilidir.
Makale türünün doğup gelişmesi ve çeşitlenmesi gazete ile birlikte gerçekleşmiştir. Dolayısıyla bu türün bizim edebiyatımızda ortaya çıkışı da ilk gazetelerle birlikte olmuştur. Tanzimat Dönemi yazarlarından Şinasi'nin çıkardığı Tercüman-ı Ahvâl gazetesinde yazdığı makaleler bu türün edebiyatımızdaki ilk örnekleri arasında yer alır. Daha sonra Namık Kemal, Ziya Paşa ve Ahmet Mithat Efendi gibi yazarlar da bu türde metinler yazmıştır.
    </p>
    
    
    
</body>
    
        
        
        
    </head>
    
    
    
    
</html>








