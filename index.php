<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User Information</h2>
  <form class="form-horizontal" action="data.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fname" placeholder="Enter Your First Name" name="fname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lname" placeholder="Enter Your Last Name" name="lname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Number:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="number" placeholder="Enter Your Number" name="number">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
