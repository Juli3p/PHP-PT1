<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 4</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid bg-info">
      <div class="container">
        <h1 class="display-3">Exercices-04</h1>
        <p class="lead">PHP-Pt1</p>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center mb-3">
      <p class="txt">Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
        Les afficher.</p>
      </div>
    </div>
    <div class="php">
      <!-- variable de type string -->
      <?php $name = "Mon prénom est Julie" ?>
      <!-- variable de type int -->
      <?php $age = "22"; ?>
      <!-- variable de type float -->
      <?php $moyenne = "17.5"; ?>
      <!-- variable de type booléan -->
      <?php $vérité = true; ?>
      <p id="var">Mes variables :</p>
    <div class="texte">
      <p>Variable de type string : <?php echo $name; ?></p>
      <p>Variable de type int : <?php echo $age; ?></p>
      <p>Variable de type float : <?php echo $moyenne; ?></p>
      <p>Variable de type booléan : <?php echo $vérité; ?></p>
    </div>
    </div>
</body>
</html>
