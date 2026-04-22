<?php
$meta_title = 'Réalisations — Prefabloc';
$meta_desc  = 'Plus de 120 ouvrages réceptionnés en 15 ans : immeubles résidentiels, bâtiments industriels, voirie, hôtels rénovés. Consultez notre portfolio de chantiers réalisés au Maroc.';
include 'includes/header.php';

$projects = [
  ['villa-moderne-ain-diab','Villa Moderne Aïn Diab','Résidentiel','residential','Réalisé','Casablanca','14 mois','https://images.unsplash.com/photo-1613977257363-707ba9348227?w=700&h=525&fit=crop'],
  ['immeuble-residentiel-maarif','Immeuble Résidentiel Maarif','Résidentiel','residential','Réalisé','Casablanca','24 mois','https://images.unsplash.com/photo-1486325212027-8081e485255e?w=700&h=525&fit=crop'],
  ['residence-luxe-souissi','Résidence Prestige Souissi','Résidentiel','residential','En cours','Rabat','20 mois','https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=700&h=525&fit=crop'],
  ['immeuble-bureaux-technopark','Immeuble de Bureaux Technopark','Commercial','commercial','Réalisé','Casablanca','28 mois','https://images.unsplash.com/photo-1497366216548-37526070297c?w=700&h=525&fit=crop'],
  ['showroom-automobile-marrakech','Showroom Automobile Premium','Commercial','commercial','Réalisé','Marrakech','10 mois','https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=700&h=525&fit=crop'],
  ['entrepot-logistique-tanger','Entrepôt Logistique Tanger Med','Industriel','industrial','En cours','Tanger','18 mois','https://images.unsplash.com/photo-1553413077-190dd305871c?w=700&h=525&fit=crop'],
  ['voirie-zone-industrielle-berrechid','Voirie Zone Industrielle Berrechid','Travaux Publics','tp','Réalisé','Berrechid','16 mois','https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&h=525&fit=crop'],
  ['renovation-hotel-fes','Rénovation Hôtel Palais Fassi','Rénovation','renovation','Réalisé','Fès','12 mois','https://images.unsplash.com/photo-1566073771259-6a8506099945?w=700&h=525&fit=crop'],
];

$cats = ['all' => 'Tous', 'residential' => 'Résidentiel', 'commercial' => 'Commercial', 'industrial' => 'Industriel', 'tp' => 'Travaux Publics', 'renovation' => 'Rénovation'];
$counts = ['all' => count($projects)];
foreach ($projects as $p) {
  $counts[$p[3]] = ($counts[$p[3]] ?? 0) + 1;
}
?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Accueil</a><span>›</span><span>Réalisations</span></div>
    <h1>Nos Références de Chantiers</h1>
    <p>Plus de 120 ouvrages réceptionnés en 15 ans dans 8 régions du Maroc — du logement individuel à la plateforme logistique de grande envergure.</p>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="sec-head">
      <span class="sec-tag reveal up">Portfolio</span>
      <h2 class="sec-title reveal up reveal-delay-1">OUVRAGES LIVRÉS<br>& EN COURS</h2>
      <div class="divider-line reveal up reveal-delay-2"></div>
      <p class="sec-sub reveal up reveal-delay-3"><?= count($projects) ?> fiches chantier détaillées : programme, superficie, durée d'exécution et photos de réalisation.</p>
    </div>

    <!-- Filtres -->
    <div class="filters reveal up">
      <?php foreach ($cats as $key => $label): ?>
      <button class="filter-btn <?= $key === 'all' ? 'active' : '' ?>" data-filter="<?= $key ?>">
        <?= $label ?>
        <?php if ($key !== 'all' && isset($counts[$key])): ?>
        <span class="count">(<?= $counts[$key] ?>)</span>
        <?php endif ?>
      </button>
      <?php endforeach ?>
    </div>

    <!-- Grille -->
    <div class="projects-grid" id="projectsGrid">
      <?php foreach ($projects as $i => [$slug, $title, $cat, $catClass, $status, $city, $dur, $img]):
        $statusClass = $status === 'Réalisé' ? 'badge-status-done' : 'badge-status-ongoing';
      ?>
      <div class="project-card reveal scale reveal-delay-<?= ($i % 3) + 1 ?>" data-category="<?= $catClass ?>">
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
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <h2 class="reveal up">VOTRE PROJET REJOINDRA<br>CES <span class="gold">RÉFÉRENCES</span></h2>
    <p class="reveal up reveal-delay-1">Promoteurs, industriels ou collectivités — soumettez votre programme et obtenez une offre technique et financière complète sous 48h ouvrées.</p>
    <div class="cta-btns reveal up reveal-delay-2">
      <a href="contact.php" class="btn btn-gold">Soumettre mon projet →</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
