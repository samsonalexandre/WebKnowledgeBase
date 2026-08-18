<?php
// 1. Projektdaten laden
require_once 'php/project-data.php';

// 2. HTML-Kopf einbinden
require_once 'php/head.php';

// 3. Navigation einbinden
require_once 'php/navigation.php';

// 4. Inhaltsseite entscheiden (Router)
if (isset($_GET['project_id'])) {
    require_once 'php/project-detail.php';
} else {
    require_once 'php/home.php';
}

// 5. Fußbereich einbinden
require_once 'php/footer.php';