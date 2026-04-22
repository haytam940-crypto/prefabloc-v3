<?php
$meta_title = 'Prefabloc — Entreprise Générale de BTP au Maroc';
$meta_desc  = 'Prefabloc, entreprise générale de construction au Maroc depuis 2009. Gros œuvre, second œuvre, génie civil, travaux publics — plus de 120 ouvrages livrés dans 8 régions du Royaume.';
include 'includes/header.php';
?>

<!-- ══ HERO ══ -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>
  <div class="hero-glow-1"></div>
  <div class="hero-glow-2"></div>

  <!-- Éléments décoratifs flottants -->
  <span class="hero-deco d1">// N+35.69 W-05.83</span>
  <span class="hero-deco d2">01001100_10</span>
  <span class="hero-deco d3">// CHANTIER_0.01</span>
  <span class="hero-deco d4">+35.6892 / -05.8296_</span>
  <span class="hero-deco d5">// GEO_REF 2009</span>

  <div class="hero-content">
    <div class="container">
      <div class="hero-text">
        <div class="hero-tag">
          <span class="hero-tag-inner">Agréée FNBTP depuis 2009</span>
          <span class="hero-tag-bars">||</span>
        </div>
        <h1>DU GROS ŒUVRE<br><span class="line-indent">À LA LIVRAISON</span><br><span class="line-indent">CLÉ EN MAIN</span></h1>
        <p class="hero-sub">Prefabloc prend en charge l'intégralité de vos chantiers : fondations, structure béton armé, charpente métallique, second œuvre et finitions — avec une maîtrise totale des délais dans 8 régions du Maroc.</p>
        <div class="hero-btns">
          <a href="realisations.php" class="btn btn-gold">Consulter notre portfolio →</a>
          <a href="contact.php" class="btn btn-outline-white">Obtenir un devis sous 48h</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-card">
          <div class="hero-card-title">Nos indicateurs terrain</div>
          <div class="hero-stat-row">
            <div class="hero-stat-item">
              <div>
                <div class="hero-stat-num" data-counter>120</div>
                <div class="hero-stat-lbl">Ouvrages livrés</div>
              </div>
            </div>
            <div class="hero-stat-item">
              <div>
                <div class="hero-stat-num" data-counter>180</div>
                <div class="hero-stat-lbl">Techniciens & ouvriers</div>
              </div>
            </div>
            <div class="hero-stat-item">
              <div>
                <div class="hero-stat-num" data-counter>15</div>
                <div class="hero-stat-lbl">Années sur le terrain</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-bottom">
    <div class="container">
      <div class="hero-bottom-item">
        <div>
          <div class="hero-bottom-num">120+</div>
          <div class="hero-bottom-lbl">Ouvrages réceptionnés</div>
        </div>
      </div>
      <div class="hero-bottom-item">
        <div>
          <div class="hero-bottom-num">8</div>
          <div class="hero-bottom-lbl">Régions du Royaume</div>
        </div>
      </div>
      <div class="hero-bottom-item">
        <div>
          <div class="hero-bottom-num">0</div>
          <div class="hero-bottom-lbl">Retard de livraison</div>
        </div>
      </div>
      <div class="hero-bottom-item">
        <div>
          <div class="hero-bottom-num">2009</div>
          <div class="hero-bottom-lbl">Fondée à Casablanca</div>
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

