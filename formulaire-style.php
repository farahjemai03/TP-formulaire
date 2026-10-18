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
 
$estBoursier = false;
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
    $statut       = "Admise";
    $classeStatut = "statut-ok";
    $iconeStatut  = "✓";
} else {
    $statut       = "Non admise";
    $classeStatut = "statut-ko";
    $iconeStatut  = "✕";
}


if ($moyenne >= 15) {
    $mention = "Excellent";
} elseif ($moyenne >= 13) {
    $mention = "Très bien";
} elseif ($moyenne >= 12) {
    $mention = "Bien";
} elseif ($moyenne >= 10) {
    $mention = "Assez bien";
} else {
    $mention = "Insuffisant";
}


?>
 
  <div class="fiche">
    <h1><?php echo $nom; ?></h1>

<div class="meta">
  <span class="badge <?php echo $classeBadge; ?>">
    <?php echo $labelFiliere; ?>
  </span>
  <span class="badge badge-annee">
    <?php echo $anneeEtude; ?>ème année
  </span>
</div>

<div class="stats">
  <div class="stat">
    <span class="stat-label">Moyenne</span>
    <span class="stat-value">
      <?php echo $moyenne; ?><small>/20</small>
    </span>
  </div>
  <div class="stat">
    <span class="stat-label">Mention</span>
    <span class="stat-value stat-mention">
      <?php echo $mention; ?>
    </span>
  </div>
</div>

<div class="statut <?php echo $classeStatut; ?>">
  <span class="statut-icone">
    <?php echo $iconeStatut; ?>
  </span>
  <?php echo $statut; ?>
</div>

    <?php if ($estBoursier) { ?>
      <p>🎓 Boursière</p>
    <?php } ?>
  </div>
</body>
</html>