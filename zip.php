<?php  
$target_path = "Zip/";  
$target_path = $target_path.basename( $_FILES['zip']['name']);   
  
if(move_uploaded_file($_FILES['zip']['tmp_name'], $target_path)) {  
    echo "File uploaded successfully!"; 
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  

?>