<!-- ══ ABOUT ══ -->
<section class="section">
  <div class="container">
    <div class="about-grid">
      <div class="about-text">
        <div class="sec-tag reveal up"><span class="sec-tag-inner">Notre Identité</span><span class="sec-tag-bars">||</span></div>
        <h2 class="sec-title reveal up reveal-delay-1">QUINZE ANS<br><span class="line-indent">DE CHANTIERS</span><br><span class="line-indent">ET DE CONFIANCE</span></h2>
        <div class="divider-line reveal up reveal-delay-2"></div>
        <p class="about-lead reveal up reveal-delay-2">Prefabloc est une entreprise générale de BTP fondée en 2009 à Casablanca. Nous intervenons sur toutes les phases d'un projet : études géotechniques, fondations, structure porteuse, charpente, second œuvre et réception de l'ouvrage.</p>
        <p class="about-para reveal up reveal-delay-3">Notre parc matériel propre — grues à tour, coffrages tunnels, pelles hydrauliques et bétonnières volumétriques — nous permet de maîtriser les délais sans sous-traitance incontrôlée. Chaque chantier est encadré par un ingénieur génie civil et un conducteur de travaux expérimentés.</p>
        <p class="about-para reveal up reveal-delay-3">Agréés auprès de la FNBTP, certifiés ISO 9001 et référencés par les principaux donneurs d'ordre publics et privés du Royaume, nous avons bâti notre réputation sur une seule règle : livrer ce qui est promis, dans les délais et selon les règles de l'art.</p>
        <div class="about-stats">
          <div class="about-stat reveal scale reveal-delay-2">
            <div class="about-stat-num" data-counter>120</div>
            <div class="about-stat-lbl">Ouvrages livrés</div>
          </div>
          <div class="about-stat reveal scale reveal-delay-3">
            <div class="about-stat-num" data-counter>180</div>
            <div class="about-stat-lbl">Collaborateurs</div>
          </div>
          <div class="about-stat reveal scale reveal-delay-4">
            <div class="about-stat-num" data-counter>15</div>
            <div class="about-stat-lbl">Ans d'expérience</div>
          </div>
          <div class="about-stat reveal scale reveal-delay-5">
            <div class="about-stat-num" data-counter>8</div>
            <div class="about-stat-lbl">Régions couvertes</div>
          </div>
        </div>
        <div style="margin-top:28px" class="reveal up reveal-delay-4">
          <a href="a-propos.php" class="btn btn-primary">Notre histoire et notre équipe →</a>
        </div>
      </div>
      <div class="about-visual reveal right">
        <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=800&h=600&fit=crop" alt="Chantier gros œuvre Prefabloc" class="about-img-main">
        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=400&h=300&fit=crop" alt="Ingénieurs terrain Prefabloc" class="about-img-secondary">
        <div class="about-badge">
          <span>15+</span>
          Ans sur<br>le terrain
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ SERVICES ══ -->
<section class="section section-light">
  <div class="container">
    <div class="sec-head">
      <div class="sec-tag reveal up"><span class="sec-tag-inner">Nos Métiers</span><span class="sec-tag-bars">||</span></div>
      <h2 class="sec-title reveal up reveal-delay-1">DU TERRASSEMENT<br><span class="line-indent">À LA RÉCEPTION</span></h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3">Six domaines de compétences techniques couvrant l'intégralité du cycle de vie d'un projet de construction au Maroc.</p>
    </div>
    <div class="services-grid">
      <?php
      $services = [
        [icon('home',28),'Construction Résidentielle','Gros œuvre','Villas R+1, immeubles R+10+ et résidences fermées — fondations, voiles BA, dalles, façades et finitions maîtrisées en interne.',['Fondations superficielles et profondes','Voiles et poteaux béton armé','Maçonnerie hourdis et briques','Isolation thermique et acoustique','Ravalement et enduits de façade','Aménagements intérieurs haut de gamme']],
        [icon('office',28),'Commercial & Tertiaire','Structure mixte','Immeubles de bureaux, hôtels, centres commerciaux — structure poteau-poutre, rideau de verre, revêtements de représentation.',['Structures mixtes acier-béton','Facades rideaux et vitrages','Faux plafonds et cloisons sèches','CVC et fluides spéciaux','Electricité courants forts et faibles','Certification HQE & efficacité énergétique']],
        [icon('factory',28),'Industriel & Logistique','Charpente métallique','Hangars, entrepôts frigorifiques, unités de fabrication — charpentes métalliques, dallages industriels et réseaux techniques.',['Charpentes métalliques lourdes','Dallages industriels Q4-Q5','Fosses et quais de chargement','Réseaux sprinklers incendie','Ponts roulants et rails','Bardages et couvertures isolantes']],
        [icon('road',28),'Travaux Publics','Marchés publics','Voirie urbaine, réseaux d\'assainissement, ponts et tranchées couvertes pour collectivités territoriales et ONEE.',['Terrassements et déblais/remblais','Réseaux VRD et assainissement','Chaussées bitumineuses et béton','Ponts et ouvrages d\'art','Éclairage public LED basse consommation','Signalisation horizontale et verticale']],
        [icon('wrench',28),'Rénovation & Mise aux normes','Réhabilitation','Remise à neuf tous corps d\'état, renforcement structurel, mise aux normes parasismiques et accessibilité PMR.',['Diagnostic structurel et sondages','Injection et consolidation béton','Ravalement et traitement humidité','Mise aux normes RPS 2011','Extension et surélévation','Restauration patrimoine bâti']],
        [icon('blueprint',28),'Bureau d\'Études Intégré','MOE & OPC','Conception architecturale et technique, suivi d\'exécution et coordination OPC pour piloter vos projets de A à Z.',['Plans d\'exécution béton armé','Notes de calcul BAEL-91 et RPS','Planning Gantt et suivi avancement','Coordination tous corps d\'état','Contrôle conformité plans vs réalisé','Assistance lors des réceptions']],
      ];
      foreach ($services as $i => [$icon,$title,$badge,$desc,$feats]): ?>
      <div class="service-card reveal scale reveal-delay-<?= ($i % 3) + 1 ?>">
        <div class="service-icon"><?= $icon ?></div>
        <span class="service-badge"><?= $badge ?></span>
        <h3 class="service-title"><?= $title ?></h3>
        <p class="service-desc"><?= $desc ?></p>
        <ul class="service-features">
          <?php foreach ($feats as $f): ?><li><?= $f ?></li><?php endforeach ?>
        </ul>
        <a href="services.php" class="service-link">Détails du service →</a>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<!-- ══ CHIFFRES ══ -->
