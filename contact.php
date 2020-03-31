<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="jumbotron">
        <h1>Contact Us</h1>
        <p>Bootstrap is the most popular HTML, CSS...</p>
    </div>

    <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label>Email id</label>
            <input type="mail" name="email" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label>Mobile No</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>


</body>
</html>