<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplaod Photo</title>
    <link rel="stylesheet" href="./css/upload.css">
</head>
<body>
    <?php
        include './db/db.php';
    ?>

    <section id="box">
        <div class="form">
            <form action="uploading.php" method="POST" enctype="multipart/form-data">
                <div class="inp">
                    <label for="">Please select a photo to upload:</label>
                    <input type="file" name="img" id="img" class="form-control-file" require>
                    <p><i>[The image must be a <b>JPEG</b> or <b>JPG</b> or <b>PNG</b> type file.]</i></p>
                </div>
                
                <div class="sbmt">
                    <input type="submit" name="upload" id="upload" value="Uplaod">
                </div>
                <hr>
            </form>
            <div class="goTo">
                <p><a href="./gallery.php">Click here</a> to view gallery</p>
                
            </div>
        </div>
    </section>
    <br><br><br>
</body>
</html>