<!DOCTYPE>
<html>
<head>
<title>Main Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


</head>
<body >

<div class="container">
  <div class="jumbotron">
  <h1 ><strong>Login</strong></h1>
    <p>Please Insert Your Data</p> 
  </div>
  <div class="row">
  <div class="col-sm-6">
      <h3>Welcome!</h3>
      <p>
        <form name="form" method="POST" action="log.php">
            <div>
            Username<br>
            <input type="text" name="user" required>
            </div>
            <br/>
            <div>
            Password<br>
            <input type="text" name="password" required>
            </div>
            <br/>
            <input type="submit" value="Invia">
        </form>
      </p>
  </div>
  <div class="col-sm-6">

  </div>
</div>
</body>
</html>