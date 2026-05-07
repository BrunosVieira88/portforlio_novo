<x-layout :title="__('portfolio.page_title')">
  @php($currentLocale = app()->getLocale())
  <a class="skip-link" href="#main">{{ __('portfolio.skip_to_content') }}</a>
  <!-- NAV --------------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark nav-glass fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#top">Bruno Vieira</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
        aria-controls="navMenu" aria-expanded="false" aria-label="{{ __('portfolio.nav_toggle') }}">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto gap-lg-3">
          <li class="nav-item"><a class="nav-link" href="#projects">{{ __('portfolio.nav_projects') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">{{ __('portfolio.nav_skills') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="#method">{{ __('portfolio.nav_method') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">{{ __('portfolio.nav_about') }}</a></li>
          <li class="nav-item"><a class="nav-link nav-link--cta" href="#contact">{{ __('portfolio.nav_contact') }}</a></li>
          <li class="nav-item d-flex align-items-center gap-1">
            <a class="btn btn-sm {{ $currentLocale === 'en' ? 'btn-light' : 'btn-glass' }}" href="{{ route('lang.switch', 'en') }}" aria-label="{{ __('portfolio.lang_en_label') }}" @if($currentLocale === 'en') aria-current="true" @endif>
              🇺🇸
            </a>
            <a class="btn btn-sm {{ $currentLocale === 'pt' ? 'btn-light' : 'btn-glass' }}" href="{{ route('lang.switch', 'pt') }}" aria-label="{{ __('portfolio.lang_pt_label') }}" @if($currentLocale === 'pt') aria-current="true" @endif>
              🇧🇷
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- BG DECOR ---------------------------------------------------------->
  <div class="bg-grid"></div>
  <div class="cursor-spotlight" aria-hidden="true"></div>
  <div class="bg-blur-1"></div>
  <div class="bg-blur-2"></div>

  <main class="content container" id="main">
    <!-- HERO ------------------------------------------------------------->
    <section class="hero hero--clean row align-items-center g-4 g-lg-5" id="top" data-reveal>
      <div class="col-lg-6 hero-copy-col">
        <canvas id="hero-matrix" class="hero-matrix-canvas" aria-hidden="true"></canvas>
        <div class="hero-copy-inner">
          <p class="hero-eyebrow">
            <span class="status-dot" aria-hidden="true"></span>
            <span>{{ __('portfolio.hero_eyebrow') }}</span>
          </p>
          <h1 class="hero-title">{{ __('portfolio.hero_title_1') }} <span>{{ __('portfolio.hero_title_2') }}</span></h1>
          <p class="hero-stack-line text-muted-200">{{ __('portfolio.hero_stack') }}</p>
          <p class="hero-copy">
            {{ __('portfolio.hero_copy_lead') }}<a class="hero-inline-link" href="#skills">{{ __('portfolio.nav_skills') }}</a>{{ __('portfolio.hero_copy_join') }}<a class="hero-inline-link" href="#projects">{{ __('portfolio.nav_projects') }}</a>{{ __('portfolio.hero_copy_tail') }}
          </p>

          <div class="hero-actions mt-3 mt-lg-4">
            <a href="{{ asset($currentLocale === 'en' ? 'BrunoSantosVieiraEn.pdf' : 'BrunoSantosVieira.pdf') }}" download="{{ $currentLocale === 'en' ? 'BrunoSantosVieiraEn.pdf' : 'BrunoSantosVieira.pdf' }}" class="btn btn-cta">
              <i class="fa-solid fa-file-arrow-down me-2" aria-hidden="true"></i> {{ __('portfolio.resume_download') }}
            </a>
            <a href="https://www.linkedin.com/in/brunosantosvieira/" target="_blank" rel="noopener noreferrer" class="btn btn-glass">
              <i class="fab fa-linkedin me-2" aria-hidden="true"></i> LinkedIn
            </a>
            <a href="https://gitlab.com/BrunoSantosVieira88" target="_blank" rel="noopener noreferrer" class="btn btn-glass btn-quiet">
              <i class="fa-brands fa-gitlab me-2" aria-hidden="true"></i> GitLab
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 hero-visual-col">
        <div class="hero-visual portrait-wrap" aria-hidden="false">
          <div class="hero-visual__photo-wrap">
            <img src="port/bruno.png" alt="Bruno Santos Vieira" class="portrait-img hero-portrait-img" width="560" height="700" decoding="async" fetchpriority="high" />
          </div>
          <p class="hero-visual__caption">
            <span class="hero-visual__flag" aria-hidden="true">🇧🇷</span>
            <span>{{ __('portfolio.hero_visual_caption') }}</span>
          </p>
        </div>
      </div>
    </section>

    <div class="hero-ticker" aria-hidden="true">
      <div class="hero-ticker__track">
        @foreach(__('portfolio.hero_ticker_items') as $item)
          <span>{{ $item }}</span>
        @endforeach
        @foreach(__('portfolio.hero_ticker_items') as $item)
          <span>{{ $item }}</span>
        @endforeach
      </div>
    </div>

    <section id="projects" class="projects-section mt-5" data-reveal>
      <div class="section-heading text-start">
        <p class="xp-eyebrow mb-2">{{ __('portfolio.projects_eyebrow') }}</p>
        <h2>{{ __('portfolio.projects_title') }}</h2>
        <p>{{ __('portfolio.projects_intro') }}</p>
      </div>
      <div class="project-grid mt-4">
        <article class="project-card project-card--featured">
          <div>
            <p class="project-card__tag">{{ __('portfolio.project_1_tag') }}</p>
            <h3>{{ __('portfolio.project_1_title') }}</h3>
            <p>{{ __('portfolio.project_1_text') }}</p>
          </div>
          <ul class="project-card__stack">
            <li>Laravel</li>
            <li>Vue.js</li>
            <li>MySQL</li>
            <li>REST</li>
          </ul>
        </article>
        <article class="project-card">
          <div>
            <p class="project-card__tag">{{ __('portfolio.project_2_tag') }}</p>
            <h3>{{ __('portfolio.project_2_title') }}</h3>
            <p>{{ __('portfolio.project_2_text') }}</p>
          </div>
          <a href="https://pokemon-pokedex-7b20c12acbe4.herokuapp.com/" target="_blank" rel="noopener noreferrer" class="project-card__link">
            {{ __('portfolio.pokemon_project_cta') }} <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
          </a>
        </article>
        <article class="project-card">
          <div>
            <p class="project-card__tag">{{ __('portfolio.project_3_tag') }}</p>
            <h3>{{ __('portfolio.project_3_title') }}</h3>
            <p>{{ __('portfolio.project_3_text') }}</p>
          </div>
          <ul class="project-card__stack">
            <li>PDF</li>
            <li>Uploads</li>
            <li>Auth</li>
            <li>APIs</li>
          </ul>
        </article>
      </div>
    </section>

    <section id="skills" class="mt-5" data-reveal>
      <div class="glass p-4 p-lg-5">
        <p class="xp-eyebrow mb-2">{{ __('portfolio.xp_eyebrow') }}</p>
        <h2 class="section-title">{{ __('portfolio.xp_title') }}</h2>
        <p class="fs-5 text-muted-200 mb-4">{{ __('portfolio.xp_intro') }}</p>

        <div class="xp-grid">
          <article class="xp-card">
            <i class="fa-solid fa-layer-group xp-card__icon" aria-hidden="true"></i>
            <h3>{{ __('portfolio.xp_card_1_title') }}</h3>
            <p>{{ __('portfolio.xp_card_1_text') }}</p>
          </article>
          <article class="xp-card">
            <i class="fa-solid fa-plug-circle-bolt xp-card__icon" aria-hidden="true"></i>
            <h3>{{ __('portfolio.xp_card_2_title') }}</h3>
            <p>{{ __('portfolio.xp_card_2_text') }}</p>
          </article>
          <article class="xp-card">
            <i class="fa-solid fa-building-columns xp-card__icon" aria-hidden="true"></i>
            <h3>{{ __('portfolio.xp_card_3_title') }}</h3>
            <p>{{ __('portfolio.xp_card_3_text') }}</p>
          </article>
          <article class="xp-card">
            <i class="fa-brands fa-laravel xp-card__icon" aria-hidden="true"></i>
            <h3>{{ __('portfolio.xp_card_4_title') }}</h3>
            <p>{{ __('portfolio.xp_card_4_text') }}</p>
          </article>
          <article class="xp-card">
            <i class="fa-solid fa-wand-magic-sparkles xp-card__icon" aria-hidden="true"></i>
            <h3>{{ __('portfolio.xp_card_5_title') }}</h3>
            <p>{{ __('portfolio.xp_card_5_text') }}</p>
          </article>
          <article class="xp-card">
            <i class="fa-solid fa-rocket xp-card__icon" aria-hidden="true"></i>
            <h3>{{ __('portfolio.xp_card_6_title') }}</h3>
            <p>{{ __('portfolio.xp_card_6_text') }}</p>
          </article>
          <article class="xp-card">
            <i class="fa-solid fa-cubes xp-card__icon" aria-hidden="true"></i>
            <h3>{{ __('portfolio.xp_card_7_title') }}</h3>
            <p>{{ __('portfolio.xp_card_7_text') }}</p>
          </article>
        </div>

        <div class="xp-recruiters mt-4">
          <h3 class="xp-recruiters__title">{{ __('portfolio.xp_recruiters_title') }}</h3>
          <ul class="xp-recruiters__list mb-0">
            <li>{{ __('portfolio.xp_recruiter_1') }}</li>
            <li>{{ __('portfolio.xp_recruiter_2') }}</li>
            <li>{{ __('portfolio.xp_recruiter_3') }}</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- “MÉTRICAS” ------------------------------------------------------->
    <section id="highlights" class="mt-4" data-reveal>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="metric glass">
            <span class="metric-number">Full-Stack</span>
            <span class="metric-label">{{ __('portfolio.metric_stack_label') }}</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="metric glass">
            <span class="metric-number">{{ __('portfolio.metric_delivery') }}</span>
            <span class="metric-label">{{ __('portfolio.metric_delivery_label') }}</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="metric glass">
            <span class="metric-number">{{ __('portfolio.metric_quality') }}</span>
            <span class="metric-label">{{ __('portfolio.metric_quality_label') }}</span>
          </div>
        </div>
      </div>
    </section>

    <section id="method" class="method-section mt-5" data-reveal>
      <div class="section-heading text-start">
        <p class="xp-eyebrow mb-2">{{ __('portfolio.method_eyebrow') }}</p>
        <h2>{{ __('portfolio.method_title') }}</h2>
        <p>{{ __('portfolio.method_intro') }}</p>
      </div>
      <div class="method-grid mt-4">
        <article class="method-card">
          <span>01</span>
          <h3>{{ __('portfolio.method_1_title') }}</h3>
          <p>{{ __('portfolio.method_1_text') }}</p>
        </article>
        <article class="method-card">
          <span>02</span>
          <h3>{{ __('portfolio.method_2_title') }}</h3>
          <p>{{ __('portfolio.method_2_text') }}</p>
        </article>
        <article class="method-card">
          <span>03</span>
          <h3>{{ __('portfolio.method_3_title') }}</h3>
          <p>{{ __('portfolio.method_3_text') }}</p>
        </article>
      </div>
    </section>

    <section id="about" class="about-section mt-5" data-reveal>
      <div>
        <p class="xp-eyebrow mb-2">{{ __('portfolio.about_eyebrow') }}</p>
        <h2 class="section-title">{{ __('portfolio.about_heading') }}</h2>
      </div>
      <div class="about-section__copy">
        <p class="fs-5">
          {{ __('portfolio.about_p1') }}
        </p>
        <p class="fs-5 about-employer">
          <span class="text-muted-200">{{ __('portfolio.about_employer_label') }}</span>
          <a class="about-employer__link" href="https://www.innovareti.com.br/" target="_blank" rel="noopener noreferrer">Innovare TI</a>{{ __('portfolio.about_employer_after_company') }}
        </p>
        <p class="fs-5 mb-0">
          {{ __('portfolio.about_p2') }}
        </p>
      </div>
    </section>

    <section class="final-cta mt-5" id="contact" data-reveal>
      <div>
        <p class="xp-eyebrow mb-2">{{ __('portfolio.cta_eyebrow') }}</p>
        <h2>{{ __('portfolio.cta_title') }}</h2>
        <p>{{ __('portfolio.cta_text') }}</p>
      </div>
      <div class="final-cta__actions">
        <a href="{{ asset($currentLocale === 'en' ? 'BrunoSantosVieiraEn.pdf' : 'BrunoSantosVieira.pdf') }}" download="{{ $currentLocale === 'en' ? 'BrunoSantosVieiraEn.pdf' : 'BrunoSantosVieira.pdf' }}" class="btn btn-cta">
          <i class="fa-solid fa-file-arrow-down me-2" aria-hidden="true"></i> {{ __('portfolio.resume_download') }}
        </a>
        <a href="https://www.linkedin.com/in/brunosantosvieira/" target="_blank" rel="noopener noreferrer" class="btn btn-glass">
          <i class="fab fa-linkedin me-2" aria-hidden="true"></i> LinkedIn
        </a>
        <a href="https://gitlab.com/BrunoSantosVieira88" target="_blank" rel="noopener noreferrer" class="btn btn-glass btn-quiet">
          <i class="fa-brands fa-gitlab me-2" aria-hidden="true"></i> GitLab
        </a>
      </div>
    </section>

    <section id="favorites" class="culture-world mt-5" data-reveal aria-label="{{ __('portfolio.hobbies') }}">
      <div class="culture-world__bg" aria-hidden="true"></div>
      <div class="culture-world__intro">
        <p class="xp-eyebrow mb-2">{{ __('portfolio.hobbies_globe_eyebrow') }}</p>
        <h2>{{ __('portfolio.hobbies_world_title') }}</h2>
        <p>{{ __('portfolio.hobbies_world_text') }}</p>
      </div>

      <div class="culture-world__planet" aria-hidden="true">
        <div class="planet-sphere" id="culturePlanet">
          <div class="planet-texture planet-texture--movies"></div>
          <div class="planet-texture planet-texture--games"></div>
          <div class="planet-texture planet-texture--books"></div>
          <div class="planet-texture planet-texture--writing"></div>
          <div class="planet-shine"></div>
        </div>
        <div class="planet-orbit planet-orbit--a"></div>
        <div class="planet-orbit planet-orbit--b"></div>
      </div>

      <div class="culture-world__nav" role="tablist" aria-label="{{ __('portfolio.hobbies') }}">
        <button class="world-dot is-active" type="button" data-world="movies" role="tab" aria-selected="true">
          <i class="fa-solid fa-film" aria-hidden="true"></i>
          <span>{{ __('portfolio.hobby_node_movies') }}</span>
        </button>
        <button class="world-dot" type="button" data-world="games" role="tab" aria-selected="false">
          <i class="fa-solid fa-gamepad" aria-hidden="true"></i>
          <span>{{ __('portfolio.hobby_node_games') }}</span>
        </button>
        <button class="world-dot" type="button" data-world="books" role="tab" aria-selected="false">
          <i class="fa-solid fa-book-open" aria-hidden="true"></i>
          <span>{{ __('portfolio.hobby_node_books') }}</span>
        </button>
        <button class="world-dot" type="button" data-world="writing" role="tab" aria-selected="false">
          <i class="fa-solid fa-pen-nib" aria-hidden="true"></i>
          <span>{{ __('portfolio.hobby_node_writing') }}</span>
        </button>
      </div>

      <aside class="culture-world__console" aria-live="polite">
        <p class="console-kicker" id="worldKicker">Cinema orbit</p>
        <h3 id="worldTitle">Favorite Movies</h3>
        <p id="worldText">Stories that shaped my taste for narrative rhythm, atmosphere, and epic soundtracks.</p>
        <dl>
          <div><dt>{{ __('portfolio.hobby_signal_1_title') }}</dt><dd id="worldSignalA">Narrative sense</dd></div>
          <div><dt>{{ __('portfolio.hobby_signal_2_title') }}</dt><dd id="worldSignalB">Visual memory</dd></div>
        </dl>
      </aside>

      <div class="culture-world__gallery" id="worldGallery" aria-live="polite"></div>
      <article class="culture-world__feature" id="worldFeature" aria-live="polite">
        <img id="worldFeatureImg" src="{{ asset('movies/lord.jpeg') }}" alt="The Lord of the Rings" loading="lazy" decoding="async">
        <div>
          <span id="worldFeatureMeta">Epic fantasy</span>
          <h4 id="worldFeatureTitle">The Lord of the Rings</h4>
          <p id="worldFeatureText">Epic battles, unforgettable soundtrack: cinema at its peak.</p>
        </div>
      </article>
      <div class="culture-world__marquee" aria-hidden="true">
        <div>
          <span>cinema</span><span>games</span><span>books</span><span>writing</span><span>worldbuilding</span><span>systems</span>
          <span>cinema</span><span>games</span><span>books</span><span>writing</span><span>worldbuilding</span><span>systems</span>
        </div>
      </div>
    </section>

    <footer class="py-4 text-center text-muted-300 small mt-5">
      © <span id="year"></span> Bruno Santos Vieira - {{ __('portfolio.footer') }}
      <span class="footer-links">
        <a href="https://gitlab.com/BrunoSantosVieira88" target="_blank" rel="noopener noreferrer">GitLab</a>
      </span>
    </footer>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <!-- JS ----------------------------------------------------------------->
  <script>
    // ano
    document.getElementById('year').textContent = new Date().getFullYear();

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Estado do menu, scroll reveal e microinteracoes
    (function(){
      const nav = document.querySelector('.nav-glass');
      const spotlight = document.querySelector('.cursor-spotlight');
      const revealItems = document.querySelectorAll('[data-reveal]');

      const setNavState = () => {
        if(!nav) return;
        nav.classList.toggle('is-scrolled', window.scrollY > 24);
      };
      setNavState();
      window.addEventListener('scroll', setNavState, {passive:true});

      if('IntersectionObserver' in window){
        const revealObserver = new IntersectionObserver((entries)=>{
          entries.forEach(entry=>{
            if(entry.isIntersecting){
              entry.target.classList.add('is-visible');
              revealObserver.unobserve(entry.target);
            }
          });
        }, {threshold:.16, rootMargin:'0px 0px -8% 0px'});
        revealItems.forEach(item=> revealObserver.observe(item));
      } else {
        revealItems.forEach(item=> item.classList.add('is-visible'));
      }

      if(spotlight && !reduceMotion){
        window.addEventListener('pointermove', (event)=>{
          spotlight.style.setProperty('--x', `${event.clientX}px`);
          spotlight.style.setProperty('--y', `${event.clientY}px`);
        }, {passive:true});
      }

      document.querySelectorAll('.xp-card, .metric').forEach(card=>{
        card.addEventListener('pointermove', (event)=>{
          const rect = card.getBoundingClientRect();
          card.style.setProperty('--mx', `${event.clientX - rect.left}px`);
          card.style.setProperty('--my', `${event.clientY - rect.top}px`);
        });
      });
    })();

    // Animações premium com GSAP/ScrollTrigger, com fallback para o CSS existente
    (function(){
      if(reduceMotion || !window.gsap) return;
      const gsap = window.gsap;
      if(window.ScrollTrigger) gsap.registerPlugin(window.ScrollTrigger);

      gsap.from('.hero-eyebrow, .hero-title, .hero-stack-line, .hero-copy, .hero-actions .btn', {
        opacity: 0,
        y: 18,
        duration: .72,
        ease: 'power3.out',
        stagger: .055,
        delay: .12
      });

      gsap.from('.hero-visual', {
        opacity: 0,
        y: 22,
        scale: .98,
        duration: .9,
        ease: 'power3.out',
        delay: .22
      });

      if(window.ScrollTrigger){
        gsap.utils.toArray('.project-card, .xp-card, .method-card, .metric').forEach((item, index)=>{
          gsap.from(item, {
            scrollTrigger: {
              trigger: item,
              start: 'top 88%',
              once: true
            },
            opacity: 0,
            y: 24,
            duration: .62,
            ease: 'power3.out',
            delay: (index % 3) * .05
          });
        });

        gsap.to('.hero-portrait-img', {
          scrollTrigger: {
            trigger: '.hero',
            start: 'top top',
            end: 'bottom top',
            scrub: .8
          },
          y: -16,
          ease: 'none'
        });

        gsap.from('.culture-world__intro, .culture-world__planet, .world-dot, .culture-world__console, .culture-world__gallery', {
          scrollTrigger: {
            trigger: '.culture-world',
            start: 'top 78%',
            once: true
          },
          opacity: 0,
          y: 28,
          scale: .96,
          duration: .75,
          ease: 'power3.out',
          stagger: .07
        });

        gsap.utils.toArray('.media-card').forEach((card)=>{
          gsap.from(card, {
            scrollTrigger: {
              trigger: card,
              start: 'top 86%',
              once: true
            },
            opacity: 0,
            y: 34,
            rotateX: 6,
            duration: .72,
            ease: 'power3.out'
          });
        });
      }
    })();

    // Planetário cultural: o globo controla todos os hobbies
    (function(){
      const root = document.querySelector('.culture-world');
      const planet = document.getElementById('culturePlanet');
      const gallery = document.getElementById('worldGallery');
      const buttons = Array.from(document.querySelectorAll('.world-dot'));
      const kicker = document.getElementById('worldKicker');
      const title = document.getElementById('worldTitle');
      const text = document.getElementById('worldText');
      const signalA = document.getElementById('worldSignalA');
      const signalB = document.getElementById('worldSignalB');
      const feature = document.getElementById('worldFeature');
      const featureImg = document.getElementById('worldFeatureImg');
      const featureMeta = document.getElementById('worldFeatureMeta');
      const featureTitle = document.getElementById('worldFeatureTitle');
      const featureText = document.getElementById('worldFeatureText');
      if(!root || !planet || !gallery || !feature || !buttons.length) return;

      const worlds = {
        movies: {
          className: 'is-movies',
          kicker: 'Cinema orbit',
          title: 'Favorite movies',
          text: 'Stories that shaped my taste for rhythm, atmosphere, mythology and memorable scenes.',
          signalA: 'Narrative pacing',
          signalB: 'Visual atmosphere',
          items: [
            { title: 'The Lord of the Rings', meta: 'Epic fantasy', desc: 'Epic battles, unforgettable soundtrack: cinema at its peak.', img: '{{ asset('movies/lord.jpeg') }}', pos: 'center center' },
            { title: 'Matrix', meta: 'Cyberpunk philosophy', desc: 'A mind-blowing 1999 classic that changed pop culture and made technology feel mythological.', img: '{{ asset('movies/matrix.jpg') }}', pos: 'center center' },
            { title: 'Star Wars', meta: 'Sci-fi mythology', desc: 'A mythology that shaped generations, mixing adventure, archetypes, politics and wonder.', img: '{{ asset('movies/sw.jpeg') }}', pos: 'center 42%' },
            { title: 'Planet of the Apes', meta: 'Character-driven trilogy', desc: 'Grounded, intense and emotional: a consistent trilogy about evolution, empathy and conflict.', img: '{{ asset('movies/apes_1.jpg') }}', pos: 'center 38%' },
          ]
        },
        games: {
          className: 'is-games',
          kicker: 'Open-world layer',
          title: 'Favorite games',
          text: 'Games are systems with rules, feedback, agency and discovery: exactly the kind of thinking useful in product work.',
          signalA: 'Systems thinking',
          signalB: 'Feedback loops',
          items: [
            { title: 'Skyrim', meta: 'Exploration and agency', desc: 'A world that rewards curiosity, side quests and self-directed discovery.', img: '{{ asset('games/skyrim.jpg') }}', pos: 'center 34%' },
            { title: 'Fallout', meta: 'Choices and consequences', desc: 'Systems, factions and tradeoffs that make every decision feel connected to the world.', img: '{{ asset('games/fallout.jpg') }}', pos: 'center 40%' },
            { title: 'Pokemon', meta: 'Simple mechanics, deep strategy', desc: 'Readable rules, collection loops and progression that prove simple UX can still be deep.', img: '{{ asset('games/pokemon.jpg') }}', pos: 'center center' },
            { title: 'Red Dead Redemption 2', meta: 'World detail and immersion', desc: 'A benchmark for atmosphere, pacing and tiny interactions that make a product feel alive.', img: '{{ asset('games/rdr.webp') }}', pos: 'center 42%' },
          ]
        },
        books: {
          className: 'is-books',
          kicker: 'Library hemisphere',
          title: 'Favorite books',
          text: 'Books train patience, structure, worldbuilding and the ability to hold complex context.',
          signalA: 'Deep context',
          signalB: 'Worldbuilding',
          items: [
            { title: 'Harry Potter', meta: 'Consistent magical world', desc: 'A clear example of world rules, recurring patterns and emotional long-form payoff.', img: '{{ asset('books/harrypotter.jpg') }}', pos: 'center center' },
            { title: 'Narnia', meta: 'Classic fantasy', desc: 'Simple, symbolic storytelling with a strong sense of place and discovery.', img: '{{ asset('books/narnia.jpeg') }}', pos: 'center 38%' },
            { title: 'A Song of Ice and Fire', meta: 'Political complexity', desc: 'Dense context, competing incentives and consequences that make every system feel fragile.', img: '{{ asset('books/got.jpg') }}', pos: 'center 32%' },
            { title: 'The Liveship Traders', meta: 'Adventure and myth', desc: 'Character arcs, maritime atmosphere and myth layered into a long-form narrative.', img: '{{ asset('books/navio.jpg') }}', pos: 'center center' },
          ]
        },
        writing: {
          className: 'is-writing',
          kicker: 'Worldbuilding core',
          title: 'Writing projects',
          text: 'Writing my own worlds sharpens clarity, structure, emotional stakes and long-form problem solving.',
          signalA: 'Creative structure',
          signalB: 'Long-form ownership',
          items: [
            { title: 'Daimon', meta: 'Psychological thriller', desc: 'A darker story focused on tension, identity and the cost of hidden forces.', img: '{{ asset('img/Daimon.png') }}', pos: 'center center' },
            { title: 'A Ordem', meta: 'Futuristic dystopia', desc: 'A futuristic setting about control, belief and the systems people build to survive.', img: '{{ asset('img/aordem.jpeg') }}', pos: 'center 40%' },
            { title: 'Revolução das Memórias', meta: 'Modern fantasy', desc: 'Fantasy built around memory, mystery and the emotional weight of lost histories.', img: '{{ asset('img/CasteloBruxo.png') }}', pos: 'center center' },
            { title: 'Terras de Ninguém', meta: 'Steampunk western', desc: 'A steampunk western mood with conflict, frontier tension and rough-edged worldbuilding.', img: '{{ asset('img/capawestern.jpeg') }}', pos: 'center 35%' },
          ]
        }
      };

      const worldClassNames = Object.values(worlds).map(world => world.className);
      let orbitFrame = null;
      let orbitStartedAt = performance.now();
      let activeWorldKey = 'movies';
      let activeItemIndex = null;
      let featureTimer = null;

      function positionSatellites(now = performance.now()){
        const cards = Array.from(gallery.querySelectorAll('.world-card'));
        if(!cards.length) return;
        const rect = gallery.getBoundingClientRect();
        const radiusX = Math.max(142, Math.min(rect.width * .38, 270));
        const radiusY = Math.max(72, Math.min(rect.height * .23, 150));
        const elapsed = reduceMotion ? 0 : now - orbitStartedAt;

        cards.forEach((card, index) => {
          const baseAngle = Number(card.dataset.angle || 0);
          const angle = (baseAngle + elapsed * .018) * Math.PI / 180;
          const x = Math.cos(angle) * radiusX;
          const y = Math.sin(angle) * radiusY;
          const depth = (Math.sin(angle) + 1) / 2;
          const selectedBoost = activeItemIndex !== null && Number(card.dataset.index) === activeItemIndex ? .08 : 0;
          const scale = .84 + depth * .22 + selectedBoost;
          card.style.transform = `translate(calc(-50% + ${x}px), calc(-50% + ${y}px)) scale(${scale})`;
          card.style.zIndex = String(8 + Math.round(depth * 8));
          card.style.opacity = String(.74 + depth * .24);
        });
      }

      function orbitLoop(now){
        positionSatellites(now);
        orbitFrame = requestAnimationFrame(orbitLoop);
      }

      function startOrbit(){
        if(reduceMotion || orbitFrame !== null) {
          positionSatellites();
          return;
        }
        orbitStartedAt = performance.now();
        orbitFrame = requestAnimationFrame(orbitLoop);
      }

      function renderGallery(worldKey){
        const world = worlds[worldKey];
        gallery.innerHTML = world.items.map((item, index) => `
          <button class="world-card" type="button" style="--i:${index}; --img-pos:${item.pos || 'center center'}" data-angle="${index * 90}" data-index="${index}" aria-label="${item.title}">
            <img src="${item.img}" alt="${item.title}" loading="lazy" decoding="async">
            <div>
              <span>${item.meta}</span>
              <h4>${item.title}</h4>
            </div>
          </button>
        `).join('');

        gallery.querySelectorAll('.world-card').forEach(card => {
          card.addEventListener('click', () => updateFeatured(Number(card.dataset.index || 0)));
        });
      }

      function clearFeaturedState(){
        root.classList.remove('has-feature');
        activeItemIndex = null;
        gallery.querySelectorAll('.world-card').forEach(card => {
          card.classList.remove('is-selected');
          card.setAttribute('aria-pressed', 'false');
        });
        positionSatellites();
      }

      function hideFeatured(animate = true){
        clearTimeout(featureTimer);
        if(animate && window.gsap && !reduceMotion && root.classList.contains('has-feature')){
          gsap.killTweensOf(feature);
          gsap.to(feature, {
            opacity: 0,
            scale: .96,
            duration: 1.15,
            ease: 'power2.out',
            onComplete: () => {
              clearFeaturedState();
              feature.style.opacity = '';
              feature.style.transform = '';
            }
          });
          return;
        }

        clearFeaturedState();
      }

      function updateFeatured(index = 0){
        const world = worlds[activeWorldKey] || worlds.movies;
        const item = world.items[index] || world.items[0];
        activeItemIndex = index;
        clearTimeout(featureTimer);
        featureImg.src = item.img;
        featureImg.alt = item.title;
        featureImg.style.objectPosition = item.pos || 'center center';
        featureMeta.textContent = item.meta;
        featureTitle.textContent = item.title;
        featureText.textContent = item.desc;
        root.classList.add('has-feature');

        gallery.querySelectorAll('.world-card').forEach(card => {
          const active = Number(card.dataset.index) === activeItemIndex;
          card.classList.toggle('is-selected', active);
          card.setAttribute('aria-pressed', String(active));
        });

        if(window.gsap && !reduceMotion){
          gsap.killTweensOf(feature);
          gsap.fromTo(feature, { scale: .94, opacity: .72 }, {
            scale: 1,
            opacity: 1,
            duration: .35,
            ease: 'power3.out'
          });
        }

        positionSatellites();
        featureTimer = setTimeout(hideFeatured, 4300);
      }

      function activateWorld(worldKey, focus = false){
        const world = worlds[worldKey] || worlds.movies;
        activeWorldKey = worldKey;
        activeItemIndex = null;
        clearTimeout(featureTimer);
        hideFeatured(false);
        root.classList.remove(...worldClassNames);
        root.classList.add(world.className);
        planet.dataset.world = worldKey;
        kicker.textContent = world.kicker;
        title.textContent = world.title;
        text.textContent = world.text;
        signalA.textContent = world.signalA;
        signalB.textContent = world.signalB;
        renderGallery(worldKey);
        positionSatellites();

        buttons.forEach(button => {
          const active = button.dataset.world === worldKey;
          button.classList.toggle('is-active', active);
          button.setAttribute('aria-selected', String(active));
          button.tabIndex = active ? 0 : -1;
          if(active && focus) button.focus();
        });

        if(window.gsap && !reduceMotion){
          gsap.fromTo('.world-card', { filter: 'blur(8px)' }, {
            opacity: 1,
            filter: 'blur(0px)',
            duration: .5,
            ease: 'power3.out',
            stagger: .06
          });
        }
      }

      buttons.forEach((button, index) => {
        button.addEventListener('click', () => activateWorld(button.dataset.world));
        button.addEventListener('keydown', event => {
          const last = buttons.length - 1;
          let next = index;
          if(event.key === 'ArrowRight' || event.key === 'ArrowDown') next = index === last ? 0 : index + 1;
          else if(event.key === 'ArrowLeft' || event.key === 'ArrowUp') next = index === 0 ? last : index - 1;
          else if(event.key === 'Home') next = 0;
          else if(event.key === 'End') next = last;
          else return;
          event.preventDefault();
          activateWorld(buttons[next].dataset.world, true);
        });
      });

      root.addEventListener('pointermove', event => {
        if(reduceMotion) return;
        const rect = root.getBoundingClientRect();
        const x = ((event.clientX - rect.left) / rect.width - .5) * 18;
        const y = ((event.clientY - rect.top) / rect.height - .5) * 18;
        root.style.setProperty('--planet-x', `${x}px`);
        root.style.setProperty('--planet-y', `${y}px`);
      }, { passive: true });

      window.addEventListener('resize', () => positionSatellites(), { passive: true });
      activateWorld('movies');
      startOrbit();
    })();

    // Matrix rain — fundo da coluna de texto do hero (não nos botões)
    (function(){
      const canvas = document.getElementById('hero-matrix');
      if(!canvas || reduceMotion) return;
      const ctx = canvas.getContext('2d');
      const parent = canvas.parentElement;
      if(!parent) return;
      let fontSize = 13;
      let cols = 0;
      let drops = [];
      function resize(){
        const r = parent.getBoundingClientRect();
        canvas.width = Math.max(1, Math.floor(r.width));
        canvas.height = Math.max(1, Math.floor(r.height));
        cols = Math.floor(canvas.width / fontSize);
        drops = Array.from({ length: cols }, () => Math.floor(Math.random() * -48));
      }
      window.addEventListener('resize', resize, { passive: true });
      resize();
      if('ResizeObserver' in window){
        const ro = new ResizeObserver(() => resize());
        ro.observe(parent);
      }
      const chars = '01<>[]{}/*+=-_|$#@Φλ※ツ';
      (function draw(){
        ctx.fillStyle = 'rgba(8, 10, 13, 0.12)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = 'rgba(0, 255, 163, 0.42)';
        ctx.font = fontSize + 'px monospace';
        drops.forEach((y, i) => {
          const t = chars[Math.floor(Math.random() * chars.length)];
          const x = i * fontSize;
          ctx.fillText(t, x, y * fontSize);
          if(y * fontSize > canvas.height && Math.random() > 0.975) drops[i] = 0;
          drops[i]++;
        });
        requestAnimationFrame(draw);
      })();
    })();

    // Tilt leve só na foto de perfil
    (function(){
      const wrap = document.querySelector('.hero-visual.portrait-wrap');
      if(!wrap || reduceMotion) return;
      const strength = 10;
      wrap.addEventListener('mousemove', (e)=>{
        const r = wrap.getBoundingClientRect();
        const x = e.clientX - r.left, y = e.clientY - r.top;
        const rx = ((y/r.height)-.5)*-2*strength;
        const ry = ((x/r.width)-.5)* 2*strength;
        wrap.style.transform = `perspective(700px) rotateX(${rx}deg) rotateY(${ry}deg)`;
      });
      wrap.addEventListener('mouseleave', ()=> wrap.style.transform = 'perspective(700px)');
    })();

  </script>

  <!-- CSS ----------------------------------------------------------------->
  <style>
    :root {
      --bg: #080a0d;
      --panel: #10151c;
      --fg: #eaeaf0;
      --muted: #b6b6c2;
      --glass: rgba(13, 18, 26, .72);
      --stroke: rgba(180, 255, 227, .13);
      --accentA: #7c5cff;
      --accentB: #00ffa3;
      --accentC: #ffcf5c;
      --color-surface: rgba(13, 18, 26, .72);
      --color-surface-strong: rgba(5, 8, 11, .72);
      --color-border: rgba(180, 255, 227, .13);
      --space-1: .25rem;
      --space-2: .5rem;
      --space-3: .75rem;
      --space-4: 1rem;
      --space-6: 1.5rem;
      --space-8: 2rem;
      --space-12: 3rem;
      --space-16: 4rem;
      --text-display: clamp(2.35rem, 5vw, 4.45rem);
      --text-h2: clamp(1.8rem, 3.6vw, 3.2rem);
      --text-body: clamp(1rem, 1vw + .5rem, 1.12rem);
      --radius: 1.1rem;
      --radius-sm: .7rem;
      --radius-md: .9rem;
      --radius-lg: 1.1rem;
      --radius-pill: 999px;
      --shadow:
        0 8px 18px rgba(0, 0, 0, .22),
        0 18px 42px rgba(0, 0, 0, .28),
        0 34px 80px rgba(0, 0, 0, .18);
      --shadow-accent:
        0 6px 18px rgba(0, 255, 163, .16),
        0 14px 42px rgba(0, 255, 163, .1);
      --ease-out: cubic-bezier(.16, 1, .3, 1);
    }

    html,
    body {
      background: var(--bg);
      color: var(--fg);
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial;
      scroll-behavior: smooth;
    }

    .container {
      position: relative;
      z-index: 2
    }

    .skip-link {
      position: fixed;
      top: .75rem;
      left: .75rem;
      z-index: 9999;
      transform: translateY(-150%);
      padding: .65rem .9rem;
      border-radius: .7rem;
      background: var(--accentB);
      color: #061015;
      font-weight: 900;
      text-decoration: none;
      transition: transform .2s ease;
    }

    .skip-link:focus {
      transform: translateY(0);
    }

    :where(a, button, .btn, [tabindex]):focus-visible {
      outline: 3px solid rgba(0, 255, 163, .78);
      outline-offset: 4px;
      box-shadow: 0 0 0 6px rgba(0, 255, 163, .12);
    }

    .text-muted-200 {
      color: var(--muted) !important
    }

    .text-muted-300 {
      color: #9aa0ab !important
    }

    .bg-grid {
      position: fixed;
      inset: 0;
      z-index: 0;
      background-image:
        linear-gradient(rgba(0, 255, 163, .045) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 255, 163, .045) 1px, transparent 1px);
      background-size: 42px 42px;
      mask-image: linear-gradient(to bottom, rgba(0,0,0,.88), rgba(0,0,0,.2));
    }

    .cursor-spotlight {
      --x: 50vw;
      --y: 24vh;
      position: fixed;
      inset: 0;
      z-index: 1;
      pointer-events: none;
      background: radial-gradient(420px circle at var(--x) var(--y), rgba(0, 255, 163, .105), transparent 54%);
      mix-blend-mode: screen;
      opacity: .8;
    }

    .bg-blur-1,
    .bg-blur-2 {
      position: fixed;
      filter: blur(70px);
      opacity: .24;
      z-index: 1;
      pointer-events: none;
    }

    .bg-blur-1 {
      width: 48vw;
      height: 32vh;
      background: linear-gradient(90deg, rgba(124, 92, 255, .8), rgba(0, 255, 163, .35));
      top: 10%;
      left: -6%;
      transform: rotate(-12deg);
    }

    .bg-blur-2 {
      width: 42vw;
      height: 28vh;
      background: linear-gradient(45deg, rgba(0, 255, 163, .55), rgba(255, 207, 92, .28));
      bottom: 8%;
      right: -6%;
      transform: rotate(16deg);
    }

    .nav-glass {
      background: rgba(8, 10, 13, .62);
      backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--stroke);
      transition: background .25s ease, box-shadow .25s ease, border-color .25s ease;
    }

    .nav-glass.is-scrolled {
      background: rgba(8, 10, 13, .9);
      border-color: rgba(0, 255, 163, .18);
      box-shadow: 0 10px 30px rgba(0, 0, 0, .28);
    }

    .navbar-brand {
      letter-spacing: .02em;
    }

    .nav-link {
      position: relative;
      font-weight: 700;
    }

    .nav-link::after {
      content: "";
      position: absolute;
      left: .5rem;
      right: .5rem;
      bottom: .2rem;
      height: 2px;
      background: var(--accentB);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform .2s ease;
    }

    .nav-link:hover::after,
    .nav-link:focus::after {
      transform: scaleX(1);
    }

    .nav-link--cta {
      color: #061015 !important;
      background: var(--accentB);
      border-radius: 999px;
      padding-left: .9rem !important;
      padding-right: .9rem !important;
      box-shadow: 0 6px 18px rgba(0, 255, 163, .16), 0 12px 34px rgba(0, 0, 0, .22);
    }

    .nav-link--cta::after {
      display: none;
    }

    .hero {
      min-height: auto;
      padding-top: 6rem;
      padding-bottom: 2rem;
    }

    @media (min-width: 992px) {
      .hero {
        min-height: min(88vh, 820px);
        padding-top: 6.25rem;
        padding-bottom: 2.25rem;
      }
    }

    .hero--clean .hero-copy-col {
      position: relative;
      max-width: 36rem;
      isolation: isolate;
    }

    .hero-matrix-canvas {
      position: absolute;
      inset: 0;
      z-index: 0;
      width: 100%;
      height: 100%;
      min-height: 100%;
      opacity: 1;
      pointer-events: none;
      mask-image: linear-gradient(90deg, rgba(0, 0, 0, 0.55) 0%, rgba(0, 0, 0, 0.22) 55%, transparent 100%);
      -webkit-mask-image: linear-gradient(90deg, rgba(0, 0, 0, 0.55) 0%, rgba(0, 0, 0, 0.22) 55%, transparent 100%);
    }

    .hero-copy-inner {
      position: relative;
      z-index: 1;
    }

    .hero-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: .55rem;
      margin: 0 0 1.25rem;
      padding: 0;
      border: none;
      background: none;
      color: rgba(223, 255, 238, .88);
      font-size: .8rem;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
    }

    .hero-stack-line {
      margin: .75rem 0 0;
      font-size: .88rem;
      font-weight: 600;
      letter-spacing: .02em;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: .65rem;
    }

    .hero-visual-col {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    @media (min-width: 992px) {
      .hero-visual-col {
        align-items: center;
        padding-left: clamp(0.25rem, 2vw, 1.25rem);
      }
    }

    .hero-visual {
      position: relative;
      width: 100%;
      max-width: min(100%, 440px);
      margin: 0 auto;
    }

    @media (min-width: 992px) {
      .hero-visual {
        max-width: min(460px, 38vw);
      }
    }

    .hero-visual__photo-wrap {
      position: relative;
      width: 100%;
      overflow: hidden;
      border-radius: 0.2rem;
    }

    .hero-visual__photo-wrap::after {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      height: 42%;
      background: linear-gradient(to top, var(--bg) 0%, rgba(8, 10, 13, 0.45) 38%, transparent 100%);
      pointer-events: none;
    }

    .hero-portrait-img {
      display: block;
      width: 100%;
      height: auto;
      max-height: min(68vh, 600px);
      object-fit: cover;
      object-position: center 20%;
      filter: saturate(1.03) contrast(1.04);
      pointer-events: none;
      user-select: none;
    }

    .hero-visual__caption {
      position: relative;
      z-index: 2;
      margin: 0.85rem 0 0;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: .5rem;
      font-size: .8rem;
      font-weight: 700;
      color: var(--muted);
    }

    .hero-visual__flag {
      font-size: 1rem;
      line-height: 1;
    }

    .hero-ticker {
      position: relative;
      z-index: 2;
      overflow: hidden;
      margin: 0 calc(-1 * var(--bs-gutter-x, .75rem)) 0;
      padding: .75rem 0;
      background: var(--accentB);
      border-top: 1px solid rgba(0, 0, 0, .08);
      border-bottom: 1px solid rgba(0, 0, 0, .08);
    }

    @media (min-width: 576px) {
      .hero-ticker {
        margin-left: calc(50% - 50vw);
        margin-right: calc(50% - 50vw);
        width: 100vw;
        max-width: 100vw;
      }
    }

    .hero-ticker__track {
      display: flex;
      width: max-content;
      gap: 2.25rem;
      animation: heroTickerScroll 32s linear infinite;
      padding-left: 2rem;
    }

    .hero-ticker__track span {
      flex: 0 0 auto;
      color: #061015;
      font-size: .78rem;
      font-weight: 800;
      letter-spacing: .06em;
      text-transform: uppercase;
      white-space: nowrap;
    }

    .hero-ticker__track span::after {
      content: "✦";
      margin-left: 2.25rem;
      font-size: .55rem;
      opacity: .55;
      vertical-align: middle;
    }

    @keyframes heroTickerScroll {
      to {
        transform: translateX(-50%);
      }
    }

    .status-dot {
      width: .55rem;
      height: .55rem;
      border-radius: 50%;
      background: var(--accentB);
      box-shadow: 0 0 0 .35rem rgba(0, 255, 163, .12), 0 0 18px rgba(0, 255, 163, .75);
    }

    .hero-title {
      font-family: 'Ultra', serif;
      font-size: var(--text-display);
      line-height: 1.02;
      background: linear-gradient(90deg, var(--accentB), #a2ff8f, #c6a3ff, var(--accentA));
      background-size: 300% 300%;
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      animation: moveGradient 9s ease infinite;
      text-shadow: 0 0 30px rgba(100, 255, 218, .08);
    }

    .hero-copy {
      max-width: 42ch;
      margin: 1rem 0 0;
      color: #c5ced9;
      font-size: clamp(0.95rem, 0.35vw + 0.88rem, 1.05rem);
      line-height: 1.55;
    }

    .hero-inline-link {
      color: var(--accentB);
      font-weight: 800;
      text-decoration: none;
      text-underline-offset: 0.18em;
    }

    .hero-inline-link:hover {
      text-decoration: underline;
      color: #b4ffe0;
    }

    @media (min-width: 992px) {
      .hero-copy {
        max-width: 40ch;
      }
    }

    @keyframes moveGradient {

      0%,
      100% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }
    }

    .skill-pill {
      background: rgba(100, 255, 218, .12);
      border: 1px solid rgba(100, 255, 218, .25);
      color: #c6fff0;
      padding: .45rem .7rem;
      border-radius: 999px;
      font-weight: 700;
      font-size: .9rem;
      transition: transform .18s ease, border-color .18s ease, background .18s ease;
    }

    .skill-pill:hover {
      transform: translateY(-2px);
      border-color: rgba(0, 255, 163, .5);
      background: rgba(0, 255, 163, .18);
    }

    .hero-proof {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: .7rem;
      max-width: 620px;
    }

    .hero-proof div {
      padding: .85rem;
      border-radius: .9rem;
      border: 1px solid rgba(255, 255, 255, .1);
      background: rgba(255, 255, 255, .045);
      box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .025);
    }

    .hero-proof strong {
      display: block;
      color: #fff;
      font-size: clamp(1rem, 1.7vw, 1.25rem);
      line-height: 1.1;
    }

    .hero-proof span {
      display: block;
      margin-top: .25rem;
      color: var(--muted);
      font-size: .82rem;
      line-height: 1.35;
    }

    .social-wrapper {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: .7rem;
      padding: 1rem 1.2rem;
      border-radius: calc(var(--radius) + .4rem);
      isolation: isolate;
      overflow: hidden;
      background: rgba(255, 255, 255, .03);
      border: 1px solid var(--stroke);
    }

    .matrix-canvas {
      position: absolute;
      inset: 0;
      z-index: 0;
      opacity: .18;
      pointer-events: none;
      transition: opacity .25s ease;
    }

    .social-wrapper:hover .matrix-canvas,
    .social-wrapper:focus-within .matrix-canvas {
      opacity: .42;
    }

    .btn-cta {
      position: relative;
      z-index: 1;
      background: linear-gradient(90deg, var(--accentB), var(--accentA));
      border: none;
      color: #061015;
      font-weight: 900;
      padding: .85rem 1.1rem;
      border-radius: .9rem;
      box-shadow: var(--shadow-accent);
      transition: transform .18s var(--ease-out), filter .18s ease, box-shadow .18s ease;
    }

    .btn-cta:hover {
      filter: brightness(1.04);
      transform: translateY(-2px);
    }

    .btn-glass {
      position: relative;
      z-index: 1;
      background: rgba(255, 255, 255, .06);
      border: 1px solid rgba(255, 255, 255, .16);
      color: var(--fg);
      font-weight: 800;
      padding: .75rem 1rem;
      border-radius: .9rem;
      transition: transform .18s ease, background .18s ease, border-color .18s ease;
      backdrop-filter: blur(6px);
    }

    .btn-quiet {
      background: rgba(255, 255, 255, .035);
    }

    .btn-glass:hover {
      transform: translateY(-1px);
      background: rgba(255, 255, 255, .12);
      border-color: rgba(255, 255, 255, .28);
      color: #fff;
    }

    .terminal-card {
      max-width: 560px;
      overflow: hidden;
      border-radius: .95rem;
      border: 1px solid rgba(0, 255, 163, .18);
      background: rgba(5, 8, 11, .72);
      box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .035), 0 18px 44px rgba(0, 0, 0, .35);
      backdrop-filter: blur(12px);
    }

    .terminal-card__bar {
      display: flex;
      gap: .45rem;
      padding: .72rem .85rem;
      border-bottom: 1px solid rgba(255, 255, 255, .08);
      background: rgba(255, 255, 255, .045);
    }

    .terminal-card__bar span {
      width: .65rem;
      height: .65rem;
      border-radius: 50%;
      background: #ff5f57;
    }

    .terminal-card__bar span:nth-child(2) {
      background: #ffbd2e;
    }

    .terminal-card__bar span:nth-child(3) {
      background: #28c840;
    }

    .terminal-card__body {
      padding: .95rem 1rem 1.05rem;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      font-size: .9rem;
      color: #dfffee;
    }

    .terminal-card__body p {
      margin: 0;
    }

    .terminal-card__body p + p {
      margin-top: .4rem;
    }

    .terminal-muted {
      color: var(--accentB);
    }

    .terminal-key {
      color: var(--accentC);
      margin-right: .55rem;
    }

    .terminal-caret {
      display: inline-block;
      width: .55rem;
      height: 1rem;
      margin-left: .15rem;
      vertical-align: -2px;
      background: rgba(0, 255, 163, .85);
      animation: caretBlink 1s steps(1) infinite;
    }

    @keyframes caretBlink {
      50% { opacity: 0; }
    }

    .portrait-wrap {
      transform-style: preserve-3d;
      transition: transform .25s ease;
    }

    .hero-lab {
      position: relative;
      min-height: clamp(460px, 58vw, 620px);
      display: grid;
      align-items: center;
      isolation: isolate;
    }

    .hero-lab::before {
      content: "";
      position: absolute;
      inset: 8% 0 4% 12%;
      z-index: -2;
      border-radius: 2rem;
      background:
        linear-gradient(135deg, rgba(0, 255, 163, .16), transparent 42%),
        linear-gradient(315deg, rgba(124, 92, 255, .22), transparent 52%),
        rgba(255, 255, 255, .035);
      border: 1px solid rgba(255, 255, 255, .1);
      transform: skewY(-5deg) rotate(-2deg);
      box-shadow: var(--shadow);
    }

    .hero-lab::after {
      content: "";
      position: absolute;
      inset: 20% 10% 12% 0;
      z-index: -3;
      background-image:
        linear-gradient(rgba(0, 255, 163, .09) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 255, 163, .09) 1px, transparent 1px);
      background-size: 28px 28px;
      opacity: .34;
      transform: rotate(4deg);
      mask-image: radial-gradient(circle, #000 42%, transparent 72%);
    }

    .hero-lab__panel {
      position: relative;
      border: 1px solid rgba(255, 255, 255, .12);
      background: rgba(5, 8, 11, .62);
      box-shadow: var(--shadow);
      backdrop-filter: blur(18px);
    }

    .hero-lab__panel--portrait {
      width: min(88%, 430px);
      margin-left: auto;
      margin-right: 6%;
      padding: .65rem;
      border-radius: 2rem;
      transform: rotate(2deg);
      clip-path: polygon(0 0, 92% 0, 100% 12%, 100% 100%, 8% 100%, 0 88%);
    }

    .portrait-frame {
      position: relative;
      overflow: hidden;
      min-height: clamp(420px, 52vw, 560px);
      border-radius: 1.55rem;
      background:
        radial-gradient(circle at 50% 20%, rgba(0, 255, 163, .18), transparent 38%),
        linear-gradient(180deg, rgba(255, 255, 255, .08), rgba(255, 255, 255, .01));
    }

    .portrait-frame::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, transparent 44%, rgba(5, 8, 11, .84));
      z-index: 3;
      pointer-events: none;
    }

    .portrait-img {
      display: block;
      width: 100%;
      height: 100%;
      min-height: clamp(420px, 52vw, 560px);
      object-fit: cover;
      object-position: center top;
      position: relative;
      z-index: 2;
      filter: saturate(1.02) contrast(1.04) drop-shadow(0 18px 34px rgba(0, 0, 0, .48));
      transform: scale(1.04);
    }

    .portrait-glow {
      position: absolute;
      inset: auto 8% 5% 8%;
      height: 36%;
      border-radius: 50%;
      z-index: 1;
      background: radial-gradient(circle, rgba(0, 255, 163, .28), transparent 66%);
      animation: glowPulse 5.5s ease-in-out infinite;
    }

    .hero-lab__badge {
      position: absolute;
      z-index: 5;
      left: -1rem;
      bottom: 1.4rem;
      display: flex;
      align-items: center;
      gap: .65rem;
      padding: .65rem .85rem;
      border-radius: 1rem;
      border: 1px solid rgba(0, 255, 163, .24);
      background: rgba(5, 8, 11, .82);
      box-shadow: var(--shadow-accent);
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    }

    .hero-lab__badge span {
      display: grid;
      place-items: center;
      width: 2.2rem;
      height: 2.2rem;
      border-radius: .7rem;
      background: var(--accentB);
      color: #061015;
      font-weight: 900;
    }

    .hero-lab__badge strong {
      color: #fff;
      font-size: .9rem;
    }

    .hero-lab__panel--signal {
      position: absolute;
      right: 0;
      top: 12%;
      z-index: 4;
      width: min(58%, 270px);
      padding: .9rem;
      border-radius: 1.1rem;
      transform: rotate(-4deg);
    }

    .signal-line {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: .75rem;
      padding: .55rem .25rem;
      border-bottom: 1px solid rgba(255, 255, 255, .08);
      color: #dfffee;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      font-size: .8rem;
    }

    .signal-line:last-child {
      border-bottom: 0;
    }

    .signal-line span {
      color: var(--accentB);
      font-weight: 900;
    }

    @keyframes glowPulse {

      0%,
      100% {
        opacity: .6
      }

      50% {
        opacity: 1
      }
    }

    .stacks-icons {
      position: absolute;
      left: 4%;
      top: 12%;
      z-index: 5;
      display: grid;
      gap: .6rem;
      font-size: 1.25rem;
      color: #fff;
      opacity: .9;
    }

    .stacks-icons i {
      display: grid;
      place-items: center;
      width: 2.7rem;
      height: 2.7rem;
      border-radius: .85rem;
      border: 1px solid rgba(255, 255, 255, .12);
      background: rgba(5, 8, 11, .76);
      box-shadow: 0 10px 24px rgba(0, 0, 0, .3);
      backdrop-filter: blur(12px);
    }

    .glass {
      background: var(--glass);
      border: 1px solid var(--stroke);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      color: var(--fg);
      backdrop-filter: blur(18px);
    }

    .section-title {
      font-weight: 900;
      letter-spacing: .3px;
      margin-bottom: .8rem
    }

    .xp-eyebrow {
      text-transform: uppercase;
      letter-spacing: .14em;
      color: var(--accentB);
      font-size: .78rem;
      font-weight: 700;
    }

    .projects-section {
      padding: clamp(1.25rem, 4vw, 2.4rem);
      border-radius: var(--radius);
      border: 1px solid rgba(255, 255, 255, .09);
      background:
        linear-gradient(135deg, rgba(255, 255, 255, .055), rgba(255, 255, 255, .02)),
        rgba(13, 18, 26, .48);
      box-shadow: var(--shadow);
      backdrop-filter: blur(18px);
    }

    .project-grid {
      display: grid;
      grid-template-columns: minmax(0, 1.15fr) minmax(0, .85fr);
      gap: 1rem;
    }

    .project-card {
      position: relative;
      min-height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      gap: 1.25rem;
      padding: clamp(1rem, 2.6vw, 1.35rem);
      border-radius: var(--radius-md);
      border: 1px solid rgba(255, 255, 255, .1);
      background: rgba(5, 8, 11, .5);
      overflow: hidden;
      transition: transform .22s var(--ease-out), border-color .22s ease, background .22s ease;
    }

    .project-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(360px circle at 10% 0%, rgba(0, 255, 163, .14), transparent 58%);
      opacity: 0;
      transition: opacity .22s ease;
      pointer-events: none;
    }

    .project-card:hover {
      transform: translateY(-4px);
      border-color: rgba(0, 255, 163, .25);
      background: rgba(5, 8, 11, .66);
    }

    .project-card:hover::before {
      opacity: 1;
    }

    .project-card--featured {
      grid-row: span 2;
    }

    .project-card__tag {
      position: relative;
      margin: 0 0 .7rem;
      color: var(--accentB);
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      font-size: .78rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: .08em;
    }

    .project-card h3,
    .project-card p,
    .project-card ul,
    .project-card a {
      position: relative;
    }

    .project-card h3 {
      margin: 0;
      color: #fff;
      font-size: clamp(1.25rem, 2.2vw, 1.9rem);
      font-weight: 900;
      line-height: 1.12;
    }

    .project-card p:not(.project-card__tag) {
      margin: .75rem 0 0;
      color: var(--muted);
      line-height: 1.65;
    }

    .project-card__stack {
      display: flex;
      flex-wrap: wrap;
      gap: .45rem;
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .project-card__stack li {
      padding: .35rem .55rem;
      border-radius: var(--radius-pill);
      background: rgba(0, 255, 163, .1);
      border: 1px solid rgba(0, 255, 163, .16);
      color: #dfffee;
      font-size: .78rem;
      font-weight: 800;
    }

    .project-card__link {
      display: inline-flex;
      align-items: center;
      gap: .45rem;
      color: #dfffee;
      font-weight: 900;
      text-decoration: none;
    }

    .project-card__link:hover {
      color: var(--accentB);
    }

    .xp-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 1rem;
    }

    .xp-card {
      position: relative;
      padding: 1rem;
      border-radius: .9rem;
      border: 1px solid rgba(255, 255, 255, .14);
      background: rgba(255, 255, 255, .04);
      overflow: hidden;
      transition: transform .2s ease, border-color .2s ease, background .2s ease;
    }

    .xp-card::before,
    .metric::before {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(220px circle at var(--mx, 50%) var(--my, 50%), rgba(0, 255, 163, .14), transparent 44%);
      opacity: 0;
      transition: opacity .2s ease;
      pointer-events: none;
    }

    .xp-card:hover,
    .metric:hover {
      transform: translateY(-4px);
      border-color: rgba(0, 255, 163, .28);
      background: rgba(255, 255, 255, .06);
    }

    .xp-card:hover::before,
    .metric:hover::before {
      opacity: 1;
    }

    .xp-card__icon {
      display: inline-grid;
      place-items: center;
      width: 2.15rem;
      height: 2.15rem;
      margin-bottom: .85rem;
      border-radius: .7rem;
      color: var(--accentB);
      background: rgba(0, 255, 163, .1);
      border: 1px solid rgba(0, 255, 163, .18);
    }

    .xp-card h3 {
      font-size: 1rem;
      font-weight: 800;
      margin-bottom: .45rem;
      color: #fff;
    }

    .xp-card p {
      margin: 0;
      font-size: .93rem;
      line-height: 1.45;
      color: var(--muted);
    }

    .xp-recruiters {
      padding: 1rem;
      border-radius: .9rem;
      border: 1px dashed rgba(0, 255, 163, .45);
      background: rgba(0, 255, 163, .06);
    }

    .xp-recruiters__title {
      margin: 0 0 .6rem;
      font-size: 1rem;
      font-weight: 800;
    }

    .xp-recruiters__list {
      margin: 0;
      padding-left: 1rem;
      color: var(--fg);
    }

    .xp-recruiters__list li+li {
      margin-top: .25rem;
    }

    .metric {
      position: relative;
      overflow: hidden;
      padding: 1.1rem 1rem;
      text-align: center;
      border-radius: var(--radius)
    }

    .metric-number {
      display: block;
      font-size: 1.4rem;
      font-weight: 900
    }

    .metric-label {
      font-size: .92rem;
      color: var(--muted)
    }

    .method-section {
      display: grid;
      grid-template-columns: minmax(0, .86fr) minmax(0, 1.14fr);
      gap: clamp(1.5rem, 4vw, 3rem);
      align-items: start;
      padding: clamp(1.25rem, 3vw, 2rem);
      border: 1px solid rgba(255, 255, 255, .1);
      border-radius: var(--radius);
      background: linear-gradient(135deg, rgba(255, 255, 255, .055), rgba(255, 255, 255, .025));
      box-shadow: var(--shadow);
      backdrop-filter: blur(18px);
    }

    .method-grid {
      display: grid;
      gap: .9rem;
    }

    .method-card {
      position: relative;
      display: grid;
      grid-template-columns: auto minmax(0, 1fr);
      gap: .35rem 1rem;
      padding: 1rem;
      border-radius: .9rem;
      border: 1px solid rgba(0, 255, 163, .14);
      background: rgba(5, 8, 11, .52);
      overflow: hidden;
      transition: transform .2s ease, border-color .2s ease, background .2s ease;
    }

    .method-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(90deg, rgba(0, 255, 163, .12), transparent 42%);
      opacity: 0;
      transition: opacity .2s ease;
    }

    .method-card:hover {
      transform: translateX(4px);
      border-color: rgba(0, 255, 163, .28);
      background: rgba(5, 8, 11, .68);
    }

    .method-card:hover::before {
      opacity: 1;
    }

    .method-card span {
      position: relative;
      grid-row: span 2;
      display: grid;
      place-items: center;
      width: 2.25rem;
      height: 2.25rem;
      border-radius: .7rem;
      background: rgba(0, 255, 163, .12);
      color: var(--accentB);
      border: 1px solid rgba(0, 255, 163, .2);
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      font-weight: 900;
      font-size: .78rem;
    }

    .method-card h3,
    .method-card p {
      position: relative;
      margin: 0;
    }

    .method-card h3 {
      color: #fff;
      font-size: 1rem;
      font-weight: 900;
    }

    .method-card p {
      color: var(--muted);
      line-height: 1.55;
      font-size: .94rem;
    }

    .about-section {
      display: grid;
      grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr);
      gap: clamp(1.5rem, 4vw, 3rem);
      align-items: start;
      padding: clamp(1.25rem, 4vw, 2.2rem) 0;
      border-top: 1px solid rgba(255, 255, 255, .1);
      border-bottom: 1px solid rgba(255, 255, 255, .1);
    }

    .about-section__copy p {
      color: #d9dee8;
      line-height: 1.75;
    }

    .about-employer {
      margin-top: 1rem;
    }

    .about-employer__link {
      color: var(--accentB);
      font-weight: 800;
      text-decoration: none;
    }

    .about-employer__link:hover {
      text-decoration: underline;
      color: #b4ffe0;
    }

    .section-heading {
      text-align: center;
      max-width: 760px;
      margin-left: auto;
      margin-right: auto;
    }

    .section-heading h2 {
      margin: 0;
      font-size: clamp(2rem, 4vw, 3.2rem);
      font-weight: 900;
    }

    .section-heading p:not(.xp-eyebrow) {
      color: var(--muted);
      margin: .75rem auto 0;
      font-size: 1.05rem;
    }

    .dev-divider {
      display: grid;
      grid-template-columns: minmax(1rem, 1fr) auto minmax(1rem, 1fr);
      align-items: center;
      gap: 1rem;
      color: rgba(255, 255, 255, .52);
      font-size: .78rem;
    }

    .dev-divider span {
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(0, 255, 163, .28), transparent);
    }

    .dev-divider code {
      color: #c6fff0;
      white-space: normal;
      text-align: center;
    }

    .culture-world {
      --planet-x: 0px;
      --planet-y: 0px;
      position: relative;
      min-height: clamp(640px, 82vh, 820px);
      display: grid;
      grid-template-columns: minmax(250px, .66fr) minmax(460px, 1.22fr) minmax(280px, .62fr);
      grid-template-areas:
        "intro planet console"
        "nav planet console"
        "marquee marquee marquee";
      gap: clamp(.85rem, 2.4vw, 1.65rem);
      align-items: center;
      overflow: hidden;
      padding: clamp(1rem, 3.1vw, 2rem);
      border-radius: 1.5rem;
      border: 1px solid rgba(255, 255, 255, .12);
      background:
        radial-gradient(820px 420px at 48% 46%, rgba(67, 78, 190, .24), transparent 68%),
        linear-gradient(135deg, rgba(8, 9, 28, .98), rgba(17, 13, 45, .88));
      box-shadow: var(--shadow);
      isolation: isolate;
    }

    .culture-world__bg {
      position: absolute;
      inset: 0;
      z-index: -2;
      background-image:
        linear-gradient(rgba(0, 255, 163, .055) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 255, 163, .055) 1px, transparent 1px),
        radial-gradient(circle, rgba(255, 255, 255, .26) 1px, transparent 1px);
      background-size: 44px 44px, 44px 44px, 88px 88px;
      opacity: .26;
      animation: cultureGrid 26s linear infinite;
    }

    .culture-world__intro {
      grid-area: intro;
      position: relative;
      z-index: 4;
      align-self: end;
    }

    .culture-world__intro h2 {
      margin: 0;
      max-width: 7.6ch;
      color: #fff;
      font-size: clamp(2.5rem, 5.2vw, 5.3rem);
      font-weight: 900;
      line-height: .88;
    }

    .culture-world__intro p:not(.xp-eyebrow) {
      max-width: 34ch;
      margin: 1rem 0 0;
      color: #c7cfdf;
      line-height: 1.7;
    }

    .culture-world__planet {
      grid-area: planet;
      position: relative;
      min-height: clamp(500px, 55vw, 650px);
      display: grid;
      place-items: center;
      transform: translate3d(var(--planet-x), var(--planet-y), 0);
      transition: transform .18s ease-out;
    }

    .planet-sphere {
      position: relative;
      width: min(72%, 440px);
      aspect-ratio: 1;
      border-radius: 50%;
      overflow: hidden;
      background:
        radial-gradient(circle at 30% 22%, rgba(255, 255, 255, .45), transparent 12%),
        radial-gradient(circle at 45% 45%, rgba(0, 255, 163, .22), transparent 22%),
        radial-gradient(circle at 72% 68%, rgba(124, 92, 255, .46), transparent 20%),
        linear-gradient(135deg, #67fff0, #3944ff 38%, #141553 82%);
      box-shadow:
        inset -38px -28px 84px rgba(0, 0, 0, .55),
        inset 22px 20px 48px rgba(255, 255, 255, .16),
        0 28px 90px rgba(0, 0, 0, .5),
        0 0 80px rgba(0, 255, 163, .1);
      animation: planetSpin 22s linear infinite;
    }

    .planet-sphere::before,
    .planet-sphere::after,
    .planet-texture,
    .planet-shine {
      content: "";
      position: absolute;
      inset: 0;
      border-radius: 50%;
      pointer-events: none;
    }

    .planet-sphere::before {
      background:
        repeating-linear-gradient(78deg, transparent 0 22px, rgba(255, 255, 255, .13) 24px 32px, transparent 34px 58px);
      mix-blend-mode: screen;
      opacity: .58;
      animation: planetClouds 13s linear infinite;
    }

    .planet-sphere::after {
      background: radial-gradient(circle at 72% 34%, transparent 0 48%, rgba(0, 0, 0, .34) 76%);
    }

    .planet-texture {
      opacity: 0;
      transform: scale(.9) rotate(-8deg);
      transition: opacity .45s ease, transform .45s ease;
      mix-blend-mode: screen;
    }

    .planet-texture--movies {
      background:
        radial-gradient(ellipse at 35% 28%, rgba(255, 255, 255, .72), transparent 18%),
        radial-gradient(ellipse at 62% 68%, rgba(0, 255, 163, .38), transparent 18%);
    }

    .planet-texture--games {
      background:
        linear-gradient(90deg, transparent 0 48%, rgba(255, 207, 92, .42) 49% 51%, transparent 52%),
        linear-gradient(0deg, transparent 0 48%, rgba(255, 207, 92, .28) 49% 51%, transparent 52%);
    }

    .planet-texture--books {
      background:
        repeating-linear-gradient(18deg, rgba(255, 255, 255, .26) 0 5px, transparent 6px 24px),
        radial-gradient(circle at 45% 50%, rgba(255, 255, 255, .28), transparent 28%);
    }

    .planet-texture--writing {
      background:
        radial-gradient(circle at 28% 45%, rgba(255, 138, 216, .34), transparent 18%),
        repeating-linear-gradient(-22deg, transparent 0 24px, rgba(255, 255, 255, .24) 25px 28px);
    }

    .culture-world.is-movies .planet-texture--movies,
    .culture-world.is-games .planet-texture--games,
    .culture-world.is-books .planet-texture--books,
    .culture-world.is-writing .planet-texture--writing {
      opacity: 1;
      transform: scale(1) rotate(0);
    }

    .planet-shine {
      background: radial-gradient(circle at 31% 18%, rgba(255, 255, 255, .42), transparent 24%);
      z-index: 3;
    }

    .planet-orbit {
      position: absolute;
      width: min(92%, 620px);
      aspect-ratio: 1;
      border-radius: 50%;
      border: 1px solid rgba(255, 255, 255, .36);
      pointer-events: none;
    }

    .planet-orbit--a {
      transform: rotateX(68deg) rotateZ(-14deg);
      animation: orbitTurnA 18s linear infinite;
    }

    .planet-orbit--b {
      width: min(70%, 470px);
      border-color: rgba(0, 255, 163, .35);
      transform: rotateX(72deg) rotateZ(24deg);
      animation: orbitTurnB 24s linear infinite reverse;
    }

    .culture-world__nav {
      grid-area: nav;
      position: relative;
      z-index: 7;
      display: grid;
      gap: .7rem;
      align-self: start;
    }

    .world-dot {
      display: flex;
      align-items: center;
      gap: .6rem;
      width: max-content;
      min-width: 9rem;
      padding: .7rem .9rem;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, .16);
      background: rgba(5, 8, 11, .58);
      color: #f3fff9;
      font-weight: 900;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      box-shadow: 0 14px 34px rgba(0, 0, 0, .28);
      backdrop-filter: blur(14px);
      transition: transform .2s ease, border-color .2s ease, background .2s ease;
    }

    .world-dot:hover,
    .world-dot.is-active {
      transform: translateX(8px);
      border-color: rgba(0, 255, 163, .65);
      background: rgba(0, 255, 163, .12);
    }

    .world-dot i {
      color: var(--accentB);
    }

    .culture-world__console {
      grid-area: console;
      position: relative;
      z-index: 6;
      padding: 1rem;
      border-radius: 1.1rem;
      border: 1px solid rgba(255, 255, 255, .12);
      background: rgba(5, 8, 11, .56);
      box-shadow: 0 18px 42px rgba(0, 0, 0, .3);
      backdrop-filter: blur(14px);
    }

    .console-kicker {
      margin: 0 0 .45rem;
      color: var(--accentB);
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
      font-size: .78rem;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: .08em;
    }

    .culture-world__console h3 {
      margin: 0;
      color: #fff;
      font-size: clamp(1.35rem, 2.4vw, 2rem);
      font-weight: 900;
    }

    .culture-world__console p {
      color: var(--muted);
      line-height: 1.6;
    }

    .culture-world__console dl {
      display: grid;
      gap: .6rem;
      margin: .9rem 0 0;
    }

    .culture-world__console dt {
      color: var(--accentB);
      font-size: .72rem;
      text-transform: uppercase;
      letter-spacing: .08em;
      font-weight: 900;
    }

    .culture-world__console dd {
      margin: .15rem 0 0;
      color: #fff;
      font-weight: 800;
    }

    .culture-world__gallery {
      --satellite-radius: min(27vw, 270px);
      grid-area: planet;
      position: relative;
      z-index: 8;
      align-self: stretch;
      justify-self: stretch;
      min-height: clamp(500px, 55vw, 650px);
      pointer-events: none;
    }

    .culture-world__feature {
      grid-area: planet;
      position: relative;
      z-index: 18;
      justify-self: center;
      align-self: center;
      width: clamp(220px, 28vw, 350px);
      overflow: hidden;
      border-radius: 1.1rem;
      border: 1px solid rgba(0, 255, 163, .28);
      background: rgba(5, 8, 11, .72);
      box-shadow:
        0 24px 70px rgba(0, 0, 0, .5),
        0 0 0 1px rgba(255, 255, 255, .06) inset;
      backdrop-filter: blur(16px);
      pointer-events: none;
      opacity: 0;
      visibility: hidden;
      transform: scale(.94);
      transition: opacity 1.15s ease, transform 1.15s ease, visibility 0s linear 1.15s;
    }

    .culture-world.has-feature .culture-world__feature {
      opacity: 1;
      visibility: visible;
      transform: scale(1);
      transition-delay: 0s;
    }

    .culture-world__feature img {
      width: 100%;
      aspect-ratio: 16 / 10;
      object-fit: cover;
      object-position: center center;
      display: block;
      opacity: .92;
    }

    .culture-world__feature div {
      padding: .9rem;
      background:
        linear-gradient(180deg, rgba(5, 8, 11, .88), rgba(5, 8, 11, .96));
    }

    .culture-world__feature span {
      color: var(--accentB);
      font-size: .68rem;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: .08em;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    }

    .culture-world__feature h4 {
      margin: .3rem 0 .35rem;
      color: #fff;
      font-size: clamp(1.1rem, 2vw, 1.45rem);
      font-weight: 900;
      line-height: 1.08;
    }

    .culture-world__feature p {
      margin: 0;
      color: #cfd5e4;
      font-size: .88rem;
      line-height: 1.45;
    }

    .world-card {
      position: absolute;
      top: 50%;
      left: 50%;
      width: clamp(126px, 11.5vw, 162px);
      aspect-ratio: 4 / 3;
      overflow: hidden;
      min-height: 0;
      border-radius: .85rem;
      border: 1px solid rgba(255, 255, 255, .11);
      background: rgba(5, 8, 11, .62);
      box-shadow: 0 16px 38px rgba(0, 0, 0, .28);
      pointer-events: auto;
      transform: translate(-50%, -50%);
      will-change: transform;
      padding: 0;
      color: inherit;
      font: inherit;
      text-align: left;
      cursor: pointer;
      transition: border-color .25s ease, box-shadow .25s ease, filter .25s ease;
    }

    .world-card:hover,
    .world-card.is-selected {
      border-color: rgba(0, 255, 163, .72);
      box-shadow:
        0 18px 46px rgba(0, 0, 0, .38),
        0 0 26px rgba(0, 255, 163, .18);
      filter: saturate(1.08);
    }

    .world-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: var(--img-pos, center center);
      display: block;
      opacity: .72;
      transform: scale(1.01);
      transition: transform .35s ease, opacity .35s ease;
    }

    .world-card:hover img {
      opacity: .95;
      transform: scale(1.05);
    }

    .world-card div {
      position: absolute;
      inset: auto .58rem .55rem;
      z-index: 2;
    }

    .world-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, transparent 25%, rgba(0, 0, 0, .82));
    }

    .world-card span {
      color: var(--accentB);
      font-size: .58rem;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: .08em;
    }

    .world-card h4 {
      margin: .25rem 0 0;
      color: #fff;
      font-size: .78rem;
      font-weight: 900;
      line-height: 1.1;
    }

    .culture-world__marquee {
      grid-area: marquee;
      position: relative;
      z-index: 8;
      overflow: hidden;
      margin: 1rem calc(-1 * clamp(1.1rem, 4vw, 2.6rem)) calc(-1 * clamp(1.1rem, 4vw, 2.6rem));
      padding: .8rem 0;
      background: var(--accentB);
      mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent);
    }

    .culture-world__marquee div {
      display: flex;
      width: max-content;
      gap: 2rem;
      animation: cultureMarquee 22s linear infinite;
    }

    .culture-world__marquee span {
      color: #061015;
      font-size: .82rem;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: .08em;
    }

    @keyframes cultureGrid {
      to { transform: translate3d(44px, 44px, 0); }
    }

    @keyframes planetSpin {
      to { transform: rotate(360deg); }
    }

    @keyframes planetClouds {
      to { transform: translateX(72px) rotate(12deg); }
    }

    @keyframes orbitTurnA {
      to { transform: rotateX(68deg) rotateZ(346deg); }
    }

    @keyframes orbitTurnB {
      to { transform: rotateX(72deg) rotateZ(384deg); }
    }

    @keyframes cultureMarquee {
      to { transform: translateX(-50%); }
    }

    .favorites-shell {
      position: relative;
      overflow: hidden;
    }

    .favorites-shell::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(0, 255, 163, .08), transparent 38%, rgba(124, 92, 255, .08));
      pointer-events: none;
    }

    .favorites-header {
      position: relative;
      z-index: 1;
      display: flex;
      justify-content: space-between;
      gap: 1rem;
      align-items: center;
      margin-bottom: 1rem;
    }

    .favorites-chip {
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      padding: .5rem .75rem;
      border-radius: 999px;
      background: rgba(0, 0, 0, .22);
      border: 1px solid rgba(255, 255, 255, .12);
      color: #dfffee;
      font-size: .82rem;
      font-weight: 800;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
    }

    .final-cta {
      display: grid;
      grid-template-columns: minmax(0, 1fr) auto;
      gap: 1.25rem;
      align-items: center;
      padding: clamp(1.4rem, 4vw, 2.4rem);
      border-radius: var(--radius);
      border: 1px solid rgba(0, 255, 163, .18);
      background:
        radial-gradient(540px 180px at 10% 0%, rgba(0, 255, 163, .18), transparent 62%),
        linear-gradient(135deg, rgba(13, 18, 26, .96), rgba(12, 15, 22, .78));
      box-shadow: 0 16px 36px rgba(0, 0, 0, .34), 0 34px 90px rgba(0, 0, 0, .24);
      overflow: hidden;
    }

    .final-cta h2 {
      margin: 0;
      font-size: clamp(1.7rem, 3.6vw, 3rem);
      font-weight: 900;
      line-height: 1.08;
    }

    .final-cta p:not(.xp-eyebrow) {
      max-width: 62ch;
      margin: .7rem 0 0;
      color: var(--muted);
      line-height: 1.65;
    }

    .final-cta__actions {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-end;
      gap: .75rem;
    }

    .footer-links {
      display: inline-flex;
      align-items: center;
      gap: .45rem;
      margin-left: .5rem;
    }

    .footer-links::before {
      content: "/";
      color: rgba(255, 255, 255, .28);
    }

    .footer-links a {
      color: var(--muted);
      text-decoration: none;
      font-weight: 800;
    }

    .footer-links a:hover {
      color: var(--accentB);
    }

    /* Carrossel topo */
    .media-img {
      aspect-ratio: 21/9;
      object-fit: cover;
      transform: scale(1);
      transform-origin: center;
      transition: filter .8s ease;
      will-change: transform;
    }

    .carousel-item.active .media-img {
      animation: heroZoom 6.5s ease forwards;
    }

    @keyframes heroZoom {
      0% {
        transform: scale(1);
        filter: saturate(.9) contrast(.95);
      }

      50% {
        transform: scale(1.025);
      }

      100% {
        transform: scale(1.05);
        filter: saturate(1.08) contrast(1.04);
      }
    }

    .carousel-progress {
      position: relative;
      height: 6px;
      background: rgba(255, 255, 255, .07);
      border-radius: 999px;
      overflow: hidden;
      margin-bottom: .75rem;
      border: 1px solid rgba(255, 255, 255, .12);
    }

    .carousel-progress span {
      position: absolute;
      inset: 0 auto 0 0;
      width: 0%;
      background: linear-gradient(90deg, var(--accentB), var(--accentA));
      border-right: 1px solid rgba(255, 255, 255, .35);
      border-radius: 999px;
    }

    .media-info .year {
      color: #a9ffde;
      font-weight: 800;
      margin-left: .4rem;
    }

    .fancy-pills .nav-link {
      font-weight: 800;
      color: #cfd3da;
      border: 1px solid rgba(255, 255, 255, .18);
      background: rgba(255, 255, 255, .06);
      margin-right: .5rem;
    }

    .fancy-pills .nav-link.active {
      color: #061015;
      background: linear-gradient(90deg, var(--accentB), var(--accentA));
      border: none;
    }

    /* ====== FAVORITES SHOWCASE ====== */
    .media-stack {
      display: flex;
      flex-direction: column;
      gap: 1.8rem;
    }

    .media-stack__header {
      display: flex;
      flex-direction: column;
      gap: .4rem;
      text-align: center;
      max-width: 720px;
      margin: 0 auto;
    }

    .media-stack__eyebrow {
      font-size: .8rem;
      letter-spacing: .18em;
      text-transform: uppercase;
      font-weight: 800;
      color: rgba(255, 255, 255, .62);
      margin: 0;
    }

    .media-stack__title {
      margin: 0;
      font-size: clamp(2rem, 3.2vw, 2.6rem);
      font-weight: 900;
    }

    .media-stack__subtitle {
      margin: 0;
      color: var(--muted);
      font-size: 1.05rem;
      line-height: 1.5;
    }

    @media (min-width: 992px) {
      .media-stack__header {
        align-items: flex-start;
        text-align: left;
        margin: 0;
        max-width: 640px;
      }
    }

    .media-slider-wrap {
      position: relative;
      /* FIX: não deixar o próximo card “vazar” nas bordas */
      overflow: hidden;
    }

    .media-slider {
      display: flex;
      gap: clamp(1rem, 3vw, 1.8rem);
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      scroll-padding: clamp(1rem, 4vw, 2.4rem);
      margin: 0 calc(-1 * clamp(1rem, 4vw, 2.4rem));
      padding: .4rem clamp(1rem, 4vw, 2.4rem) 1.6rem;
      scrollbar-width: none;
      -ms-overflow-style: none;
      cursor: grab;
    }

    .media-slider::-webkit-scrollbar {
      width: 0;
      height: 0;
    }

    .media-slider:active,
    .media-slider.is-dragging {
      cursor: grabbing;
    }

    .media-slider.is-dragging * {
      pointer-events: none;
      user-select: none;
    }

    .media-card {
      position: relative;
      flex: 0 0 100%;
      min-height: clamp(420px, 82vh, 560px);
      display: grid;
      grid-template-columns: minmax(0, 1fr);
      background: linear-gradient(140deg, rgba(17, 17, 24, .88) 0%, rgba(11, 11, 15, .95) 60%, rgba(10, 10, 14, .98) 100%);
      border-radius: clamp(1rem, 2.6vw, 1.4rem);
      border: 1px solid rgba(255, 255, 255, .08);
      box-shadow: 0 26px 60px rgba(0, 0, 0, .48), inset 0 0 0 1px rgba(255, 255, 255, .03);
      overflow: hidden;
      scroll-snap-align: center;
      isolation: isolate;
    }

    .media-card::before {
      content: "";
      position: absolute;
      inset: -25% 38% 38% -35%;
      background: radial-gradient(60% 70% at 10% 90%, rgba(var(--accent, 0 255 163), .55) 0%, rgba(var(--accent, 0 255 163), 0) 70%);
      opacity: .85;
      z-index: 0;
    }

    .media-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(120deg, rgba(255, 255, 255, .08), transparent 55%);
      opacity: .45;
      z-index: 0;
      mix-blend-mode: screen;
    }

    @media (min-width: 768px) {
      .media-card {
        grid-template-columns: minmax(0, .95fr) minmax(0, 1.05fr);
      }
    }

    .media-card__visual {
      position: relative;
      z-index: 1;
      overflow: hidden;
    }

    .media-card__visual::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(0, 0, 0, 0) 40%, rgba(5, 5, 9, .85) 100%);
      pointer-events: none;
    }

    .media-card__visual img {
      width: 100%;
      height: 100%;
      min-height: 260px;
      object-fit: cover;
      display: block;
      transform: scale(1.08);
      opacity: .75;
      transition: transform .8s ease, opacity .8s ease;
    }

    .media-card__visual img.in-view {
      transform: scale(1);
      opacity: 1;
    }

    .media-card__content {
      position: relative;
      z-index: 2;
      padding: clamp(1.6rem, 3.4vw, 2.8rem);
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: clamp(.8rem, 1.6vw, 1.4rem);
      max-width: 72ch;
    }

    .media-card__heading {
      margin: 0;
      font-size: clamp(1.7rem, 3vw, 2.4rem);
      font-weight: 900;
    }

    .media-card__text {
      margin: 0;
      color: #dfe2eb;
      font-size: 1.05rem;
      line-height: 1.75;
      position: relative;
      text-wrap: pretty;
    }

    .media-card__meta {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: .6rem 1.6rem;
      margin: 0;
    }

    .media-card__meta div {
      display: flex;
      flex-direction: column;
      gap: .15rem;
    }

    .media-card__meta dt {
      margin: 0;
      font-size: .75rem;
      text-transform: uppercase;
      letter-spacing: .18em;
      color: rgba(255, 255, 255, .62);
      font-weight: 800;
    }

    .media-card__meta dd {
      margin: 0;
      font-weight: 700;
      color: #f4f6ff;
    }

    .media-slider__controls {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 clamp(.8rem, 3.5vw, 2.4rem);
      pointer-events: none;
      gap: clamp(.8rem, 2vw, 1.2rem);
      transition: opacity .3s ease;
      opacity: 1;
    }

    .media-slider__controls.is-hidden {
      display: none;
    }

    .media-slider__btn {
      width: 3.1rem;
      height: 3.1rem;
      border-radius: 50%;
      border: 1px solid rgba(255, 255, 255, .26);
      background: rgba(9, 9, 13, .76);
      color: var(--fg);
      display: grid;
      place-items: center;
      pointer-events: auto;
      box-shadow: 0 8px 24px rgba(0, 0, 0, .45), inset 0 0 0 1px rgba(255, 255, 255, .05);
      transition: background .2s ease, border-color .2s ease, transform .2s ease, box-shadow .2s ease, opacity .2s ease;
    }

    .media-slider__btn:hover {
      background: rgba(12, 12, 18, .92);
      border-color: rgba(255, 255, 255, .36);
      transform: translateY(-2px);
      box-shadow: 0 14px 30px rgba(0, 0, 0, .55), inset 0 0 0 1px rgba(255, 255, 255, .08);
    }

    .media-slider__btn:disabled {
      opacity: .4;
      cursor: not-allowed;
      transform: none;
      box-shadow: none;
    }

    .media-slider__hint {
      margin: 0;
      text-align: center;
      color: rgba(255, 255, 255, .55);
      font-size: .85rem;
    }

    @media (min-width: 992px) {
      .media-slider__hint {
        text-align: right;
        padding-right: clamp(1rem, 4vw, 2.4rem);
      }
    }

    .card-readmore-wrap {
      position: relative;
      display: block;
    }

    .card-readmore-wrap.is-collapsed {
      max-height: 15.5rem;
      overflow: hidden;
    }

    .card-readmore-wrap.is-collapsed::after {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      height: 4.5rem;
      background: linear-gradient(to bottom, rgba(11, 11, 15, 0), rgba(11, 11, 15, .92));
      pointer-events: none;
    }

    .btn-readmore {
      align-self: flex-start;
      margin-top: .6rem;
      font-weight: 800;
      border: 1px solid rgba(255, 255, 255, .22);
      background: rgba(255, 255, 255, .08);
      color: var(--fg);
      padding: .45rem .85rem;
      border-radius: .7rem;
      transition: background .2s ease, transform .2s ease, border-color .2s ease;
    }

    .btn-readmore:hover {
      background: rgba(255, 255, 255, .16);
      border-color: rgba(255, 255, 255, .36);
      transform: translateY(-1px);
    }

    .portrait-img {
      pointer-events: none;
    }

    [data-reveal] {
      opacity: 0;
      transform: translateY(22px);
      transition: opacity .7s ease, transform .7s ease;
    }

    [data-reveal].is-visible {
      opacity: 1;
      transform: translateY(0);
    }

    @media (max-width: 991px) {
      .hero {
        padding-top: 5.8rem;
        min-height: auto;
      }

      .hero-lab {
        min-height: 520px;
        margin-top: 1rem;
      }

      .hero-lab__panel--portrait {
        width: min(92%, 380px);
        margin: 0 auto;
      }

      .hero-lab__panel--signal {
        right: 2%;
        top: 8%;
        width: min(62%, 250px);
      }

      .stacks-icons {
        left: 2%;
        top: 16%;
      }

      .portrait-img {
        max-width: none;
      }

      .project-grid,
      .xp-grid {
        grid-template-columns: 1fr;
      }

      .project-card--featured {
        grid-row: auto;
      }

      .hero-eyebrow {
        font-size: .72rem;
        letter-spacing: .04em;
      }

      .favorites-header {
        align-items: flex-start;
        flex-direction: column;
      }

      .method-section {
        grid-template-columns: 1fr;
      }

      .about-section {
        grid-template-columns: 1fr;
      }

      .final-cta {
        grid-template-columns: 1fr;
      }

      .final-cta__actions {
        justify-content: flex-start;
      }

      .culture-world {
        grid-template-columns: 1fr;
        grid-template-areas:
          "intro"
          "planet"
          "nav"
          "console"
          "marquee";
        min-height: auto;
      }

      .culture-world__intro h2 {
        max-width: 13ch;
      }

      .culture-world__planet {
        min-height: 520px;
      }

      .culture-world__gallery {
        min-height: 520px;
      }

      .culture-world__feature {
        width: clamp(220px, 42vw, 330px);
      }

      .culture-world__nav {
        grid-template-columns: repeat(4, minmax(0, 1fr));
      }

      .world-dot {
        width: 100%;
        min-width: 0;
        justify-content: center;
      }

    }

    @media (max-width: 575px) {
      .hero-actions .btn {
        width: 100%;
        justify-content: center;
      }

      .hero-copy {
        font-size: 1rem;
      }

      .hero-lab {
        min-height: 480px;
      }

      .hero-lab__panel--portrait {
        width: 96%;
        margin-right: auto;
        transform: rotate(1deg);
      }

      .portrait-frame,
      .portrait-img {
        min-height: 420px;
      }

      .hero-lab__panel--signal {
        position: relative;
        inset: auto;
        width: 92%;
        margin: -2rem auto 0;
        transform: rotate(-1deg);
      }

      .stacks-icons {
        position: relative;
        left: auto;
        top: auto;
        display: flex;
        justify-content: center;
        margin-top: .8rem;
      }

      .hero-lab__badge {
        left: .4rem;
        bottom: 1rem;
      }

      .terminal-card__body {
        font-size: .78rem;
      }

      .hero-proof {
        grid-template-columns: 1fr;
      }

      .method-card {
        grid-template-columns: 1fr;
      }

      .method-card span {
        grid-row: auto;
      }

      .final-cta__actions .btn {
        width: 100%;
        justify-content: center;
      }

      .culture-world {
        padding: 1rem;
      }

      .culture-world__intro h2 {
        font-size: clamp(2.15rem, 12vw, 3.5rem);
        line-height: .94;
      }

      .culture-world__planet {
        min-height: 430px;
      }

      .planet-sphere {
        width: min(62%, 260px);
      }

      .planet-orbit {
        width: min(96%, 360px);
      }

      .planet-orbit--b {
        width: min(74%, 280px);
      }

      .culture-world__nav {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .world-dot {
        padding: .65rem .6rem;
        font-size: .72rem;
      }

      .culture-world__gallery {
        min-height: 430px;
        --satellite-radius: min(38vw, 165px);
      }

      .culture-world__feature {
        width: min(70vw, 260px);
      }

      .culture-world__feature p {
        font-size: .78rem;
      }

      .world-card {
        width: clamp(92px, 28vw, 124px);
      }

      .dev-divider {
        grid-template-columns: 1fr;
      }

      .dev-divider span {
        display: none;
      }

    }

    @media (prefers-reduced-motion: reduce) {
      html,
      body {
        scroll-behavior: auto;
      }

      .hero-title,
      .portrait-glow,
      .btn-glass,
      .media-img,
      .media-grid--cards .card-img-top,
      [data-reveal],
      .terminal-caret,
      .culture-world__bg,
      .planet-sphere,
      .planet-sphere::before,
      .planet-orbit,
      .culture-world__marquee div,
      .hero-ticker__track {
        animation: none !important;
        transition: none !important;
      }

      [data-reveal] {
        opacity: 1;
        transform: none;
      }
    }
  </style>
</x-layout>
