<?php 
$content_qr = $_POST["content-qr"]; 
$size_qr = $_POST["size-qr"]; 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Read QR</title>
  </head>
  <body>

  <div style="box-sizing: content-box; height: 100%; margin: 90px 0 0 0;">

    <div class="d-flex justify-content-center align-items-center">
        <h3 style="font-weight: 400;">Content : <span style="font-weight: 700;"><?php echo $content_qr; ?></span><br><br> Side : <span style="font-weight: 700;"><?php echo $size_qr; ?>px</span></h3>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="margin-top: 90px;">
        <a href="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $content_qr; ?>&size=<?php echo $size_qr; ?>x<?php echo $size_qr; ?>">
            <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $content_qr; ?>&size=<?php echo $size_qr; ?>x<?php echo $size_qr; ?>" alt="<?php echo $content_qr; ?>" title="<?php echo $content_qr; ?>" /> 
        </a>
    </div>

    <?php
    ?>

  </div>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>






