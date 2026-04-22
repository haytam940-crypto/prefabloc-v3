<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <!-- Col 1 — Brand -->
      <div>
        <div class="footer-logo">
          <img src="<?= $root ?? '' ?>assets/images/logo.png" alt="Prefa Bloc — Construction &amp; développement immobilier" class="footer-logo-img">
        </div>
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
          <a href="https://youtube.com" class="footer-social" target="_blank" rel="noopener" aria-label="YouTube">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#0B1F3A"/></svg>
          </a>
        </div>
      </div>
      <!-- Col 2 -->
      <div>
        <h4>Liens Rapides</h4>
        <ul class="footer-links">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="a-propos.php">À propos</a></li>
          <li><a href="services.php">Nos Services</a></li>
          <li><a href="realisations.php">Réalisations</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <!-- Col 3 -->
      <div>
        <h4>Nos Métiers</h4>
        <ul class="footer-links">
          <li><a href="services.php">Gros Œuvre & Structure BA</a></li>
          <li><a href="services.php">Bâtiments Industriels</a></li>
          <li><a href="services.php">Travaux Publics & VRD</a></li>
          <li><a href="services.php">Rénovation & Réhabilitation</a></li>
          <li><a href="services.php">Bureau d'Études Intégré</a></li>
        </ul>
      </div>
      <!-- Col 4 -->
      <div>
        <h4>Contactez-nous</h4>
        <div class="footer-contact-item">
          <span class="icon"><?= icon('pin',16) ?></span>
          <span>123, Boulevard Zerktouni,<br>Casablanca 20100, Maroc</span>
        </div>
        <div class="footer-contact-item">
          <span class="icon"><?= icon('phone',16) ?></span>
          <span>
            <a href="tel:+212522123456" style="color:inherit">+212 522 12 34 56</a><br>
            <a href="tel:+212661234567" style="color:inherit">+212 661 23 45 67</a>
          </span>
        </div>
        <div class="footer-contact-item">
          <span class="icon"><?= icon('email',16) ?></span>
          <span>
            <a href="mailto:contact@prefabloc.ma" style="color:inherit">contact@prefabloc.ma</a><br>
            <a href="mailto:devis@prefabloc.ma" style="color:inherit">devis@prefabloc.ma</a>
          </span>
        </div>
        <div class="footer-contact-item">
          <span class="icon"><?= icon('clock',16) ?></span>
          <span>Lun – Ven : 08h30 – 17h30<br>Sam : 09h00 – 13h00</span>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <?= date('Y') ?> Prefabloc — Tous droits réservés.</span>
      <div style="display:flex;gap:24px">
        <a href="contact.php">Mentions légales</a>
        <a href="contact.php">Politique de confidentialité</a>
      </div>
    </div>
  </div>
</footer>

<script src="<?= $root ?? '' ?>assets/js/main.js"></script>
</body>
</html>
