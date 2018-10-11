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
    $unit_price = mysqli_real_escape_string($connection, $_POST["unit_price"]);
    $phone_number = mysqli_real_escape_string($connection, $_POST["phone_number"]);
    $description = mysqli_real_escape_string($connection, $_POST["description"]);
    //$date = mysqli_real_escape_string($connection, $_POST["date"]);


//check for errors
//check for empty fields
if(empty($product_name)||empty($location_name)||empty($weight)||empty($unit_price)||empty($phone_number)||empty($description) ){
    echo $product;
        echo $location;
            echo $weight;
                echo $unit_price;
                    echo $phone_number;
                        echo $fileName;
                            echo $description;
                                echo $date;

    //header("location: user_page.php?posts=empty");
    
    exit();

if(!preg_match("/^[0-9]*$/",$weight)|| !preg_match("/^[0-9]*$/",$unit_price) || !preg_match("/^[a-zA-Z]*$/",$description) || !preg_match("/^[a-zA-Z0-9]*$/",$phone_number)){

       header("location: user_page.php?post=invalid characters ");
    exit();
    }
}

    else{
    
                $sql="INSERT INTO product_posts (product,location,weight,unit_price,phone_number,fileName,description) VALUES (?,?,?,?,?,?,?)";


                $stmt = $connection->prepare($sql);
                $stmt->bind_param("sssssss",$product_name, $location_name, $weight,$unit_price,$phone_number,$fileName,$description);
                $bool = $stmt->execute();


                if($bool){
                    
                header("location: user_page.php?post=success");
                exit();
                }
            }
     
?>