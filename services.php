<?php
$meta_title = 'Nos Services — Prefabloc';
$meta_desc  = 'Gros œuvre, charpente, VRD, rénovation, bureau d\'études : découvrez les six métiers de Prefabloc, entreprise générale de BTP au Maroc depuis 2009.';
include 'includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Accueil</a><span>›</span><span>Services</span></div>
    <h1>Nos Domaines d'Intervention</h1>
    <p>Du terrassement à la réception des clés, Prefabloc maîtrise l'intégralité de la chaîne constructive avec ses propres équipes, son propre matériel et son bureau d'études intégré.</p>
  </div>
</div>

<?php
$services = [
  [
    'icon'  => 'home',
    'title' => 'Construction Résidentielle',
    'img'   => 'https://images.unsplash.com/photo-1613977257363-707ba9348227?w=800&h=540&fit=crop',
    'desc1' => 'De la villa individuelle à l\'immeuble R+10, notre département résidentiel prend en charge l\'ensemble des corps d\'état : terrassement et fouilles, fondations semelles filantes ou radier général, coulage des voiles et poteaux en béton armé dosé à 350 kg/m³, planchers hourdis, maçonnerie briques et finitions intérieures.',
    'desc2' => 'Notre bureau d\'études calcule les armatures et les sections de béton conformément au règlement BAEL 91 révisé 99 et au RPS 2011 pour les zones sismiques concernées. Chaque lot est suivi par un conducteur de travaux certifié et un laborantin béton qui prélève les éprouvettes à la sortie du malaxeur.',
    'feats' => ['Fouilles et fondations profondes (pieux forés)','Voiles BA et poteaux-poutres calculés RPS 2011','Planchers à corps creux et dalles pleine','Maçonnerie briques creuses et parpaings','Isolation thermique réglementaire (RTCM)','Revêtements, carrelages et menuiseries PVC/ALU'],
  ],
  [
    'icon'  => 'office',
    'title' => 'Commercial, Tertiaire & Hôtellerie',
    'img'   => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&h=540&fit=crop',
    'desc1' => 'Bureaux open space, hôtels, centres commerciaux et cliniques imposent des contraintes techniques spécifiques : grandes portées, charges d\'exploitation élevées, second œuvre de représentation et installations techniques complexes. Prefabloc maîtrise les structures mixtes acier-béton, les fondations sur radier et les façades vitrées type rideau.',
    'desc2' => 'Nous intégrons dès la phase études les prescriptions CVC, électricité CFO/CFA, plomberie et sprinklers afin d\'éviter les reprises coûteuses en cours de chantier. Nos équipes de second œuvre réalisent les cloisons sèches Knauf, faux plafonds suspendus, carrelages grands formats et peintures époxy de haute résistance.',
    'feats' => ['Structures poteaux-poutres grandes portées (jusqu\'à 24 m)','Radiers et fondations sur sol compressible','Façades rideaux aluminium et vitrages isolants','Cloisons sèches BA13 et faux plafonds T15','Coordination CVC, électricité et fluides spéciaux','Finitions marbre, pierre naturelle et parquet chêne'],
  ],
  [
    'icon'  => 'factory',
    'title' => 'Bâtiments Industriels & Logistiques',
    'img'   => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=800&h=540&fit=crop',
    'desc1' => 'Entrepôts, usines de fabrication, ateliers de maintenance et plateformes cross-dock : nos ingénieurs structure dimensionnent des charpentes métalliques HEA/HEB pouvant atteindre 40 m de portée libre, sur fondations profondes adaptées à chaque nature de sol (pieux battus, micropieux ou puits marocains).',
    'desc2' => 'Nous réalisons les dallages industriels au laser screed avec joints de dilatation calculés, les fosses de maintenance, les quais de chargement niveleurs, les réseaux incendie sprinklers et les systèmes de récupération des eaux pluviales conformes à la réglementation de la zone industrielle ou franche concernée.',
    'feats' => ['Charpentes métalliques lourdes (jusqu\'à 40 m de portée)','Dallages industriels Q4-Q5 au laser screed','Fosses de décantation et bassins de rétention','Quais de chargement et niveleurs hydrauliques','Couvertures bac acier et bardages isolants','Réseaux incendie sprinklers et RIA certifiés'],
  ],
  [
    'icon'  => 'road',
    'title' => 'Travaux Publics & Infrastructure',
    'img'   => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&h=540&fit=crop',
    'desc1' => 'Notre division infrastructure répond aux appels d\'offres des communes, des agences urbaines, de l\'ADM et des opérateurs délégués. Terrassements mécanisés, pose de réseaux d\'assainissement en béton armé centrifugé (DN 400 à DN 1200), chaussées en bicouche et béton bitumineux, ouvrages de franchissement — nos équipes disposent du matériel lourd nécessaire.',
    'desc2' => 'Nous travaillons selon les prescriptions du CCDG Maroc, les spécifications du Ministère de l\'Équipement et les normes NM pour les matériaux de voirie. Chaque lot fait l\'objet d\'un dossier d\'exécution, de fiches de contrôle et d\'un rapport d\'autocontrôle remis au maître d\'ouvrage à la réception.',
    'feats' => ['Terrassements mécanisés et déblais rocheux','Réseaux d\'assainissement EU/EP (DN 300 à DN 1200)','Chaussées bicouche et béton bitumineux BBSG','Trottoirs bordures, mobilier urbain et espaces verts','Éclairage public LED sur poteaux Pirelli','Ponts cadres et dalots béton armé'],
  ],
  [
    'icon'  => 'wrench',
    'title' => 'Rénovation, Réhabilitation & Renforcement',
    'img'   => 'https://images.unsplash.com/photo-1565538810643-b5bdb714032a?w=800&h=540&fit=crop',
    'desc1' => 'Nous intervenons sur le bâti existant avec des techniques de diagnostic et de renforcement adaptées : carottage et sondage des structures, injection de résines époxy dans les fissures structurelles, chemisage de poteaux par béton projeté, ajout de voiles de contreventement et mise aux normes parasismiques selon le RPS 2011.',
    'desc2' => 'Pour les bâtiments historiques et les riads, nos artisans maîtrisent les techniques traditionnelles du bâtiment marocain : pose de zelliges sur mortier de chaux, taille du marbre Khenifra, moulage du stuc Tadelakt et menuiserie bois de cèdre — dans le respect de l\'authenticité architecturale et des prescriptions du CERKAS.',
    'feats' => ['Diagnostic structurel et sondages destructifs','Injection époxy et agrafage des fissures','Chemisage poteaux et renforts voiles BA','Mise aux normes parasismiques RPS 2011','Traitement des remontées capillaires et humidité','Restauration zellige, stuc, bois et gébs'],
  ],
];
foreach ($services as $i => $s):
  $reverse = $i % 2 !== 0;
  $bg = $i % 2 === 0 ? '' : 'section-light';
