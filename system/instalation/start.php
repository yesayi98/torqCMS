<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>TORQ Instalation</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="page-title">
            <h1>Torq Installation</h1>
          </div>
          <form class="form" action="<?=$_SERVER['HTTP_HOST']?>/system/instalation/index.php" method="post">
            <div class="form-group">
              <input class="form-control mb-2" name="TIMEZONE" type="text" value="Asia/Yerevan" placeholder="TIMEZONE">
              <input class="form-control mb-2" type="text" name="DB_HOSTNAME" placeholder="DB HOSTNAME" value="localhost">
              <input class="form-control mb-2" type="text" name="DB_PORT" placeholder="DB PORT" value="3306">
              <input class="form-control mb-2" type="text" name="DB_USERNAME" placeholder="DB USERNAME" value="root">
              <input class="form-control mb-2" type="password" name="DB_PASSWORD" placeholder="DB PASSWORD" value="">
              <input class="form-control mb-2" type="text" name="DB_DATABASE" placeholder="DB NAME" value="">
              <input name="DB_DRIVER" type="hidden" value="mysqli" placeholder="DB DRIVER">
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
