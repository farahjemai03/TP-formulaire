<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Fiche étudiant</title>
  <link rel="stylesheet" href="style-advanced.css">
</head>
<body>
<?php
// Informations de l'étudiant
// (déclarées en haut du script)
 
$nom = "Farah Jemai";
// string : nom complet
 
$filiere = "Info";
// string : filière d'étude
 
$moyenne = 13.5;
// float : moyenne générale
 
$estBoursier = true;
// bool : bénéficie d'une bourse
 
$anneeEtude = 2;
// int : année d'étude

switch ($filiere) {
    case "Info":
        $labelFiliere = "Informatique";
        $classeBadge  = "badge-info";
        break;
    case "Elec":
        $labelFiliere = "Électronique";
        $classeBadge  = "badge-elec";
        break;
    default:
        $labelFiliere = "Filière inconnue";
        $classeBadge  = "badge-defaut";
}

if ($moyenne >= 10) {
    $statut = "Admise";
} else {
    $statut = "Non admise";
}

?>
 
  <div class="fiche">
    <h1><?php echo $nom; ?></h1>
    <span class="badge <?php echo $classeBadge; ?>">
      <?php echo $labelFiliere; ?>
    </span>
    <p>Année : <?php echo $anneeEtude; ?>ème année</p>
    <p>Moyenne : <?php echo $moyenne; ?>/20</p>
    <p><?php echo $statut; ?></p>
    <?php if ($estBoursier) { ?>
      <p>🎓 Boursière</p>
    <?php } ?>
  </div>
</body>
</html>