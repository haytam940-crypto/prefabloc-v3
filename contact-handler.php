<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
    exit;
}

$nom     = trim($_POST['nom'] ?? '');
$prenom  = trim($_POST['prenom'] ?? '');
$email   = trim($_POST['email'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
if (!$nom || !$prenom || !$email || !$service || !$message) {
    echo json_encode(['success' => false, 'message' => 'Veuillez remplir tous les champs obligatoires.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Adresse email invalide.']);
    exit;
}

// Sanitize
$nom     = htmlspecialchars($nom);
$prenom  = htmlspecialchars($prenom);
$email   = htmlspecialchars($email);
$tel     = htmlspecialchars(trim($_POST['telephone'] ?? ''));
$ville   = htmlspecialchars(trim($_POST['ville'] ?? ''));
$service = htmlspecialchars($service);
$message = htmlspecialchars($message);

// Envoi email (à configurer avec votre serveur SMTP)
$to      = 'contact@prefabloc.ma';
$subject = "Nouvelle demande de devis — $service";
$body    = "Nom : $prenom $nom\n"
         . "Email : $email\n"
         . ($tel ? "Téléphone : $tel\n" : '')
         . ($ville ? "Ville : $ville\n" : '')
         . "Service : $service\n\n"
         . "Message :\n$message\n";
$headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: Prefabloc Contact Form";

// mail($to, $subject, $body, $headers); // Décommentez sur votre serveur

echo json_encode([
    'success' => true,
    'message' => 'Merci ' . $prenom . ' ! Votre message a bien été envoyé. Nous vous répondrons sous 48h.',
]);
