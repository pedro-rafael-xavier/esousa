<?php

$page = 'press';

$page_title = 'Press - E. Sousa';
$page_description = 'Press materials, photographs, artwork and music by E. Sousa.';
$canonical = 'https://esousaofficial.com/press';

$og_title = 'Press - E. Sousa';
$og_description = 'Press materials, photographs, artwork and music by E. Sousa.';
$og_image = 'https://esousaofficial.com/assets/images/hero/hero.webp';

/* ==================================================
   GOOGLE DRIVE LINKS
   ================================================== */

$press_links = [

    'music' => 'https://drive.google.com/drive/folders/1y5WUrzsdsYaYvHe_ZS8n93fz1iwMR11C?usp=drive_link',

    'artwork' => 'https://drive.google.com/drive/folders/1aJdLWCeWFof8m_iXy2KlllaLPE8HR6W3?usp=drive_link',

    'photos' => 'https://drive.google.com/drive/folders/1vrS68wLM7V1PdAuaXaEqjs9TNTuKqsmI?usp=drive_link',

    'bio' => 'https://drive.google.com/drive/folders/1ori90Mzb3R0WW1_XakoJ02mbgIA2y6b_?usp=drive_link',

    'press_kit' => '',

];

include __DIR__ . '/includes/header.php';

?>

<main id="main-content">


    <!-- ==================================================
         PRESS INTRO
         ================================================== -->

    <section class="section press-intro">

        <div class="container">

            <div class="press-intro-inner">

                <p class="eyebrow">
                    Press &amp; Media
                </p>

                <h1>Press</h1>

                <p class="press-intro-text">
                    Press materials, photographs, artwork and music
                    available for professional use.
                </p>

            </div>

        </div>

    </section>

    <!-- ==================================================
         PRESS MATERIALS
         ================================================== -->

    <section class="press-materials">

        <div class="container">

            <!-- ==================================================
                 MUSIC
                 ================================================== -->

            <div class="press-category">

                <div class="press-category-heading">

                    <p class="eyebrow">01</p>

                    <h2>Music</h2>

                    <p>
                        Selected music and audio files available
                        for professional reference.
                    </p>

                </div>

                <a
                    class="press-feature-link"
                    href="<?= htmlspecialchars($press_links['music']) ?>"
                    target="_blank"
                    rel="noopener noreferrer">

                    <span>
                        Open Music Library
                    </span>

                    <span aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>

            <!-- ==================================================
                 ARTWORK
                 ================================================== -->

            <div class="press-category">

                <div class="press-category-heading">

                    <p class="eyebrow">02</p>

                    <h2>Artwork</h2>

                    <p>
                        Release artwork and selected visual assets.
                    </p>

                </div>

                <a
                    class="press-feature-link"
                    href="<?= htmlspecialchars($press_links['artwork']) ?>"
                    target="_blank"
                    rel="noopener noreferrer">

                    <span>
                        Open Artwork Library
                    </span>

                    <span aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>

            <!-- ==================================================
                 PHOTOS
                 ================================================== -->

            <div class="press-category">

                <div class="press-category-heading">

                    <p class="eyebrow">
                        03
                    </p>

                    <h2>Photos</h2>

                    <p>
                        Official photographs for editorial,
                        press and promotional use.
                    </p>

                </div>

                <a
                    class="press-feature-link"
                    href="<?= htmlspecialchars($press_links['photos']) ?>"
                    target="_blank"
                    rel="noopener noreferrer">

                    <span>
                        Open Photo Library
                    </span>

                    <span aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>

            <!-- ==================================================
                 BIOGRAPHY
                 ================================================== -->

            <div class="press-category">

                <div class="press-category-heading">

                    <p class="eyebrow">04</p>

                    <h2>Biography</h2>

                    <p>
                        Short and long-form biographies for press,
                        editorial and professional use.
                    </p>

                </div>

                <a
                    class="press-feature-link"
                    href="<?= htmlspecialchars($press_links['bio']) ?>"
                    target="_blank"
                    rel="noopener noreferrer">

                    <span>
                        Open Bio Library
                    </span>

                    <span aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>

            <!-- ==================================================
                 COMPLETE PRESS KIT
                 ================================================== -->

            <div class="press-kit">

                <div class="press-kit-inner">

                    <p class="eyebrow">Complete Press Kit</p>

                    <h2>Everything in one place.</h2>

                    <p>
                        Access the complete collection of press materials,
                        including biographies, photographs, artwork and music.
                    </p>


                    <?php if (!empty($press_links['press_kit'])) : ?>

                        <a
                            class="es-link es-link--light"
                            href="<?= htmlspecialchars($press_links['press_kit']) ?>"
                            target="_blank"
                            rel="noopener noreferrer">

                            <span>
                                Download Press Kit
                            </span>

                            <span
                                class="es-link-mark"
                                aria-hidden="true">↗</span>

                        </a>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>