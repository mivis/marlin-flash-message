<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Flash Message</title>
  </head>  
  <body>
    <div class="container col-md-6">
    <h1>Flash Message</h1>
<br>
<br>

<?php
include('FlashMessage.php');
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

new FlashMessage;

if (!empty($_SESSION['type'])) {
    echo '<div class="alert alert-success" role="alert">';
    echo "Был использован {$_SESSION['type']} запрос";
    echo '</div>';
    unset($_SESSION['type']);
}

?>
<form action="/" method="post">
  <div class="mb-3">
    <label class="form-label">POST запрос</label>
    <input type="text" class="form-control" name="name">
  </div>
  <button type="submit" class="btn btn-success">POST запрос</button>
</form>
<br>
<br>

<a href="/?get=yes" class="btn btn-warning">GET запрос</a>
</div>
  </body>
</html>