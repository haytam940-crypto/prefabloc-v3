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
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 52 44'><rect x='0' y='27' width='9' height='17' rx='1' fill='%232C6496'/><rect x='12' y='16' width='9' height='28' rx='1' fill='%231E8AB9'/><rect x='24' y='7' width='9' height='37' rx='1' fill='%2300C4F0'/><rect x='36' y='0' width='9' height='44' rx='1' fill='%2300AEEF'/></svg>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $root ?? '' ?>assets/css/style.css">
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="container">
    <div class="topbar-left">
      <a href="mailto:contact@prefabloc.ma">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        contact@prefabloc.ma
      </a>
      <div class="topbar-sep"></div>
      <a href="tel:+212522123456">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.41 2 2 0 0 1 3.6 1.21h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 8.81A16 16 0 0 0 16 16.91l.86-.85a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        +212 522 12 34 56
      </a>
    </div>
    <div class="topbar-right">
      <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        LinkedIn
      </a>
      <div class="topbar-sep"></div>
      <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
        Instagram
      </a>
      <div class="topbar-sep"></div>
      <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        Facebook
      </a>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<header class="navbar">
  <div class="container nav-inner">
    <a href="<?= $root ?? '' ?>index.php" class="nav-logo">
      <img src="<?= $root ?? '' ?>assets/images/logo.png" alt="Prefa Bloc — Construction &amp; développement immobilier" class="nav-logo-img">
    </a>
    <nav class="nav-links" aria-label="Navigation principale">
      <a href="<?= $root ?? '' ?>index.php">Accueil</a>
      <a href="<?= $root ?? '' ?>a-propos.php">À propos</a>
      <a href="<?= $root ?? '' ?>services.php">Services</a>
      <a href="<?= $root ?? '' ?>realisations.php">Réalisations</a>
      <a href="<?= $root ?? '' ?>contact.php" class="nav-cta">Demander un Devis</a>
    </nav>
    <button class="hamburger" aria-label="Menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
  <nav class="nav-mobile" aria-label="Navigation mobile">
    <a href="<?= $root ?? '' ?>index.php">Accueil</a>
    <a href="<?= $root ?? '' ?>a-propos.php">À propos</a>
    <a href="<?= $root ?? '' ?>services.php">Services</a>
    <a href="<?= $root ?? '' ?>realisations.php">Réalisations</a>
    <a href="<?= $root ?? '' ?>contact.php" class="nav-cta">Demander un Devis →</a>
  </nav>
</header>
