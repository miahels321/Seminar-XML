<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    body{
        background: url('3.jpg') no-repeat center center fixed;
    }
    
</style>
</head>
<body>
    <h2>Dobrodošli, <?= htmlspecialchars($_SESSION['username']) ?></h2>
    <p>Prijavljeni ste!</p>
    <a href="logout.php" >Odjavi se</a>
    <br>
    
    <div class="container mt-5 col-4">

 
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="xmlFile" class="form-label">XML File</label>
        <input class="form-control" type="file" id="xmlFile" name="xml_file">
      </div>
      <div class="mb-3">
        <label for="xsdFile" class="form-label">XSD File</label>
        <input class="form-control" type="file" id="xsdFile" name="schema_file">
      </div>
      <button type="submit" class="btn btn-primary">Provjeri!</button>
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
    <p><a href="index.php">Back to Home</a></p>
</body>
</html>