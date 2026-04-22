<footer class="footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Col 1 — Brand + description + socials -->
      <div>
        <img src="<?= $root ?? '' ?>assets/images/logo.png"
             alt="Prefabloc"
             class="footer-logo-img"
             onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
        <span class="footer-logo-text" style="display:none">PREFABLOC</span>
        <p class="footer-desc">Gros œuvre, charpente, VRD, second œuvre — Prefabloc prend en charge l'intégralité de vos chantiers depuis 2009, avec ses propres équipes et son parc matériel dans 8 régions du Maroc.</p>
        <div class="footer-socials">
          <a href="https://linkedin.com" class="footer-social" target="_blank" rel="noopener" aria-label="LinkedIn">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          <a href="https://instagram.com" class="footer-social" target="_blank" rel="noopener" aria-label="Instagram">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
          </a>
          <a href="https://facebook.com" class="footer-social" target="_blank" rel="noopener" aria-label="Facebook">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
          </a>
        </div>
      </div>

      <!-- Col 2 — Explorer links -->
      <div>
        <h4>Explorer</h4>
        <ul class="footer-links">
          <li><a href="<?= $root ?? '' ?>index.php">Accueil</a></li>
          <li><a href="<?= $root ?? '' ?>a-propos.php">À propos</a></li>
          <li><a href="<?= $root ?? '' ?>index.php#services">Nos Métiers</a></li>
          <li><a href="<?= $root ?? '' ?>realisations.php">Réalisations</a></li>
          <li><a href="<?= $root ?? '' ?>contact.php">Contact</a></li>
        </ul>
      </div>

      <!-- Col 3 — Nous contacter (mini form) -->
      <div>
        <h4>Nous Contacter</h4>
        <form class="footer-form" action="<?= $root ?? '' ?>api/router.php" method="POST">
          <input type="text" name="name" placeholder="Votre nom" required>
          <input type="email" name="email" placeholder="Votre email" required>
          <textarea name="message" placeholder="Votre message…" required></textarea>
          <button type="submit">Envoyer →</button>
        </form>
      </div>

    </div>

    <hr class="footer-dashed">

    <div class="footer-bottom">
      <span>© <?= date('Y') ?> Prefabloc — Tous droits réservés.</span>
      <div class="footer-bottom-links">
        <a href="contact.php">Mentions légales</a>
        <a href="contact.php">Politique de confidentialité</a>
      </div>
    </div>
  </div>
</footer>

<script src="<?= $root ?? '' ?>assets/js/main.js"></script>
</body>
</html>
