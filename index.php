
<?php
  $source="mysql:host=localhost;dbname=apprenant_p04";
  $username="user";
  $password='root';
  // Etabliser une connexion
  try{
   $bd = new PDO($source,$username,$password);
   echo"connexion reussi";
   }
   catch(PDOException $e)
   { 
    $error_message=$e ->getMessage("connexion echoué");
    echo $error_message;
    exit();
   }

  if(isset($_POST['submit'])) 
{
    $nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$date_de_naissance = $_POST['date_de_naissance'];
    $sql = "INSERT INTO liste(nom, prenom, date_ de_naissance, mdp) VALUES (:nom, :prenom, :date_de_naissance,)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':nom', $nom);
		$stmt->bindParam(':prenom', $prenom);
	    $stmt->bindParam(':date_naissance', $date_de_naissance);
	    $stmt->execute();

			echo '<p style="color=black;">Les informations ont été enregistrées avec succès.</p>';
  
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simplonline</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
   <header>
    <div class="container d-flex col-lg-6 col-sm-6">
      <img class="col-lg-6 col-sm-6 justify-content-start"  src="images/img_simplon.png" alt="">
      <h1 class="col-lg-6 col-sm-6 "> Bienvenu à Simplon Burkina</h1>
    </div>
   </header>
   <main>
<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title">Avez-vous un compte</h2>
        <p class="user_unregistered-text">veuillez remplir ce formulaire pour vous faire enregistrer</p>
        <button class="user_unregistered-signup" id="signup-button">S'inscrire</button>
      </div>
   <div class="user_options-forms" id="user_options-forms">
    <div class="user_forms-signup">
        <h2 class="forms_title">enregistrement</h2>
        <form class="forms_form" method="post">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text"placeholder="nom" name="Nom" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="text" placeholder="prenom" name="Prenom" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="date" name="date_ de_naissance" placeholder="" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" value="Sauvegarder" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</main>
<script src="javascript/javascript.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>