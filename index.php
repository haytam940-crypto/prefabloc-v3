<?php
$meta_title = 'Prefabloc — Entreprise Générale de BTP au Maroc';
$meta_desc  = 'Prefabloc, entreprise générale de construction au Maroc depuis 2009. Gros œuvre, second œuvre, génie civil, travaux publics — plus de 120 ouvrages livrés dans 8 régions du Royaume.';
include 'includes/header.php';
?>

<!-- ══ HERO ══ -->
<section class="hero">

  <!-- Dark-side grid overlay -->
  <div class="hero-grid"></div>

  <!-- Construction image spanning both halves -->
  <div class="hero-img-wrap">
    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1400&h=900&fit=crop"
         alt="Chantier gros œuvre Prefabloc" loading="eager">
  </div>

  <!-- Floating GPS / code decorations -->
  <span class="hero-deco d1">// N+33.97 W-06.85</span>
  <span class="hero-deco d2">// CHANTIER_0.01</span>
  <span class="hero-deco d3">01001100_10</span>
  <span class="hero-deco d4">+33.9716 / -06.8498_</span>
  <span class="hero-deco d5">// GEO_REF 2009</span>
  <span class="hero-deco d6">// PREFABLOC_MA</span>

  <!-- Two-column body -->
  <div class="hero-body">

    <!-- LEFT — dark — big title bottom -->
    <div class="hero-left">
      <div class="hero-tag">
        <span class="hero-tag-inner">Agréée FNBTP depuis 2009</span>
        <span class="hero-tag-bars">||</span>
      </div>
      <h1>DU GROS ŒUVRE<br>
        <span class="line-indent">À LA LIVRAISON</span><br>
        <span class="line-indent">CLÉ EN MAIN</span>
      </h1>
    </div>

    <!-- RIGHT — cream — description bottom -->
    <div class="hero-right">
      <div class="hero-right-inner">
        <p class="hero-sub">Prefabloc prend en charge l'intégralité de vos chantiers : fondations, structure béton armé, charpente métallique, second œuvre et finitions — avec une maîtrise totale des délais dans 8 régions du Maroc.</p>
        <div class="hero-btns">
          <a href="realisations.php" class="btn btn-primary">Consulter notre portfolio →</a>
          <a href="contact.php" class="btn btn-outline">Obtenir un devis</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ══ TICKER ══ -->
<div class="ticker">
  <div class="ticker-track">
    <?php
    $items = ['Gros Œuvre & Structure','Béton Armé & Coffrage','Charpente Métallique','VRD & Assainissement','Second Œuvre Complet','Contrôle Qualité NM','Management de Chantier','Génie Civil & Infrastructure'];
    $all = array_merge($items, $items);
    foreach ($all as $item): ?>
    <div class="ticker-item"><span class="dot">◆</span><?= $item ?></div>
    <?php endforeach ?>
  </div>
</div>

<!-- ══ COMPRENDRE — ABOUT (dark, full height, split) ══ -->
<section class="about-section" id="about">

  <!-- Image spans the split -->
  <div class="about-img-split">
    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1400&h=900&fit=crop"
         alt="Ingénieurs Prefabloc sur chantier" loading="lazy">
  </div>

  <div class="about-body">

    <!-- LEFT — headline -->
    <div class="about-left">
      <div class="sec-tag reveal up">
        <span class="sec-tag-inner light">Notre Identité</span>
        <span class="sec-tag-bars light">||</span>
      </div>
      <h2 class="sec-title light reveal up reveal-delay-1">COMPRENDRE<br>
        <span class="line-indent">QUI EST</span><br>
        <span class="line-indent">PREFABLOC ?</span>
      </h2>
    </div>

    <!-- RIGHT — feature callout with bracket -->
    <div class="about-right">
      <div class="about-callout reveal up reveal-delay-2">
        <div class="callout-bracket">
          <span class="callout-icon"></span>
          GROS ŒUVRE &amp; STRUCTURE
        </div>
        <div class="callout-line"></div>
        <p class="callout-desc">Fondée en 2009 à Casablanca, Prefabloc est une entreprise générale de BTP qui intervient sur toutes les phases d'un projet : études géotechniques, fondations, structure porteuse, charpente métallique, second œuvre et réception de l'ouvrage. Notre parc matériel propre nous permet de maîtriser les délais sans sous-traitance incontrôlée.</p>
        <div style="margin-top:32px">
          <a href="a-propos.php" class="btn btn-outline-white">Notre histoire →</a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ══ NOS SERVICES INTRO ══ -->
