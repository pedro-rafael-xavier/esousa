<?php

    $page = 'music';

    $page_title = 'Music - E. Sousa';

    $page_description =
        'Explore the music of E. Sousa, including Mythos and Echoes of One — original cinematic, orchestral and instrumental compositions.';

    $canonical =
        'https://esousaofficial.com/music';

    $og_title =
        'Music — E. Sousa';

    $og_description =
        'Original cinematic, orchestral and instrumental compositions by E. Sousa.';

    $og_image =
        'https://esousaofficial.com/assets/images/artwork/mythos.webp';

    $schema_extra = '
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MusicAlbum",
        "@id": "https://esousaofficial.com/music#mythos",
        "name": "Mythos",
        "url": "https://esousaofficial.com/music#mythos",
        "image": "https://esousaofficial.com/assets/images/artwork/mythos.webp",
        "datePublished": "2026-06-05",
        "byArtist": {
            "@type": "Person",
            "name": "Eduardo Neves de Sousa",
            "alternateName": "E. Sousa",
            "url": "https://esousaofficial.com/"
        },
        "track": [
            {
                "@type": "MusicRecording",
                "name": "Defiant",
                "position": 1,
                "duration": "PT3M32S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            },
            {
                "@type": "MusicRecording",
                "name": "Deadline Drip",
                "position": 2,
                "duration": "PT2M21S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            },
            {
                "@type": "MusicRecording",
                "name": "Fatum Tenet",
                "position": 3,
                "duration": "PT2M46S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            },
            {
                "@type": "MusicRecording",
                "name": "A Reconquista",
                "position": 4,
                "duration": "PT4M27S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            },
            {
                "@type": "MusicRecording",
                "name": "Boundless Yearning",
                "position": 5,
                "duration": "PT3M20S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            }
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MusicAlbum",
        "@id": "https://esousaofficial.com/music#echoes-of-one",
        "name": "Echoes of One",
        "url": "https://esousaofficial.com/music#echoes-of-one",
        "image": "https://esousaofficial.com/assets/images/artwork/echoes-of-one.webp",
        "datePublished": "2024",
        "byArtist": {
            "@type": "Person",
            "name": "Eduardo Neves de Sousa",
            "alternateName": "E. Sousa",
            "url": "https://esousaofficial.com/"
        },
        "track": [
            {
                "@type": "MusicRecording",
                "name": "Momentum Perpetuum",
                "position": 1,
                "duration": "PT4M58S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            },
            {
                "@type": "MusicRecording",
                "name": "Evermore",
                "position": 2,
                "duration": "PT4M12S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            },
            {
                "@type": "MusicRecording",
                "name": "Anima Arcanum Est",
                "position": 3,
                "duration": "PT7M46S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            },
            {
                "@type": "MusicRecording",
                "name": "Portimão",
                "position": 4,
                "duration": "PT7M01S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            },
            {
                "@type": "MusicRecording",
                "name": "A Special Place",
                "position": 5,
                "duration": "PT4M41S",
                "byArtist": {
                    "@type": "Person",
                    "name": "E. Sousa"
                }
            }
        ]
    }
    </script>
    ';

    include __DIR__ . '/includes/header.php';

?>

    <main id="main-content">

        <!-- PAGE INTRO -->

        <section class="music-page-intro">

            <div class="container">

                <p class="eyebrow">
                    Selected works
                </p>

                <h1>Music</h1>

                <p class="music-page-lead">
                    Original compositions exploring emotion, narrative and the cinematic possibilities of sound.
                </p>

            </div>

        </section>

        <!-- MYTHOS -->

        <section class="release-section release-section--mythos" id="mythos">

            <div class="container">

                <div class="release-detail-grid">

                    <!-- Artwork -->

                    <div class="release-detail-artwork">

                        <img
                            src="assets/images/artwork/mythos.webp"
                            alt="Cover artwork for the EP Mythos by E. Sousa, featuring Silves Castle in the Algarve, Portugal, beneath a starry sky"
                            width="1200"
                            height="1200"
                            loading="eager"
                            decoding="async">

                    </div>

                    <!-- Information -->

                    <div class="release-detail-content">

                        <p class="release-year">2026</p>

                        <h2>Mythos</h2>

                        <p class="release-meta">Orchestral · Choral · Cinematic</p>

                        <p class="release-description">
                            A cinematic journey through fantasy, science fiction and history,
                            exploring atmosphere, drama and the possibilities of orchestral and
                            choral music.
                        </p>

                        <p class="release-description">
                            The EP features soprano Vilde Holen, cellist Martin Rasten and guitarist
                            Rafael Xavier, with E. Sousa performing violin on several tracks.
                        </p>

                        <!-- Streaming -->

                        <div class="release-links">

                            <a
                                class="es-link es-link--dark es-link--compact"
                                href="https://open.spotify.com/intl-pt/album/0bv3IjhbxmARMMbRKXXSyt?si=LsKNs-T_TDGzkW7J-06vMw"
                                target="_blank"
                                rel="noopener noreferrer">

                                <span>Listen on Spotify</span>
                                <span class="es-link-arrow" aria-hidden="true">→</span>

                            </a>

                            <a
                                class="es-link es-link--dark es-link--compact"
                                href="https://music.apple.com/us/album/mythos-ep/6768187773"
                                target="_blank"
                                rel="noopener noreferrer">

                                <span>Listen on Apple Music</span>
                                <span class="es-link-arrow" aria-hidden="true">→</span>

                            </a>

                        </div>

                    </div>

                </div>

                <!-- MYTHOS TRACKLIST -->

                <div class="release-tracklist">

                    <div class="tracklist-heading">

                        <span>
                            Tracklist
                        </span>

                        <span>
                            5 tracks
                        </span>

                    </div>


                    <ol class="tracklist">

                        <li class="track">

                            <div class="track-number">
                                01
                            </div>

                            <div class="track-information">

                                <h3>
                                    Defiant
                                </h3>

                                <p class="track-credit">
                                    Vilde Holen — Soprano
                                </p>

                            </div>

                            <time class="track-duration" datetime="PT3M32S">
                                03:32
                            </time>

                        </li>

                        <li class="track">

                            <div class="track-number">
                                02
                            </div>

                            <div class="track-information">

                                <h3>Deadline Drip</h3>

                            </div>

                            <time class="track-duration" datetime="PT2M21S">
                                02:21
                            </time>

                        </li>

                        <li class="track">

                            <div class="track-number">
                                03
                            </div>

                            <div class="track-information">

                                <h3>
                                    Fatum Tenet
                                </h3>

                                <p class="track-credit">
                                    Vilde Holen — Soprano
                                </p>

                            </div>

                            <time class="track-duration" datetime="PT2M46S">
                                02:46
                            </time>

                        </li>


                        <li class="track">

                            <div class="track-number">
                                04
                            </div>

                            <div class="track-information">

                                <h3>A Reconquista</h3>

                                <p class="track-credit">
                                    Martin Rasten — Cello<br>
                                    Rafael Xavier — Solo Guitar
                                </p>

                            </div>

                            <time class="track-duration" datetime="PT4M27S">
                                04:27
                            </time>

                        </li>

                        <li class="track">

                            <div class="track-number">
                                05
                            </div>

                            <div class="track-information">

                                <h3>Boundless Yearning</h3>

                            </div>

                            <time class="track-duration" datetime="PT3M20S">
                                03:20
                            </time>

                        </li>

                    </ol>

                </div>

                <div class="release-platforms">

                    <p class="platforms-heading">Listen</p>

                    <div class="platform-links">

                        <!-- Spotify -->
                        <a
                            class="platform-link"
                            href="https://open.spotify.com/intl-pt/album/0bv3IjhbxmARMMbRKXXSyt?si=LsKNs-T_TDGzkW7J-06vMw"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Spotify">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/spotify.svg" alt="">
                            </span>

                            <span class="platform-name">Spotify</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>


                        <!-- Apple Music -->
                        <a
                            class="platform-link"
                            href="https://music.apple.com/us/album/mythos-ep/6768187773"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Apple Music">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/apple-music.svg" alt="">
                            </span>

                            <span class="platform-name">Apple Music</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>


                        <!-- YouTube -->
                        <a
                            class="platform-link"
                            href="https://youtu.be/bZJ14n95BBA?si=l1P8MvwiWJc_8dqB"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on YouTube">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/youtube.svg" alt="">
                            </span>

                            <span class="platform-name">YouTube</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>


                        <!-- TIDAL -->
                        <a
                            class="platform-link"
                            href="https://tidal.com/album/523087141"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on TIDAL">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/tidal.svg" alt="">
                            </span>

                            <span class="platform-name">TIDAL</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>


                        <!-- Deezer -->
                        <a
                            class="platform-link"
                            href="https://www.deezer.com/pt/album/978122731"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Deezer">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/deezer.svg" alt="">
                            </span>

                            <span class="platform-name">Deezer</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>


                        <!-- Amazon Music -->
                        <a
                            class="platform-link"
                            href="https://www.amazon.es/Mythos-Sousa/dp/B0GZYKDTXN"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Amazon Music">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/amazon-music.svg" alt="">
                            </span>

                            <span class="platform-name">Amazon Music</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>


                        <!-- SoundCloud -->
                        <a
                            class="platform-link"
                            href="https://soundcloud.com/esousaofficial/sets/mythos"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on SoundCloud">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/soundcloud.svg" alt="">
                            </span>

                            <span class="platform-name">SoundCloud</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>


                        <!-- Bandcamp -->
                        <a
                            class="platform-link"
                            href="https://esousaofficial.bandcamp.com/album/echoes-of-one"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Bandcamp">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/bandcamp.svg" alt="">
                            </span>

                            <span class="platform-name">Bandcamp</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>

                    </div>
                </div>

            </div>
        

        </section>

        <!-- ECHOES OF ONE -->

        <section class="release-section release-section--echoes" id="echoes-of-one">

            <div class="container">

                <div class="release-detail-grid">

                    <!-- Artwork -->

                    <div class="release-detail-artwork">

                        <img
                            src="assets/images/artwork/echoes-of-one.webp"
                            alt="Cover artwork for the EP Echoes of One by E. Sousa, featuring a golden violin at the center surrounded by geometric shapes inspired by the construction of the violin"
                            width="1200"
                            height="1200"
                            loading="lazy"
                            decoding="async">

                    </div>

                    <!-- Information -->

                    <div class="release-detail-content">

                        <p class="release-year">2024</p>

                        <h2>Echoes of One</h2>

                        <p class="release-meta">
                            Instrumental · Cinematic
                        </p>

                        <p class="release-description">
                            An intimate collection of original instrumental works exploring love,
                            perseverance, dedication and the experiences that shape our lives.
                        </p>

                        <p class="release-description">
                            Built around the warmth and softness of string instruments, the EP
                            moves through a personal and cinematic reflection on existence,
                            relationships and the human experience.
                        </p>

                        <!-- Streaming -->

                        <div class="release-links">

                            <a
                                class="es-link es-link--dark es-link--compact"
                                href="https://open.spotify.com/intl-pt/album/1t0PEtqTmjRPVM8Eq5PbLg?si=X3lPAIz9TcObFPwYyA9Ueg"
                                target="_blank"
                                rel="noopener noreferrer">

                                <span>Listen on Spotify</span>
                                <span class="es-link-arrow" aria-hidden="true">→</span>

                            </a>

                            <a
                                class="es-link es-link--dark es-link--compact"
                                href="https://music.apple.com/us/album/echoes-of-one-ep/1777702027"
                                target="_blank"
                                rel="noopener noreferrer">

                                <span>Listen on Apple Music</span>
                                <span class="es-link-arrow" aria-hidden="true">→</span>

                            </a>

                        </div>

                    </div>

                </div>

                <!-- ECHOES TRACKLIST -->

                <div class="release-tracklist">

                    <div class="tracklist-heading">

                        <span>
                            Tracklist
                        </span>

                        <span>
                            5 tracks
                        </span>

                    </div>

                    <ol class="tracklist">

                        <li class="track">

                            <div class="track-number">
                                01
                            </div>

                            <div class="track-information">

                                <h3>
                                    Momentum Perpetuum
                                </h3>

                            </div>

                            <time class="track-duration" datetime="PT4M58S">
                                04:58
                            </time>

                        </li>

                        <li class="track">

                            <div class="track-number">
                                02
                            </div>

                            <div class="track-information">

                                <h3>
                                    Evermore
                                </h3>

                            </div>

                            <time class="track-duration" datetime="PT4M12S">
                                04:12
                            </time>

                        </li>

                        <li class="track">

                            <div class="track-number">
                                03
                            </div>

                            <div class="track-information">

                                <h3>
                                    Anima Arcanum Est
                                </h3>

                            </div>

                            <time class="track-duration" datetime="PT7M46S">
                                07:46
                            </time>

                        </li>

                        <li class="track">

                            <div class="track-number">
                                04
                            </div>

                            <div class="track-information">

                                <h3>
                                    Portimão
                                </h3>

                            </div>

                            <time class="track-duration" datetime="PT7M1S">
                                07:01
                            </time>

                        </li>

                        <li class="track">

                            <div class="track-number">
                                05
                            </div>

                            <div class="track-information">

                                <h3>
                                    A Special Place
                                </h3>

                            </div>

                            <time class="track-duration" datetime="PT4M41S">
                                04:41
                            </time>

                        </li>

                    </ol>

                </div>

                <div class="release-platforms">

                    <p class="platforms-heading">Listen</p>

                    <div class="platform-links">

                        <!-- Spotify -->
                        <a
                            class="platform-link"
                            href="https://open.spotify.com/intl-pt/album/1t0PEtqTmjRPVM8Eq5PbLg?si=X3lPAIz9TcObFPwYyA9Ueg"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Spotify">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/spotify.svg" alt="">
                            </span>

                            <span class="platform-name">Spotify</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>

                        <!-- Apple Music -->
                        <a
                            class="platform-link"
                            href="https://music.apple.com/us/album/echoes-of-one-ep/1777702027"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Apple Music">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/apple-music.svg" alt="">
                            </span>

                            <span class="platform-name">Apple Music</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>

                        <!-- YouTube -->
                        <a
                            class="platform-link"
                            href="https://www.youtube.com/@esousaofficial"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on YouTube">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/youtube.svg" alt="">
                            </span>

                            <span class="platform-name">YouTube</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>

                        <!-- TIDAL -->
                        <a
                            class="platform-link"
                            href="https://tidal.com/album/397303980"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on TIDAL">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/tidal.svg" alt="">
                            </span>

                            <span class="platform-name">TIDAL</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>

                        <!-- Deezer -->
                        <a
                            class="platform-link"
                            href="https://www.deezer.com/pt/album/665179121"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Deezer">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/deezer.svg" alt="">
                            </span>

                            <span class="platform-name">Deezer</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>

                        <!-- Amazon Music -->
                        <a
                            class="platform-link"
                            href="https://www.amazon.es/Mythos-Sousa/dp/B0GZYKDTXN"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Amazon Music">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/amazon-music.svg" alt="">
                            </span>

                            <span class="platform-name">Amazon Music</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>

                        <!-- SoundCloud -->
                        <a
                            class="platform-link"
                            href="https://soundcloud.com/esousaofficial/sets/echoes-of-one"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on SoundCloud">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/soundcloud.svg" alt="">
                            </span>

                            <span class="platform-name">SoundCloud</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>

                        <!-- Bandcamp -->
                        <a
                            class="platform-link"
                            href="https://esousaofficial.bandcamp.com/album/echoes-of-one"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Listen to E. Sousa on Bandcamp">

                            <span class="platform-icon" aria-hidden="true">
                                <img src="assets/icons/bandcamp.svg" alt="">
                            </span>

                            <span class="platform-name">Bandcamp</span>
                            <span class="platform-arrow" aria-hidden="true">↗</span>

                        </a>

                    </div>
                </div>

            </div>

        </section>

        <!-- FILM SCORING CTA -->

        <section class="music-page-cta">

            <div class="container">

                <p class="eyebrow">Music for image</p>

                <h2>Explore film scoring.</h2>

                <p>
                    Discover music written for image, narrative and atmosphere.
                </p>

                <a
                    class="es-link es-link--light"
                    href="film-scoring">

                    <span>View Film Scoring</span>
                    <span class="es-link-arrow" aria-hidden="true">→</span>

                </a>

            </div>

        </section>

    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
