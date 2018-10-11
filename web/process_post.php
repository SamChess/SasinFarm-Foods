<?php
// Include the database configuration file
include 'connection.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            //$insert = $connection->query("INSERT into posts (fileName) VALUES ('".$fileName."')");
            echo"$fileName";
        
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
echo $statusMsg;

    $product_name = mysqli_real_escape_string($connection, $_POST['product_name']);
    $location_name = mysqli_real_escape_string($connection, $_POST['location_name']);
    $weight = mysqli_real_escape_string($connection, $_POST["weight"]);
    $units = mysqli_real_escape_string($connection, $_POST["units"]);
    $unit_price = mysqli_real_escape_string($connection, $_POST["unit_price"]);
    $farmer_code = mysqli_real_escape_string($connection, $_POST["farmer_code"]);
    $description = mysqli_real_escape_string($connection, $_POST["description"]);


//check for errors
//check for empty fields
if(empty($product_name)||empty($location_name)||empty($weight)||empty($units)||empty($unit_price)||empty($farmer_code)||empty($description) ){
    header("location: user_page.php?posts=empty");
    
    exit();

if(!preg_match("/^[0-9]*$/",$weight)|| !preg_match("/^[0-9]*$/",$unit_price) || !preg_match("/^[a-zA-Z]*$/",$description) || !preg_match("/^[a-zA-Z0-9]*$/",$farmer_code)){

       header("location: user_page.php?post=invalid characters ");
    exit();
    }
}

    else{
    
                $sql="INSERT INTO posts (product,location,weight,units,unit_price,farmer_code,fileName,description) VALUES (?,?,?,?,?,?,?,?)";


                $stmt = $connection->prepare($sql);
                $stmt->bind_param("ssssssss",$product_name, $location_name, $weight,$units,$unit_price,$farmer_code,$fileName,$description);
                $bool = $stmt->execute();


                if($bool){
                     
                header("location: sell_products.php?post=success");
                exit();
                }
            }
     
?>