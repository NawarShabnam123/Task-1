<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplaoding Photo</title>
    <link rel="stylesheet" href="./css/uploading.css">
</head>
<body>
    <?php
        include './db/db.php';
        if(isset($_FILES['img'])){
            $img_name = $_FILES['img']['name'];
            $img_tempname = $_FILES['img']['tmp_name'];
            $img_size = $_FILES['img']['size'];
            $img_ext = $_FILES['img']['type'];

            $err = $_FILES['img']['error'];

            date_default_timezone_set("Asia/Dhaka");
            $dt = date('Y-m-d H:i:s', time());
            $new_img_dir = './uploads/'.$img_name;

            if($img_ext == "image/jpeg" OR $img_ext == "image/jpg" OR $img_ext == "image/png"){
                move_uploaded_file($img_tempname, $new_img_dir);
                $insertQ = "INSERT INTO uploadedphotos (pDir, pDate) VALUES('$new_img_dir', '$dt')";
                $insertQRun = $conn->query($insertQ);
                ?>
                <script>
                    alert("Photo Added.");
                    window.location.replace("./upload.php");
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert("Your uploaded image must be a JPEG or JPG or PNG type file.");
                </script>
                <?php
            }
        }
        else{
            echo "error";
        }
    ?>
    <br><br><br>
</body>
</html>