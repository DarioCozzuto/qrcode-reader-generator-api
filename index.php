<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>QR code Website</title>
  </head>
  <body>

  <div class="container">
    <div class="d-flex justify-content-center" style="margin:30px 0 100px 0;">
      <h1> QR-CODE GENERATOR & READER </h1>
    </div>
  </div>
  
  <div class="container-fluid">

      <div class="row justify-content-center">
      
        <!-- CREATE QR -->
        <div class="col-md-auto" style="margin: 40px 80px;">

          <form action="create_qr.php" method="post">
          
          <h2 style="padding-bottom:20px;"> CREATE QR </h2>

            <div class="mb-3">
              <label for="content" class="form-label">Content:</label>
              <input type="text" id="content" name="content-qr">
            </div>

            <div class="mb-3">
              <label for="size" class="form-label">Side size:</label>
              <input type="text" id="size" name="size-qr">
            </div>

          <input type="submit" value="Create QR code">

          </form>
          
        </div>


        <!-- READ QR -->
        <div class="col-md-auto" style="margin: 40px 80px;">
          
          <form enctype="multipart/form-data" action="read_qr.php" method="post">

          <h2 style="padding-bottom:20px;"> READ QR </h2>

          <!-- MAX_FILE_SIZE (maximum file size in bytes) must precede the file input field used to upload the QR code image -->
          <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />

            <!-- The "name" of the input field has to be "file" as it is the name of the POST parameter -->
            <div class="mb-3">
              <label for="url" class="form-label">Image url:</label>
              <input name="fileurl" id="url" type="text" />
            </div>

          <input type="submit" value="Read QR code" />
          </form>

        </div>

      </div>

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