<section class="numbers-section">
  <div class="container">
    <div class="numbers-grid">
      <div class="number-item reveal up">
        <div class="number-icon"><?= icon('crane',40) ?></div>
        <div class="number-val" data-counter>120</div>
        <div class="number-lbl">Ouvrages réceptionnés</div>
      </div>
      <div class="number-item reveal up reveal-delay-2">
        <div class="number-icon"><?= icon('worker',40) ?></div>
        <div class="number-val" data-counter>180</div>
        <div class="number-lbl">Techniciens & ouvriers</div>
      </div>
      <div class="number-item reveal up reveal-delay-3">
        <div class="number-icon"><?= icon('map',40) ?></div>
        <div class="number-val" data-counter>8</div>
        <div class="number-lbl">Régions du Royaume</div>
      </div>
      <div class="number-item reveal up reveal-delay-4">
        <div class="number-icon"><?= icon('star',40) ?></div>
        <div class="number-val">0</div>
        <div class="number-lbl">Malfaçon non résolue</div>
      </div>
    </div>
  </div>
</section>

<!-- ══ PROJETS PHARES ══ -->
<section class="section">
  <div class="container">
    <div class="sec-head">
      <div class="sec-tag reveal up"><span class="sec-tag-inner">Références</span><span class="sec-tag-bars">||</span></div>
      <h2 class="sec-title reveal up reveal-delay-1">QUELQUES-UNS<br><span class="line-indent">DE NOS CHANTIERS</span></h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3">Des projets variés — résidentiel, tertiaire, industriel, infrastructure — qui illustrent l'étendue de notre savoir-faire constructif.</p>
    </div>
    <div class="projects-grid">
      <?php
      $featured = [
        ['villa-moderne-ain-diab','Villa Moderne Aïn Diab','Résidentiel','residential','Réalisé','Casablanca','14 mois','https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=700&h=525&fit=crop'],
        ['immeuble-bureaux-technopark','Immeuble de Bureaux Technopark','Commercial','commercial','Réalisé','Casablanca','28 mois','https://images.unsplash.com/photo-1486325212027-8081e485255e?w=700&h=525&fit=crop'],
        ['entrepot-logistique-tanger','Entrepôt Logistique Tanger Med','Industriel','industrial','En cours','Tanger','18 mois','https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=700&h=525&fit=crop'],
        ['voirie-zone-industrielle-berrechid','Voirie Zone Industrielle Berrechid','Travaux Publics','tp','Réalisé','Berrechid','16 mois','https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&h=525&fit=crop'],
        ['renovation-hotel-fes','Rénovation Hôtel Palais Fassi','Rénovation','renovation','Réalisé','Fès','12 mois','https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=700&h=525&fit=crop'],
        ['residence-luxe-souissi','Résidence Prestige Souissi','Résidentiel','residential','En cours','Rabat','20 mois','https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=700&h=525&fit=crop'],
      ];
      foreach ($featured as $i => [$slug,$title,$cat,$catClass,$status,$city,$dur,$img]):
        $statusClass = $status === 'Réalisé' ? 'badge-status-done' : 'badge-status-ongoing';
      ?>
      <div class="project-card reveal scale reveal-delay-<?= ($i % 3) + 1 ?>">
        <img class="project-img" src="<?= $img ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy">
        <div class="project-overlay"></div>
        <div class="project-badges">
          <span class="badge badge-cat"><?= $cat ?></span>
          <span class="badge <?= $statusClass ?>"><?= $status ?></span>
        </div>
        <div class="project-info">
          <div class="project-cat-label"><?= $cat ?></div>
          <h3 class="project-title"><?= htmlspecialchars($title) ?></h3>
          <div class="project-meta">
            <span><?= icon('pin',14) ?> <?= $city ?></span>
            <span><?= icon('timer',14) ?> <?= $dur ?></span>
          </div>
          <span class="project-see">Fiche chantier →</span>
        </div>
        <a href="projet.php?slug=<?= $slug ?>" style="position:absolute;inset:0;z-index:5" aria-label="Voir <?= htmlspecialchars($title) ?>"></a>
      </div>
      <?php endforeach ?>
    </div>
    <div style="text-align:center;margin-top:40px" class="reveal up">
      <a href="realisations.php" class="btn btn-primary">Tout notre portfolio →</a>
    </div>
  </div>