?>
<section class="section <?= $bg ?>">
  <div class="container">
    <div class="service-detail <?= $reverse ? 'reverse' : '' ?>">
      <div class="reveal <?= $reverse ? 'right' : 'left' ?>">
        <img src="<?= $s['img'] ?>" alt="<?= htmlspecialchars($s['title']) ?>" class="service-detail-img">
      </div>
      <div class="reveal <?= $reverse ? 'left' : 'right' ?>">
        <span class="sec-tag"><?= icon($s['icon'], 18) ?> Expertise</span>
        <h2 style="font-size:clamp(22px,3.5vw,36px);font-weight:900;color:var(--navy);text-transform:uppercase;letter-spacing:-.3px;margin:14px 0 4px;"><?= htmlspecialchars($s['title']) ?></h2>
        <div class="divider-line" style="margin:14px 0 20px;"></div>
        <p style="color:var(--gray);line-height:1.8;margin-bottom:14px"><?= $s['desc1'] ?></p>
        <p style="color:var(--gray);line-height:1.8;margin-bottom:20px"><?= $s['desc2'] ?></p>
        <ul class="feature-list">
          <?php foreach ($s['feats'] as $f): ?>
          <li><span class="check">✓</span> <?= htmlspecialchars($f) ?></li>
          <?php endforeach ?>
        </ul>
        <div style="margin-top:24px">
          <a href="contact.php" class="btn btn-primary">Demander un devis →</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach ?>

<section class="numbers-section">
  <div class="container">
    <div style="text-align:center;margin-bottom:48px">
      <span class="sec-tag" style="color:var(--gold)">Nos garanties</span>
      <h2 class="sec-title light" style="margin-top:12px">POURQUOI TRAVAILLER AVEC PREFABLOC ?</h2>
      <div class="divider-line"></div>
    </div>
    <div class="numbers-grid">
      <div class="number-item reveal up">
        <div class="number-icon"><?= icon('medal',40) ?></div>
        <div class="number-val" data-counter>15</div>
        <div class="number-lbl">Ans de chantiers actifs</div>
      </div>
      <div class="number-item reveal up reveal-delay-2">
        <div class="number-icon"><?= icon('iso',40) ?></div>
        <div class="number-val">ISO</div>
        <div class="number-lbl">9001 — SMQ certifié</div>
      </div>
      <div class="number-item reveal up reveal-delay-3">
        <div class="number-icon"><?= icon('lightning',40) ?></div>
        <div class="number-val">48h</div>
        <div class="number-lbl">Délai de remise d'offre</div>
      </div>
      <div class="number-item reveal up reveal-delay-4">
        <div class="number-icon"><?= icon('handshake',40) ?></div>
        <div class="number-val">100%</div>
        <div class="number-lbl">Réceptions sans réserve</div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <h2 class="reveal up">UN PROJET EN COURS<br>DE MONTAGE ?</h2>
    <p class="reveal up reveal-delay-1">Transmettez-nous vos plans ou votre programme — notre bureau d'études vous adresse un avant-métré et une offre de prix complète en moins de 48h ouvrées.</p>
    <div class="cta-btns reveal up reveal-delay-2">
      <a href="contact.php" class="btn btn-gold">Soumettre mon dossier →</a>
      <a href="realisations.php" class="btn btn-outline-white">Voir nos références</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
