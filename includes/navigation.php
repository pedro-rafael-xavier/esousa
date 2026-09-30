<nav class="desktop-nav" aria-label="Primary navigation">
    
    <a
        href="."
        <?= $page === 'home' ? 'aria-current="page"' : ''; ?>
    >
        Home
    </a>

    <a
        href="music"
        <?= $page === 'music' ? 'aria-current="page"' : ''; ?>
    >
        Music
    </a>

    <a
        href="film-scoring"
        <?= $page === 'film-scoring' ? 'aria-current="page"' : ''; ?>
    >
        Film Scoring
    </a>

    <a
        href="collaborations"
        <?= $page === 'collaborations' ? 'aria-current="page"' : ''; ?>
    >
        Collaborations
    </a>

    <a
        href="about"
        <?= $page === 'about' ? 'aria-current="page"' : ''; ?>
    >
        About
    </a>

    <a
        href="press"
        <?= $page === 'press' ? 'aria-current="page"' : ''; ?>
    >
        Press
    </a>

    <a
        href="contact"
        <?= $page === 'contact' ? 'aria-current="page"' : ''; ?>
    >
        Contact
    </a>

</nav>

<details class="mobile-nav" data-mobile-nav>

    <summary aria-label="Open navigation menu">

        <span></span>
        <span></span>
        <span></span>

    </summary>

    <nav
        class="mobile-nav-panel"
        aria-label="Mobile navigation"
    >   

        <a
            href="."
            <?= $page === 'home' ? 'aria-current="page"' : ''; ?>
        >
            <span>Home</span>
            <span aria-hidden="true">→</span>
        </a>
        
        <a
            href="music"
            <?= $page === 'music' ? 'aria-current="page"' : ''; ?>
        >
            <span>Music</span>
            <span aria-hidden="true">→</span>
        </a>

        <a
            href="film-scoring"
            <?= $page === 'film-scoring' ? 'aria-current="page"' : ''; ?>
        >
            <span>Film Scoring</span>
            <span aria-hidden="true">→</span>
        </a>

        <a
            href="collaborations"
            <?= $page === 'collaborations' ? 'aria-current="page"' : ''; ?>
        >
            <span>Collaborations</span>
            <span aria-hidden="true">→</span>
        </a>

        <a
            href="about"
            <?= $page === 'about' ? 'aria-current="page"' : ''; ?>
        >
            <span>About</span>
            <span aria-hidden="true">→</span>
        </a>

        <a
            href="press"
            <?= $page === 'press' ? 'aria-current="page"' : ''; ?>
        >
            <span>Press</span>
            <span aria-hidden="true">→</span>
        </a>

        <a
            href="contact"
            <?= $page === 'contact' ? 'aria-current="page"' : ''; ?>
        >
            <span>Contact</span>
            <span aria-hidden="true">→</span>
        </a>

    </nav>

</details>