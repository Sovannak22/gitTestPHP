<?php
    use SimpleCrud\SimpleCrud;
    require_once ('vendor/autoload.php');
    require_once ('pdo.php');
    

    // $target_dir = "/img";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $filename=$_FILES['nameofyourfileinput']['name'];
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //     if($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //         $uploadOk = 0;
    //     }
    // }


    // if ($uploadOk==1){
    //     $db = new SimpleCrud($pdo);
    //     $name=$_POST['name'];
    //     $price=$_POST['price'];
    //     //insert a new post
    //     $id = $db->product
    //         ->insert()
    //         ->data([
    //             'name' => $name,
    //             'price' => $price,
    //             'img' => $filename
    //         ])
    //         ->run();
    //             if($id){
    //                 header("Location:register_product.php?message='Product register successfull'");
    //             }
    // }
    // else {
    //     header("Location:register_product.php?message='Product regiser unsuccessfull'");
    // }
        
?>