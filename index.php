<?php

    $page = 'home';

    $page_title = 'E. Sousa - Composer & Violinist';

    $page_description =
        'E. Sousa is a Portuguese composer and violinist based in Oslo, Norway, creating cinematic music rooted in classical tradition.';

    $canonical =
        'https://esousaofficial.com/';

    $schema_extra = '
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "E. Sousa",
        "url": "https://esousaofficial.com/"
    }
    </script>
    ';

    include __DIR__ . '/includes/header.php';

?>

    <main id="main-content">

        <section class="hero" aria-labelledby="hero-title">

            <div class="hero-media">
                <img
                    src="assets/images/hero/hero.webp"
                    alt="E. Sousa playing violin while seated on a tree beside the sea, wearing a black suit"
                    width="2400"
                    height="1600"
                    fetchpriority="high"
                    decoding="async">
            </div>

            <div class="hero-overlay"></div>

            <div class="container hero-content">

                <p class="eyebrow">Composer &amp; Violinist</p>

                <h1 id="hero-title">E. Sousa</h1>

                <p class="hero-tagline">Music for image, narrative and atmosphere.</p>

                <div class="hero-actions">

                    <a class="es-link es-link--light" href="#music">
                        
                        <span>Explore Music</span>

                        <span class="es-link-arrow" aria-hidden="true">→</span>

                    </a>

                    <a class="es-link es-link--muted" href="#film-scoring">
                        <span>Film Scoring</span>

                        <span class="es-link-arrow" aria-hidden="true">→</span>

                    </a>

                </div>

            </div>

        </section>

        <section class="section music-section" id="music" aria-labelledby="music-title">

            <div class="container">

                <div class="section-heading">

                    <p class="eyebrow">Selected works</p>

                    <h2 id="music-title">Music</h2>

                    <p>Original compositions exploring emotion, narrative and the cinematic possibilities of sound.</p>
                
                </div>

                <div class="music-grid">
                    
                    <article class="release-card">

                        <a class="release-image" href="music#mythos" aria-label="Explore Mythos">

                            <img src="assets/images/artwork/mythos.webp" alt="Cover artwork for the EP Mythos by E. Sousa, featuring Silves Castle in the Algarve, Portugal, beneath a starry sky" width="1200" height="1200" loading="lazy" decoding="async">
                        
                        </a>

                        <div class="release-content">

                            <p class="release-year">2026</p>

                            <h3>Mythos</h3>
                            
                            <p class="release-meta">Orchestral · Choral · Cinematic</p>

                            <p>A cinematic journey through fantasy, science fiction and history, exploring atmosphere, drama and the possibilities of orchestral and choral music.</p>
                            
                            <a class="es-link es-link--dark es-link--compact" href="music#mythos">
                                <span>Listen</span>

                                <span class="es-link-arrow" aria-hidden="true">→</span>

                            </a>

                        </div>

                    </article>

                    <article class="release-card">

                        <a class="release-image" href="music#echoes-of-one" aria-label="Explore Echoes of One">
                            
                            <img src="assets/images/artwork/echoes-of-one.webp" alt="Cover artwork for the EP Echoes of One by E. Sousa, featuring a golden violin at the center surrounded by geometric shapes inspired by the construction of the violin" width="1200" height="1200" loading="lazy" decoding="async">
                        
                        </a>
                        <div class="release-content">

                            <p class="release-year">2024</p>

                            <h3>Echoes of One</h3>

                            <p class="release-meta">Instrumental · Cinematic</p>
                            
                            <p>
                                An intimate collection of instrumental works exploring love, perseverance, dedication and the experiences that shape our lives.
                            </p>
                            
                            <a class="es-link es-link--dark es-link--compact" href="music#echoes-of-one">

                                <span>Listen</span>

                                <span class="es-link-arrow" aria-hidden="true">→</span>

                            </a>

                        </div>

                    </article>

                </div>

                <div class="section-link">

                    <a class="es-link es-link--dark" href="music">

                        <span>View All Music</span>

                        <span class="es-link-arrow" aria-hidden="true">→</span>

                    </a>

                </div>
            </div>

        </section>

        <section class="section film-section" id="film-scoring" aria-labelledby="film-title">

            <div class="container">

                <div class="section-heading">

                    <p class="eyebrow">Music for image</p>

                    <h2 id="film-title">Film Scoring</h2>

                    <p>Music written for image, narrative and atmosphere.</p>

                </div>

                <article class="featured-score">

                    <div class="featured-score-media">

                        <div class="video-preview">

                            <div
                                class="youtube-facade"
                                data-youtube-id="Uy39kEPBRpQ"
                                data-youtube-title="Score The World — 2nd Prize submission by E. Sousa"
                            >
                                <img
                                    src="https://i.ytimg.com/vi/Uy39kEPBRpQ/maxresdefault.jpg"
                                    alt="Score The World — 2nd Prize submission by E. Sousa"
                                    loading="lazy"
                                    decoding="async"
                                >

                                <button
                                    type="button"
                                    class="youtube-play"
                                    aria-label="Play Score The World — 2nd Prize submission by E. Sousa"
                                >
                                    <span class="youtube-play-icon" aria-hidden="true">▶</span>
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="featured-score-content">

                        <p class="eyebrow">Film Scoring Competition</p>

                        <h3>Score The World</h3>

                        <p class="score-award">2nd Prize</p>

                        <p>A scoring submission created for the international Score The World competition, based on a scene from <em>Son of Saul</em>.</p>
                        
                        <p class="score-note">Competition submission - not the original film soundtrack.</p>
                        
                        <a class="es-link es-link--light es-link--compact" href="film-scoring#score-the-world">
                            
                            <span>View Project</span>
                            
                            <span class="es-link-arrow" aria-hidden="true">→</span>

                        </a>

                    </div>

                </article>

                <div class="section-link">

                    <a class="es-link es-link--light" href="film-scoring">

                        <span>View Film Scoring</span>

                        <span class="es-link-arrow" aria-hidden="true">→</span>

                    </a>
                    
                </div>
                
            </div>

        </section>

        <section class="section collaborations-section" id="collaborations" aria-labelledby="collaborations-title">
            
            <div class="container">
                
                <div class="section-heading">
                    
                    <p class="eyebrow">Selected work</p>

                    <h2 id="collaborations-title">Collaborations</h2>

                    <p>Selected work across orchestration, arrangement and violin performance.</p>

                </div>

                <div class="collaborations-grid">

                    <a class="collaboration-card" href="collaborations#expensive-soul">
                        <span class="collaboration-name">Expensive Soul</span>
                        <span class="collaboration-role">Violin</span>
                        <span class="collaboration-arrow" aria-hidden="true">→</span>
                    </a>

                    <a class="collaboration-card" href="collaborations#yesterdaze">
                        <span class="collaboration-name">Yesterdaze</span>
                        <span class="collaboration-role">Violin</span>
                        <span class="collaboration-arrow" aria-hidden="true">→</span>
                    </a>

                    <a class="collaboration-card" href="collaborations#rafael-xavier">
                        <span class="collaboration-name">Rafael Xavier</span>
                        <span class="collaboration-role">Violin · Orchestration</span>
                        <span class="collaboration-arrow" aria-hidden="true">→</span>
                    </a>

                    <a class="collaboration-card" href="collaborations#miguel-tela">
                        <span class="collaboration-name">Miguel Tela</span>
                        <span class="collaboration-role">Violin</span>
                        <span class="collaboration-arrow" aria-hidden="true">→</span>
                    </a>

                </div>

                <div class="section-link">

                    <a class="es-link es-link--dark" href="collaborations">

                        <span>View Collaborations</span>

                        <span class="es-link-arrow" aria-hidden="true">→</span>

                    </a>

                </div>

            </div>

        </section>

        <section class="section about-section" id="about" aria-labelledby="about-title">

            <div class="container about-grid">

                <div class="about-image">

                    <img src="assets/images/portraits/portrait-2.webp" alt="E. Sousa playing violin while seated on a tree beside the sea, wearing a black suit" width="1200" height="1500" loading="lazy" decoding="async">
                
                </div>

                <div class="about-content">
                    
                    <p class="eyebrow">The composer</p>

                    <h2 id="about-title">From classical violin to cinematic composition.</h2>

                    <p>Eduardo Neves de Sousa is a Portuguese composer and violinist based in Oslo, Norway. His work spans composition, orchestration, arrangement and violin performance, with a growing focus on film scoring and music for screen.</p>
                    
                    <a class="es-link es-link--dark es-link--compact" href="about">

                        <span>Read More</span>

                        <span class="es-link-arrow" aria-hidden="true">→</span>

                    </a>

                </div>

            </div>

        </section>

        <section class="section press-section" id="press" aria-labelledby="press-title">

            <div class="container press-inner">

                <div>

                    <p class="eyebrow">Press &amp; media</p>

                    <h2 id="press-title">Resources for professional use.</h2>

                    <p>Press materials, photographs, artwork and music available for professional use.</p>

                </div>

                <a class="es-link es-link--dark" href="press">

                    <span>Press Kit</span>

                    <span class="es-link-arrow" aria-hidden="true">→</span>
                </a>

            </div>

        </section>

        <section class="contact-section" id="contact" aria-labelledby="contact-title">

            <div class="container contact-inner">

                <p class="eyebrow">Professional enquiries</p>

                <h2 id="contact-title">Work with E. Sousa.</h2>

                <p>For film scoring, collaborations, music and professional enquiries.</p>

                <a class="es-link es-link--light" href="contact">

                    <span>Contact</span>

                    <span class="es-link-arrow" aria-hidden="true">→</span>

                </a>

            </div>

        </section>

    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
    