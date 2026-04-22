<?php
if (!function_exists('icon')) include __DIR__ . '/icons.php';
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($meta_desc ?? 'Prefabloc — Entreprise générale de BTP au Maroc depuis 2009. Gros œuvre, charpente métallique, VRD, second œuvre et bureau d\'études intégré dans 8 régions du Royaume.') ?>">
  <title><?= htmlspecialchars($meta_title ?? 'Prefabloc — Entreprise Générale de BTP au Maroc') ?></title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 52 44'><rect x='0' y='27' width='9' height='17' fill='%23E8E4DC'/><rect x='12' y='16' width='9' height='28' fill='%23DDD9CF'/><rect x='24' y='7' width='9' height='37' fill='%23C0A882'/><rect x='36' y='0' width='9' height='44' fill='%23E8E4DC'/></svg>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $root ?? '' ?>assets/css/style.css">
  <!-- GSAP + ScrollTrigger -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>
<body>

<!-- NAVBAR -->
<header class="navbar">
  <div class="nav-inner">

    <!-- Logo left -->
    <a href="<?= $root ?? '' ?>index.php" class="nav-logo" aria-label="Prefabloc — Accueil">
      <img src="<?= $root ?? '' ?>assets/images/logo.png"
           alt="Prefabloc"
           class="nav-logo-img"
           onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
      <span class="nav-logo-text" style="display:none">PREFABLOC</span>
    </a>

    <!-- Centre nav — links separated by "/" -->
    <nav class="nav-links" aria-label="Navigation principale">
      <a href="<?= $root ?? '' ?>a-propos.php">À PROPOS</a>
      <span class="nav-sep">/</span>
      <a href="<?= $root ?? '' ?>index.php#services">NOS MÉTIERS</a>
      <span class="nav-sep">/</span>
      <a href="<?= $root ?? '' ?>index.php#chiffres">CHIFFRES</a>
      <span class="nav-sep">/</span>
      <a href="<?= $root ?? '' ?>realisations.php">RÉALISATIONS</a>
    </nav>

    <!-- Right CTA button -->
    <a href="<?= $root ?? '' ?>contact.php" class="nav-cta">DEVIS →</a>

    <!-- Hamburger (mobile only) -->
    <button class="hamburger" aria-label="Menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

  </div>

  <!-- Mobile dropdown nav -->
  <nav class="nav-mobile" aria-label="Navigation mobile">
    <a href="<?= $root ?? '' ?>index.php">ACCUEIL</a>
    <a href="<?= $root ?? '' ?>a-propos.php">À PROPOS</a>
    <a href="<?= $root ?? '' ?>index.php#services">NOS MÉTIERS</a>
    <a href="<?= $root ?? '' ?>realisations.php">RÉALISATIONS</a>
    <a href="<?= $root ?? '' ?>contact.php" class="nav-cta">OBTENIR UN DEVIS →</a>
  </nav>
</header>
