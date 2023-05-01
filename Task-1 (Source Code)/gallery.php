<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gellery</title>
    <link rel="stylesheet" href="./css/gallery.css">
</head>
<body>
    <?php
        include './db/db.php';
    ?>

    <section id="box">
        <h1>Gallery</h1>
        <div class="view">
            <h3>Uploaded Photos</h3>
            <div class="pic">
                <?php
                    $getPhotoQ = "SELECT * FROM Uploadedphotos ORDER BY pID ASC";
                    $getPhotoQRun = $conn->query($getPhotoQ);
                    $getPhotoQCount = mysqli_num_rows($getPhotoQRun);

                    if($getPhotoQCount == 0){
                        ?>
                        <p>Your gallery is empty.</p>
                        <?php
                    }
                    else{
                        while($photo = $getPhotoQRun->fetch_assoc()){
                            $dir = $photo['pDir'];
                            if (file_exists($dir)){
                                ?>
                                <img src="<?php echo $dir; ?>" height="250px" width="500px" title="<?php echo "Photo ID: ".$photo['pID']; ?>">
                                <?php
                            }
                        } 
                    }
                ?>
            </div>
            <hr>
            <div class="goTo">
                <p>Want to upload photo?</p>
                <a href="./upload.php">Click here</a>
            </div>
        </div>
    </section>
    <br><br><br>
</body>
</html>