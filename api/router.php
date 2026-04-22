<?php
// Vercel PHP router
(function () {
    $fsRoot = dirname(__DIR__);

    $path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');

    $map = [
        ''                    => 'index.php',
        'index.php'           => 'index.php',
        'a-propos.php'        => 'a-propos.php',
        'services.php'        => 'services.php',
        'realisations.php'    => 'realisations.php',
        'contact.php'         => 'contact.php',
        'projet.php'          => 'projet.php',
        'contact-handler.php' => 'contact-handler.php',
    ];

    $file = $map[$path] ?? null;

    if (!$file || !file_exists($fsRoot . '/' . $file)) {
        http_response_code(301);
        header('Location: /');
        return;
    }

    // Fix PHP_SELF for active nav detection
    $_SERVER['PHP_SELF'] = '/' . $file;

    // Change to project root so relative includes work
    chdir($fsRoot);

    // Include target — all router vars stay in closure scope, not leaked
    require $fsRoot . '/' . $file;
})();
