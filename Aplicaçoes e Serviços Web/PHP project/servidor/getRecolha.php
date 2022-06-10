<!-- <html>
    <form action="ws_info_cli.php" method="post" name="myForm">
        <label for="fname">id:</label>
        <input type="text" id="id" name="id"><br><br>
        <input type="button" value="Send form data!">
    </form>
</html> -->

<!DOCTYPE html>
<html lang="pt">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 

  <title>REFOOD UMinho Edition</title>
  <link href="assets/img/brand/icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- JS files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/login.js"></script>

  <!-- Main CSS File -->
  <!-- <link href="assets/css/login.css" rel="stylesheet"> -->
  <link href="../assets/css/style_registo.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body class="login-body">


  <div class="login-container" id="container">

    <div class="form-container sign-in-container">
      <form action="ws_recolha_cli.php" method="post" name="myForm"class="login-form"> 
        <h3>Aceitar recolha</h3>
        <p>Introduza o email do utilizador que quer aceitar a recolha</p>
        <input class="login-input" type="text" id="id_user" placeholder="Email Utilizador" name="id_user" required/>
        <p>Introduza o email da instituição de onde pretende recolher recolha</p>
        <input class="login-input" type="text" id="id" placeholder="Email Instituição" name="id" required>
        <input type = "submit" class="submit" placeholder="Aceitar"></input>
      </form>
    </div>

  </div>
  
</body>
</html>

<style>
  .sign-in-container {
    left: 0;
    width: 100%;
    z-index: 2;
}

.login-form {
    background-color: #6aae60;
}

p, h3{
  color:#FFFFFF;
}


.login-input {
   
    width: 60%;
}
</style>