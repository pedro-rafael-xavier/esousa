<?php

$page = '404';

$page_title = 'Page Not Found - E. Sousa';
$page_description = 'The page you are looking for could not be found.';

$canonical = '';

$og_title = 'Page Not Found - E. Sousa';
$og_description = 'The page you are looking for could not be found.';
$og_image = 'https://esousaofficial.com/assets/images/hero/hero.webp';


include __DIR__ . '/includes/header.php';

?>

<main id="main-content">

    <section class="error-page">

        <div class="container">

            <div class="error-page-inner">

                <p class="eyebrow">
                    Error 404
                </p>

                <h1>
                    Page not found.
                </h1>

                <p class="error-page-text">
                    The page you're looking for doesn't exist
                    or may have moved.
                </p>

                <a
                    class="es-link es-link--dark"
                    href=".">

                    <span>
                        Back to Home
                    </span>

                    <span
                        class="es-link-arrow"
                        aria-hidden="true">
                        →
                    </span>

                </a>

            </div>

        </div>

    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>