<section class="services-intro" id="services">
  <!-- Ghost background images -->
  <div class="services-intro-floats">
    <img class="float-img" src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=500&h=400&fit=crop" alt="">
    <img class="float-img" src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=500&h=400&fit=crop" alt="">
    <img class="float-img" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&h=320&fit=crop" alt="">
  </div>
  <div class="services-intro-inner">
    <div class="sec-tag reveal up" style="justify-content:center">
      <span class="sec-tag-inner">Nos Services</span>
      <span class="sec-tag-bars">||</span>
    </div>
    <h2 class="sec-title reveal up reveal-delay-1">DÉCOUVREZ<br>
      <span class="line-indent">NOS MÉTIERS</span>
    </h2>
    <p class="services-intro-desc reveal up reveal-delay-2">Six domaines de compétences techniques couvrant l'intégralité du cycle de vie d'un projet de construction au Maroc, de la fondation à la livraison clé en main.</p>
  </div>
</section>

<!-- ══ 01 TERRASSEMENT (dark) ══ -->
<section class="service-step" id="step-01">
  <div class="service-step-bg">
    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1400&h=900&fit=crop"
         alt="Terrassement et fondations" loading="lazy">
  </div>
  <div class="service-step-overlay"></div>
  <div class="service-step-content">
    <div class="step-num-tag reveal up">
      <span class="step-num-tag-inner">01 TERRASSEMENT</span>
      <span class="step-num-tag-bars">||</span>
    </div>
    <h3 class="step-title reveal up reveal-delay-1">FONDATIONS &amp;<br>
      <span class="line-indent">GROS ŒUVRE</span>
    </h3>
    <p class="step-desc reveal up reveal-delay-2">Terrassements, déblais/remblais, fondations superficielles et profondes, radiers et pieux — nous préparons le terrain et posons les bases solides de chaque projet, quelles que soient les contraintes géotechniques du site.</p>
  </div>
</section>

<!-- ══ 02 STRUCTURE (cream) ══ -->
<section class="service-step cream" id="step-02">
  <div class="service-step-bg">
    <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=1400&h=900&fit=crop"
         alt="Structure béton armé" loading="lazy">
  </div>
  <div class="service-step-overlay"></div>
  <div class="service-step-content">
    <div class="step-num-tag reveal up">
      <span class="step-num-tag-inner dark-v">02 STRUCTURE</span>
      <span class="step-num-tag-bars dark-v">||</span>
    </div>
    <h3 class="step-title reveal up reveal-delay-1">BÉTON ARMÉ &amp;<br>
      <span class="line-indent">CHARPENTE</span>
    </h3>
    <p class="step-desc reveal up reveal-delay-2">Voiles, poteaux, poutres et dalles en béton armé ; charpentes métalliques lourdes et légères — notre bureau d'études intégré et nos équipes terrain assurent une exécution conforme aux normes BAEL-91 et RPS 2011.</p>
  </div>
</section>

<!-- ══ 03 SECOND ŒUVRE (dark) ══ -->
<section class="service-step" id="step-03">
  <div class="service-step-bg">
    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1400&h=900&fit=crop"
         alt="Second œuvre et finitions" loading="lazy">
  </div>
  <div class="service-step-overlay"></div>
  <div class="service-step-content">
    <div class="step-num-tag reveal up">
      <span class="step-num-tag-inner">03 SECOND ŒUVRE</span>
      <span class="step-num-tag-bars">||</span>
    </div>
    <h3 class="step-title reveal up reveal-delay-1">FINITIONS &amp;<br>
      <span class="line-indent">LIVRAISON</span>
    </h3>
    <p class="step-desc reveal up reveal-delay-2">Maçonnerie, isolation, revêtements, menuiseries, électricité, plomberie, climatisation — Prefabloc assure la totalité du second œuvre avec ses propres équipes, pour vous livrer un ouvrage clé en main dans les délais convenus.</p>
  </div>
