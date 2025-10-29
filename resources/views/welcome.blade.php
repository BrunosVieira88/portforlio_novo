<x-layout title="Portifolio">
  <!-- NAV --------------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-dark nav-glass fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#top">Bruno Vieira</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto gap-lg-3">
          <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#highlights">Destaques</a></li>
          <li class="nav-item"><a class="nav-link" href="#favorites">Favoritos</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- BG DECOR ---------------------------------------------------------->
  <div class="bg-grid"></div>
  <div class="bg-blur-1"></div>
  <div class="bg-blur-2"></div>

  <div class="content container" id="top">
    <!-- HERO ------------------------------------------------------------->
    <section class="hero row align-items-center g-4">
      <div class="col-lg-6 order-2 order-lg-1">
        <h1 class="hero-title">Full-Stack <span>Developer</span></h1>
        <p class="lead text-muted-200 mt-2">PHP • Laravel • Vue.js • JavaScript • Bootstrap</p>

        <div class="d-flex flex-wrap gap-2 mt-3">
          <span class="badge skill-pill">PHP</span>
          <span class="badge skill-pill">Laravel</span>
          <span class="badge skill-pill">Vue.js</span>
          <span class="badge skill-pill">JavaScript</span>
          <span class="badge skill-pill">Bootstrap</span>
          <span class="badge skill-pill">MySQL</span>
          <span class="badge skill-pill">REST APIs</span>
        </div>

        <div class="social-wrapper mt-4">
          <canvas id="matrix-social" class="matrix-canvas" aria-hidden="true"></canvas>
          <a href="Bruno Santos Vieira.pdf" download class="btn btn-cta me-1">
            <i class="fa-solid fa-file-arrow-down me-2"></i> Baixar Currículo
          </a>
          <a href="https://www.linkedin.com/in/brunosantosvieira/" target="_blank" class="btn btn-glass">
            <i class="fab fa-linkedin me-2"></i> LinkedIn
          </a>
          <a href="https://github.com/BrunosVieira88" target="_blank" class="btn btn-glass">
            <i class="fa-brands fa-github me-2"></i> GitHub
          </a>
          <a href="https://gitlab.com/BrunoSantosVieira88" target="_blank" class="btn btn-glass">
            <i class="fa-brands fa-gitlab me-2"></i> GitLab
          </a>
        </div>
      </div>

      <div class="col-lg-6 order-1 order-lg-2 text-center">
        <div class="portrait-wrap">
          <div class="portrait-frame">
            <img src="port/bruno.png" alt="Bruno Santos Vieira" class="portrait-img" />
            <div class="portrait-glow"></div>
          </div>
          <div class="stacks-icons">
            <i class="fab fa-php"></i>
            <i class="fab fa-laravel"></i>
            <i class="fab fa-js"></i>
            <i class="fab fa-vuejs"></i>
            <i class="fab fa-bootstrap"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- SOBRE ------------------------------------------------------------>
    <section id="about" class="mt-5">
      <div class="glass p-4 p-lg-5">
        <h2 class="section-title">Bruno Santos Vieira</h2>
        <p class="fs-5">
          Olá! Sou um desenvolvedor apaixonado por criar soluções escaláveis e elegantes.
          Tenho formação em Análise e Desenvolvimento de Sistemas e experiência prática
          em <strong>PHP, Laravel, Vue.js, JavaScript e Bootstrap</strong>. Curto trabalhar
          próximo do time e do cliente, com comunicação clara, entrega contínua e código limpo.
        </p>
        <p class="fs-5 mb-0">
          Busco vagas onde eu possa construir features ponta-a-ponta, colaborar em revisões de PR,
          escrever testes e ajudar a melhorar a DX do time.
        </p>
      </div>
    </section>

    <!-- “MÉTRICAS” ------------------------------------------------------->
    <section id="highlights" class="mt-4">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="metric glass">
            <span class="metric-number">Full-Stack</span>
            <span class="metric-label">Laravel • Vue • REST • MySQL</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="metric glass">
            <span class="metric-number">Entrega</span>
            <span class="metric-label">UX simples • releases frequentes</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="metric glass">
            <span class="metric-number">Qualidade</span>
            <span class="metric-label">Code review • testes básicos</span>
          </div>
        </div>
      </div>
    </section>
    <div class="justify-content-center d-flex my-5">
      <div class="card assunto-card">
        <h1>Meus Hobbys</h1>
      </div>
    </div>
    <!-- FAVORITOS -------------------------------------------------------->
    <section id="favorites" class="mt-5">
      <div class="glass p-3 p-lg-4">
        <div class="carousel-progress" id="favProgress"><span></span></div>

        <div id="favCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5500"
          data-bs-touch="true" data-bs-keyboard="true">
          <div class="carousel-inner rounded-3 overflow-hidden shadow-lg">
            <div class="carousel-item active" data-title="O Senhor dos Anéis"
              data-desc="Batalhas épicas, trilha inesquecível — cinema no auge." data-year="2001">
              <img src="movies/lord.jpeg" class="d-block w-100 media-img" alt="O Senhor dos Anéis">
            </div>
            <div class="carousel-item" data-title="Star Wars"
              data-desc="Uma mitologia que moldou gerações. Força sempre." data-year="1977">
              <img src="movies/sw.jpeg" class="d-block w-100 media-img" alt="Star Wars">
            </div>
            <div class="carousel-item" data-title="Planeta dos Macacos"
              data-desc="Real, tensa e emocionante — trilogia muito redonda." data-year="2011–2017">
              <img src="movies/apes_1.jpg" class="d-block w-100 media-img" alt="Planeta dos Macacos">
            </div>
            <div class="carousel-item" data-title="Matrix" data-desc="Mind-blowing de 1999 que mudou a cultura pop."
              data-year="1999">
              <img src="movies/matrix.jpg" class="d-block w-100 media-img" alt="Matrix">
            </div>
          </div>

          <!-- CONTROLES NATIVOS DO BOOTSTRAP -->
          <button class="carousel-control-prev" type="button" data-bs-target="#favCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#favCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
          </button>
        </div>

        <div class="media-info mt-3">
          <h4 class="mb-1" id="mediaTitle">O Senhor dos Anéis <span class="year">• 2001</span></h4>
          <p class="mb-0 text-muted-200" id="mediaDesc">Batalhas épicas, trilha inesquecível — cinema no auge.</p>
        </div>

        <ul class="nav nav-pills fancy-pills mt-4" id="favTabs" role="tablist">
          <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="pill"
              data-bs-target="#tab-filmes" type="button">Filmes</button></li>
          <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
              data-bs-target="#tab-jogos" type="button">Jogos</button></li>
          <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
              data-bs-target="#tab-livros" type="button">Livros</button></li>
          <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
              data-bs-target="#tab-escritor" type="button">Meus livros</button></li>
        </ul>

        <div class="tab-content mt-3">
          <div class="tab-pane fade show active" id="tab-filmes">
            <x-filmes />
          </div>
          <div class="tab-pane fade" id="tab-jogos">
            <x-jogos />
          </div>
          <div class="tab-pane fade" id="tab-livros">
            <x-livros />
          </div>
          <div class="tab-pane fade" id="tab-escritor">
            <x-escritor />
          </div>
        </div>
      </div>
    </section>

    <footer class="py-4 text-center text-muted-300 small mt-5">
      © <span id="year"></span> Bruno Santos Vieira — Laravel + Bootstrap
    </footer>
  </div>

  <!-- JS ----------------------------------------------------------------->
  <script>
    // ano
    document.getElementById('year').textContent = new Date().getFullYear();

    // Tilt leve só na foto de perfil
    (function(){
      const wrap = document.querySelector('.portrait-wrap');
      if(!wrap) return;
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

    // Matrix só nos botões
    (function(){
      const canvas = document.getElementById('matrix-social');
      if(!canvas || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
      const ctx = canvas.getContext('2d'), parent = canvas.parentElement;
      let fontSize=14, cols=0, drops=[];
      function resize(){ canvas.width=parent.clientWidth; canvas.height=parent.clientHeight; cols=Math.floor(canvas.width/fontSize); drops=Array(cols).fill(1) }
      window.addEventListener('resize', resize, {passive:true}); resize();
      const chars='01<>[]{}/*+=-_|$#@Φλ※ツ';
      (function draw(){
        ctx.fillStyle='rgba(0,0,0,0.08)'; ctx.fillRect(0,0,canvas.width,canvas.height);
        ctx.fillStyle='#00ffa3'; ctx.font=fontSize+'px monospace';
        drops.forEach((y,i)=>{ const t=chars[Math.floor(Math.random()*chars.length)]; ctx.fillText(t,i*fontSize,y*fontSize); if(y*fontSize>canvas.height&&Math.random()>0.975)drops[i]=0; drops[i]++;});
        requestAnimationFrame(draw);
      })();
    })();

    // Carousel info + progress
  document.addEventListener('DOMContentLoaded', function () {
  // --- CAROUSEL (usa ciclo nativo e barra sincronizada, sem rAF) ---
  const carouselEl = document.getElementById('favCarousel');
  if (!carouselEl) return;

  const progressEl = document.querySelector('#favProgress span');
  const titleEl = document.getElementById('mediaTitle');
  const descEl  = document.getElementById('mediaDesc');

  const interval = Number(carouselEl.getAttribute('data-bs-interval')) || 5500;
  const carousel = bootstrap.Carousel.getOrCreateInstance(carouselEl, {
    interval, ride: false, pause: false, touch: true, keyboard: true, wrap: true
  });

  let timer = null;

  function updateInfoByIndex(i){
    const item = carouselEl.querySelectorAll('.carousel-item')[i];
    if (!item) return;
    titleEl.innerHTML = `${item.dataset.title} <span class="year">• ${item.dataset.year}</span>`;
    descEl.textContent = item.dataset.desc || '';
  }

  function startBar(){
    // reinicia a barrinha do zero até 100% no tempo do intervalo
    progressEl.style.transition = 'none';
    progressEl.style.width = '0%';
    // força reflow para aplicar a transição do zero
    // eslint-disable-next-line no-unused-expressions
    progressEl.offsetHeight;
    progressEl.style.transition = `width ${interval}ms linear`;
    progressEl.style.width = '100%';

    clearTimeout(timer);
    timer = setTimeout(() => carousel.next(), interval);
  }

  // atualiza textos quando começar a ir para o próximo
  carouselEl.addEventListener('slide.bs.carousel', (e) => {
    updateInfoByIndex(e.to);
  });

  // quando terminou o slide, reinicia a barra
  carouselEl.addEventListener('slid.bs.carousel', () => {
    startBar();
  });

  // pausa no hover e continua ao sair
  carouselEl.addEventListener('mouseenter', () => {
    clearTimeout(timer);
    progressEl.style.transition = 'none';
  });
  carouselEl.addEventListener('mouseleave', () => {
    startBar();
  });

  // inicia tudo
  updateInfoByIndex(0);
  carousel.cycle();   // garante o ciclo nativo
  startBar();

  // quando trocar de aba (pills), força recálculo — útil se o carrossel estiver fora de vista
  document.querySelectorAll('#favTabs [data-bs-toggle="pill"]').forEach(btn=>{
    btn.addEventListener('shown.bs.tab', () => {
      window.dispatchEvent(new Event('resize'));
      startBar();
    });
  });
});

    // Cartões dos favoritos (slider custom) + fix de abas ocultas
    (function(){
      const imgObserver = new IntersectionObserver((entries)=>{
        entries.forEach(entry=>{
          if(entry.isIntersecting){
            entry.target.classList.add('in-view');
            imgObserver.unobserve(entry.target);
          }
        });
      }, {threshold:.2});

      document.querySelectorAll('.media-card__visual img').forEach(img=>{
        if(img.dataset.reveal) return;
        img.dataset.reveal = '1';
        imgObserver.observe(img);
      });

      // === enhance sliders ===
      document.querySelectorAll('.media-slider').forEach(slider=>{
        if(slider.dataset.enhanced === '1') return;
        slider.dataset.enhanced = '1';
        slider.setAttribute('tabindex','0');
        slider.setAttribute('role','list');
        slider.querySelectorAll('.media-card').forEach(card=> card.setAttribute('role','listitem'));

        const wrap = slider.closest('.media-slider-wrap') || slider.parentElement;
        if(wrap) wrap.classList.add('media-slider-wrap--enhanced');

        const controls = document.createElement('div');
        controls.className = 'media-slider__controls';
        controls.setAttribute('aria-hidden', 'true');

        const buttons = [];
        const scrollBy = (direction)=> slider.scrollBy({left: direction * slider.clientWidth * 0.9, behavior:'smooth'});
        [
          {dir:-1, label:'Anterior', icon:'<i class="fa-solid fa-arrow-left"></i>', className:'is-prev'},
          {dir: 1, label:'Próximo', icon:'<i class="fa-solid fa-arrow-right"></i>', className:'is-next'}
        ].forEach(({dir,label,icon,className})=>{
          const btn = document.createElement('button');
          btn.type = 'button';
          btn.className = `media-slider__btn ${className}`;
          btn.dataset.dir = String(dir);
          btn.setAttribute('aria-label', label);
          btn.innerHTML = icon;
          btn.addEventListener('click', ()=> scrollBy(dir));
          controls.appendChild(btn);
          buttons.push(btn);
        });

        if(wrap) wrap.appendChild(controls);
        else slider.parentNode.appendChild(controls);

        const updateNavState = ()=>{
          const tolerance = 4;
          const hasOverflow = slider.scrollWidth - slider.clientWidth > tolerance;
          controls.classList.toggle('is-hidden', !hasOverflow);
          if(!hasOverflow){
            buttons.forEach(btn=> btn.disabled = true);
            return;
          }
          const atStart = slider.scrollLeft <= tolerance;
          const atEnd = slider.scrollLeft >= slider.scrollWidth - slider.clientWidth - tolerance;
          buttons.forEach(btn=>{
            const dir = Number(btn.dataset.dir);
            btn.disabled = dir < 0 ? atStart : atEnd;
          });
          if(wrap){
            wrap.classList.toggle('is-at-start', atStart);
            wrap.classList.toggle('is-at-end', atEnd);
          }
        };

        let raf = null;
        slider.addEventListener('scroll', ()=>{
          if(raf !== null) return;
          raf = requestAnimationFrame(()=>{
            raf = null;
            updateNavState();
          });
        }, {passive:true});

        window.addEventListener('resize', updateNavState, {passive:true});

        let isPointerDragging = false;
        let dragStartX = 0;
        let dragStartScroll = 0;

        const stopDrag = ()=>{
          if(!isPointerDragging) return;
          isPointerDragging = false;
          slider.classList.remove('is-dragging');
          if(activePointerId !== null && slider.hasPointerCapture?.(activePointerId)){
            slider.releasePointerCapture(activePointerId);
          }
          activePointerId = null;
        };

        let activePointerId = null;
        slider.addEventListener('pointerdown', ev=>{
          if(ev.pointerType === 'touch') return; // nativo no touch
          activePointerId = ev.pointerId;
          slider.setPointerCapture?.(activePointerId);
          isPointerDragging = true;
          dragStartX = ev.clientX;
          dragStartScroll = slider.scrollLeft;
          slider.classList.add('is-dragging');
        });

        slider.addEventListener('pointermove', ev=>{
          if(!isPointerDragging || ev.pointerId !== activePointerId) return;
          const delta = ev.clientX - dragStartX;
          slider.scrollLeft = dragStartScroll - delta;
        });

        ['pointerup','pointercancel','pointerleave'].forEach(type=>{
          slider.addEventListener(type, ev=>{
            if(ev.pointerId === activePointerId) stopDrag();
          });
        });

        slider.addEventListener('keydown', ev=>{
          if(ev.key === 'ArrowRight'){ scrollBy(1); ev.preventDefault(); }
          else if(ev.key === 'ArrowLeft'){ scrollBy(-1); ev.preventDefault(); }
        });

        // primeira leitura
        updateNavState();
      });

      // === FIX: quando a tab ficar visível, recalcular largura/overflow ===
      document.querySelectorAll('#favTabs [data-bs-toggle="pill"]').forEach(btn=>{
        btn.addEventListener('shown.bs.tab', () => {
          // dispara os listeners de resize que já atualizam os controles
          window.dispatchEvent(new Event('resize'));
        });
      });
    })();
  </script>

  <!-- CSS ----------------------------------------------------------------->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Ultra&family=Inter:wght@400;700;900&display=swap');

    :root {
      --bg: #0b0b0f;
      --fg: #eaeaf0;
      --muted: #b6b6c2;
      --glass: rgba(255, 255, 255, .07);
      --stroke: rgba(255, 255, 255, .1);
      --accentA: #8a2be2;
      --accentB: #00ffa3;
      --radius: 1.1rem;
      --shadow: 0 10px 30px rgba(0, 0, 0, .45);
    }

    html,
    body {
      background: var(--bg);
      color: var(--fg);
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial;
    }

    .container {
      position: relative;
      z-index: 2
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
      background-image: radial-gradient(transparent 1px, rgba(255, 255, 255, .025) 1px);
      background-size: 22px 22px;
    }

    .bg-blur-1,
    .bg-blur-2 {
      position: fixed;
      filter: blur(90px);
      opacity: .35;
      z-index: 1;
      pointer-events: none;
    }

    .bg-blur-1 {
      width: 420px;
      height: 420px;
      border-radius: 50%;
      background: linear-gradient(45deg, var(--accentA), #3ad1ff);
      top: 10%;
      left: -6%;
    }

    .bg-blur-2 {
      width: 380px;
      height: 380px;
      border-radius: 50%;
      background: linear-gradient(45deg, var(--accentB), #64ffda);
      bottom: 8%;
      right: -6%;
    }

    .nav-glass {
      background: rgba(8, 8, 12, .6);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid var(--stroke);
    }

    .hero {
      min-height: 74vh;
      padding-top: 6.2rem;
    }

    .hero-title {
      font-family: 'Ultra', serif;
      font-size: clamp(2.2rem, 5vw, 4rem);
      line-height: 1.02;
      background: linear-gradient(90deg, var(--accentB), #a2ff8f, #c6a3ff, var(--accentA));
      background-size: 300% 300%;
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      animation: moveGradient 9s ease infinite;
      text-shadow: 0 0 30px rgba(100, 255, 218, .08);
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
      opacity: .5;
      pointer-events: none;
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
      box-shadow: var(--shadow);
    }

    .btn-cta:hover {
      filter: brightness(1.04)
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

    .btn-glass:hover {
      transform: translateY(-1px);
      background: rgba(255, 255, 255, .12);
      border-color: rgba(255, 255, 255, .28);
    }

    .portrait-wrap {
      display: inline-block;
      transform-style: preserve-3d;
      transition: transform .25s ease;
    }

    .portrait-frame {
      position: relative;
      display: inline-block;
      padding: .6rem;
      border-radius: 1.2rem;
      border: 1px solid var(--stroke);
      background: rgba(255, 255, 255, .03);
      box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .04), var(--shadow);
    }

    .portrait-img {
      display: block;
      width: 100%;
      max-width: 340px;
      border-radius: .9rem;
      position: relative;
      z-index: 2;
      filter: drop-shadow(0 8px 22px rgba(0, 0, 0, .45));
    }

    .portrait-glow {
      position: absolute;
      inset: 6px;
      border-radius: 1rem;
      z-index: 1;
      background: radial-gradient(120px 60px at 60% 80%, rgba(0, 255, 163, .18), transparent 60%), radial-gradient(100px 40px at 30% 20%, rgba(138, 43, 226, .18), transparent 60%);
      animation: glowPulse 5.5s ease-in-out infinite;
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
      display: flex;
      justify-content: center;
      gap: .6rem;
      font-size: 1.25rem;
      color: #fff;
      opacity: .9;
      margin-top: .6rem;
    }

    .glass {
      background: var(--glass);
      border: 1px solid var(--stroke);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      color: var(--fg);
    }

    .section-title {
      font-weight: 900;
      letter-spacing: .3px;
      margin-bottom: .8rem
    }

    .metric {
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

    /* Carrossel topo */
    .media-img {
      aspect-ratio: 21/9;
      object-fit: cover;
      transform: scale(.5);
      transform-origin: center;
      transition: filter .8s ease;
      will-change: transform;
    }

    .carousel-item.active .media-img {
      animation: heroZoom 6.5s ease forwards;
    }

    @keyframes heroZoom {
      0% {
        transform: scale(.5);
        filter: saturate(.9) contrast(.95);
      }

      50% {
        transform: scale(.85);
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

    @media (max-width: 991px) {
      .hero {
        padding-top: 5.8rem;
        min-height: auto;
      }

      .portrait-img {
        max-width: 280px;
      }
    }

    @media (prefers-reduced-motion: reduce) {

      .hero-title,
      .portrait-glow,
      .btn-glass,
      .media-img,
      .media-grid--cards .card-img-top {
        animation: none !important;
        transition: none !important;
      }
    }

    .assunto-card {
      background: rgba(255, 255, 255, 0.1);
      color: white;
      border: none;
      padding: 20px 40px;
      border-radius: 15px;
      text-align: center;
      position: relative;
      transition: all 0.4s ease;
      font-weight: bold;
      box-shadow: 0 0 25px rgba(255, 255, 255, 0.4);
      backdrop-filter: blur(10px);
    }

    .assunto-card h1 {
      text-shadow: 0 0 8px white, 0 0 15px rgba(255, 255, 255, 0.7);
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    .assunto-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 35px rgba(255, 255, 255, 0.8);
    }
  </style>
</x-layout>