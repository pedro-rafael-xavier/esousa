<?php

$page_title = $page_title ?? 'E. Sousa - Composer & Violinist';

$page_description = $page_description
    ?? 'E. Sousa is a Portuguese composer and violinist based in Oslo, Norway, creating cinematic music rooted in classical tradition.';

$canonical = $canonical
    ?? 'https://esousaofficial.com/';

$og_title = $og_title ?? $page_title;

$og_description = $og_description
    ?? 'Cinematic music rooted in classical tradition.';

$og_image = $og_image
    ?? 'https://esousaofficial.com/assets/images/hero/hero.webp';

$page = $page ?? '';

$schema_extra = $schema_extra ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="E. Sousa">
    <meta name="theme-color" content="#080808">

    <link rel="icon" type="image/png" href="assets/icons/favicon.png">
    
    <meta name="robots" content="<?= $page === '404' ? 'noindex, follow' : 'index, follow'; ?>">

    <?php if (!empty($canonical)) : ?>

        <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">

    <?php endif; ?>

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($og_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($og_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:site_name" content="E. Sousa">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($og_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($og_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Instrument+Serif:ital@0;1&family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Eduardo Neves de Sousa",
        "alternateName": "E. Sousa",
        "jobTitle": "Composer and Violinist",
        "url": "https://esousaofficial.com/",
        "image": "https://esousaofficial.com/assets/images/hero/hero.webp",
        "sameAs": [
            "https://www.instagram.com/esousaofficial/",
            "https://www.facebook.com/esousaofficial/",
            "https://www.linkedin.com/in/eduardo-sousapt/",
            "https://musicbrainz.org/artist/8386a497-4ae5-4282-aaee-38bf64879c30",
            "https://open.spotify.com/intl-pt/artist/5SNwIcWPQdLAPKdEXDmOC5",
            "https://music.apple.com/us/artist/e-sousa/1777588473",
            "https://www.youtube.com/@esousaofficial",
            "https://tidal.com/artist/51550348",
            "https://www.deezer.com/pt/artist/288314281",
            "https://soundcloud.com/esousaofficial",
            "https://esousaofficial.bandcamp.com"
        ]
    }
    </script>

    <?= $schema_extra; ?>

</head>

<body>

    <a class="skip-link" href="#main-content">Skip to content</a>

    <header
        class="site-header <?= $page !== 'home' ? 'site-header--inner' : ''; ?>"
        data-header
    >

        <div class="container header-inner">

            <a
                class="site-logo"
                href="."
                aria-label="E. Sousa — Home"
            >
                E. SOUSA
            </a>

            <?php include __DIR__ . '/navigation.php'; ?>

        </div>

    </header>