</section>

<!-- ══ CHIFFRES ══ -->
<section class="numbers-section" id="chiffres">
  <div class="container">
    <div class="numbers-grid">
      <div class="number-item reveal up">
        <div class="number-val" data-counter>120</div>
        <div class="number-lbl">Ouvrages réceptionnés</div>
      </div>
      <div class="number-item reveal up reveal-delay-2">
        <div class="number-val" data-counter>180</div>
        <div class="number-lbl">Techniciens & ouvriers</div>
      </div>
      <div class="number-item reveal up reveal-delay-3">
        <div class="number-val" data-counter>8</div>
        <div class="number-lbl">Régions du Royaume</div>
      </div>
      <div class="number-item reveal up reveal-delay-4">
        <div class="number-val" data-counter>15</div>
        <div class="number-lbl">Années sur le terrain</div>
      </div>
    </div>
  </div>
</section>

<!-- ══ NOS RÉALISATIONS — CAROUSEL ══ -->
<section class="projects-section" id="realisations">

  <div class="projects-head reveal up">
    <div class="projects-head-left">
      <div class="sec-tag">
        <span class="sec-tag-inner">Références</span>
        <span class="sec-tag-bars">||</span>
      </div>
      <h2 class="sec-title">NOS<br>
        <span class="line-indent">RÉALISATIONS</span>
      </h2>
    </div>
    <a href="realisations.php" class="btn btn-outline reveal up reveal-delay-2">Tout notre portfolio →</a>
  </div>

  <div class="carousel-wrap">
    <div class="carousel-track" id="projectsCarousel">

      <?php
      $projects = [
        ['01','Villa Moderne Aïn Diab','Résidentiel — Casablanca, 14 mois','https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&h=400&fit=crop','projet.php?slug=villa-moderne-ain-diab'],
        ['02','Immeuble de Bureaux Technopark','Commercial — Casablanca, 28 mois','https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&h=400&fit=crop','projet.php?slug=immeuble-bureaux-technopark'],
        ['03','Entrepôt Logistique Tanger Med','Industriel — Tanger, 18 mois','https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop','projet.php?slug=entrepot-logistique-tanger'],
        ['04','Voirie Zone Industrielle Berrechid','Travaux Publics — Berrechid, 16 mois','https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=400&fit=crop','projet.php?slug=voirie-zone-industrielle-berrechid'],
        ['05','Rénovation Hôtel Palais Fassi','Rénovation — Fès, 12 mois','https://images.unsplash.com/photo-1590088988666-5e20edc4b83b?w=600&h=400&fit=crop','projet.php?slug=renovation-hotel-fes'],
      ];
      foreach ($projects as [$num, $title, $desc, $img, $link]): ?>
      <a class="proj-card" href="<?= $link ?>">
        <div class="proj-card-img">
          <img src="<?= $img ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy">
          <span class="proj-card-num"><?= $num ?></span>
        </div>
        <div class="proj-card-body">
          <div class="proj-card-title"><?= htmlspecialchars($title) ?></div>
          <div class="proj-card-desc"><?= htmlspecialchars($desc) ?></div>
          <span class="proj-card-arrow">Fiche chantier →</span>
        </div>
      </a>
      <?php endforeach ?>

    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="cta-section" id="contact">
  <div class="cta-watermark">PREFABLOC</div>
  <div class="container">
    <div class="cta-inner">
      <div class="cta-left">
        <h2 class="cta-title reveal up">PRENDRE EN MAIN<br>
          <span class="line-indent">VOTRE CHANTIER</span>
        </h2>
        <p class="reveal up reveal-delay-1">Déposez votre dossier — plans, superficie, contraintes de site — et recevez une offre technique et financière chiffrée sous 48h ouvrées, sans engagement de votre part.</p>
        <div class="reveal up reveal-delay-2">
          <a href="contact.php" class="btn btn-light">Obtenir un devis →</a>
        </div>
      </div>
      <div class="cta-right reveal up reveal-delay-3">
        <div class="cta-counter" data-counter>120</div>
        <div class="cta-counter-lbl">Ouvrages réalisés</div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
