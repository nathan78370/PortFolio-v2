<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Connexion PortFolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'><link rel="stylesheet" href="assets/css/login.css">

</head>
<body>
<body id="particles-js"></body>
<div class="animated bounceInDown">

  <div class="container">
    <span class="error animated tada" id="msg"></span>
      <?php
        if(isset($_GET['login_err']))
        {
          $err = htmlspecialchars($_GET['login_err']);

          switch ($variable) {
            case 'password':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe incorrect
                </div>
              <?php
              break;

             case 'username':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> Nom incorrect
                </div>
              <?php
              break;

             case 'already':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> Compte non existant
                </div>
              <?php
              break;
          }
        }
    ?>
    <form action="connexion_traitement.php" name="form1" class="box" onsubmit="return checkStuff()">
      <h4>PortFolio<span>Admin</span></h4>
      <h5><a href="index.php" style="text-decoration:none">Retour vers le PortFolio</a></h5>
        <input type="text" name="txt_username_email" placeholder="Utilisateur" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="txt_password" placeholder="Mot de Passe" autocomplete="off">
        <button type="submit" name="btn_login" class="btn1">Connexion</button>
      </form>
  </div> 
</div>
<!-- partial -->
  <script src='https://cldup.com/S6Ptkwu_qA.js'></script><script  src="assets/js/login.js"></script>

</body>
</html>