</section>

<!-- ══ CLIENTS ══ -->
<section class="section section-light">
  <div class="container">
    <div class="sec-head">
      <div class="sec-tag reveal up"><span class="sec-tag-inner">Maîtres d'Ouvrage</span><span class="sec-tag-bars">||</span></div>
      <h2 class="sec-title reveal up reveal-delay-1">ILS NOUS CONFIENT<br><span class="line-indent">LEURS CHANTIERS</span></h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3">Promoteurs immobiliers, groupes industriels, collectivités et établissements publics — nous travaillons avec les principaux donneurs d'ordre du Royaume.</p>
    </div>
    <div class="clients-grid">
      <?php
      $clients = ['Groupe OCP','CDG Développement','Addoha','Sonadac','Al Omrane','Lydec','Marsa Maroc','ONCF'];
      foreach ($clients as $i => $c): ?>
      <div class="client-logo reveal scale reveal-delay-<?= ($i % 4) + 1 ?>"><?= $c ?></div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<!-- ══ ACTUALITÉS ══ -->
<section class="section">
  <div class="container">
    <div class="sec-head">
      <div class="sec-tag reveal up"><span class="sec-tag-inner">Actualités Chantier</span><span class="sec-tag-bars">||</span></div>
      <h2 class="sec-title reveal up reveal-delay-1">CE QUI SE PASSE<br><span class="line-indent">CHEZ PREFABLOC</span></h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
    </div>
    <div class="news-grid">
      <?php
      $news = [
        ['Nouveau marché','15 Jan. 2025','ADJUDICATION D\'UN IMMEUBLE R+7 À RABAT-AGDAL','Prefabloc a été retenu pour la construction d\'un immeuble résidentiel de 42 logements à Agdal. Le chantier débute en mars 2025, avec une structure en voiles et poteaux béton armé sur 3 niveaux de sous-sol.','https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=700&h=450&fit=crop'],
        ['Certification','08 Jan. 2025','RENOUVELLEMENT ISO 9001 : NOTRE SMQ VALIDÉ POUR 3 ANS','Notre Système de Management de la Qualité a passé l\'audit de renouvellement avec zéro non-conformité majeure. Ce résultat confirme la maîtrise de nos processus de contrôle du béton, de traçabilité des matériaux et de gestion documentaire.','https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=700&h=450&fit=crop'],
        ['Équipement','22 Déc. 2024','ACQUISITION D\'UNE GRUE À TOUR 280 EC-H LIEBHERR','Pour répondre à la montée en puissance de nos chantiers R+8 et plus, nous avons investi dans une grue à tour à montage rapide de 280 mètres-tonnes, portant notre parc de levage à 6 unités opérationnelles.','https://images.unsplash.com/photo-1590088988666-5e20edc4b83b?w=700&h=450&fit=crop'],
      ];
      foreach ($news as $i => [$cat,$date,$title,$excerpt,$img]): ?>
      <div class="news-card reveal up reveal-delay-<?= $i + 1 ?>">
        <div class="news-img-wrap">
          <img class="news-img" src="<?= $img ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy">
          <span class="news-cat-badge"><?= $cat ?></span>
        </div>
        <div class="news-body">
          <div class="news-date"><?= icon('calendar',14) ?> <?= $date ?></div>
          <h3 class="news-title"><?= htmlspecialchars($title) ?></h3>
          <p class="news-excerpt"><?= $excerpt ?></p>
          <a href="contact.php" class="news-link">Lire la suite →</a>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section class="cta-banner">
  <div class="container">
    <h2 class="reveal up">VOTRE CHANTIER<br><span class="line-indent">MÉRITE UN</span><br><span class="line-indent"><span class="gold">VRAI CONSTRUCTEUR</span></span></h2>
    <p class="reveal up reveal-delay-1">Déposez votre dossier — plans, superficie, contraintes de site — et recevez une offre technique et financière chiffrée sous 48h ouvrées, sans engagement de votre part.</p>
    <div class="cta-btns reveal up reveal-delay-2">
      <a href="contact.php" class="btn btn-gold">Soumettre mon projet →</a>
      <a href="realisations.php" class="btn btn-outline-white">Voir nos références</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
