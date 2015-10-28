<?php
include("connection.php");
    
if (isset($_POST['log'])){
    $nm = $_POST ['nm']; 
     $ds = $_POST ['dl'];
    foreach($_FILES['files']['name'] as $key => $name_tmp){
        $name = $_FILES['files']['temp_name'][$key];
        $tmpnm = $_FILES['files']['tmp_name'][$key];
         $type = $_FILES['files']['type'][$key];
        $size = $_FILES['files']['size'][$key];
        $dir = "filedata/".$name;
        $move = move_upload_file($tmpnm,$dir);
        if($move){
             $hsl = mysql_query("insert into filedata values('','$nm','$ds', '$name', '$type', '$sze', now()}");
             if($hsl){
            echo "<script>alert('Image')</script>";
            } else{
                  echo "<script>alert('Error Table Database')</script>";}
    } else{
            
            echo "<script>alert('Gagal Upload')</script>";
        }
   }
}


        
?>

<html >
<head>
 </head>
   <body>
    <div>
    <form action=""method="post" enctype="multipart/form-dara">
        <p>
            <label>File</label>
        <input type="file"name="files[] multiple"/>
            </p>
        <p>
            <label>Name</label>
        <input type="text"name="nm"/>
           </p>
        <p> 
            <textarea rows="6" cols="30" name="dl"></textarea>
        </p>
         <p> 
             <input type="submit" Value="Upload"/>
        </form>
    </div>
 </body>
</html>