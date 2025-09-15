<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Tenaga Kerja — Profil Dokter</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<style>
  :root{
    --bg:hsl(115, 77%, 38%);
    --card-bg:#ffffff;
    --muted:#7a7a7a;
    --accent: #0b74de;
    --max-width:1200px;
  }
  *{box-sizing:border-box}
  body{
    margin:0;
    font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
    background: url('https://tse2.mm.bing.net/th/id/OIP.-i9wHpQr6nJpdw4fJJWV-gHaE8?rs=1&pid=ImgDetMain&o=7&rm=3') center/cover no-repeat; /* ✅ background foto */
    padding:40px 20px;
    color:#222;
    -webkit-font-smoothing:antialiased;
    position: relative;
  }

  /* overlay putih transparan di atas background */
  body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(255, 255, 255, 0.7); /* atur transparansi */
    z-index: -1;
  }

  .wrap{max-width:var(--max-width);margin:0 auto}
  header{display:flex;justify-content:center;margin-bottom:28px}
  header h1{font-family:'Playfair Display', serif;font-size:44px;margin:0;color:#111}

  .cards{
    display:grid;
    grid-template-columns: repeat(3, 1fr);
    gap:28px;
    align-items:stretch;
  }

  .card{
    display:flex;
    flex-direction:column;
    background:transparent;
    border-radius:8px;
    overflow:visible;
    position:relative;
    min-height:520px;
  }

  .card .photo-wrap{
    background:var(--card-bg);
    border-radius:8px 8px 0 0;
    padding:22px 22px 10px 22px;
    display:flex;
    align-items:flex-start;
    justify-content:center;
    min-height:380px;
  }

  .photo{
    width:100%;
    height:100%;
    max-height:360px;
    object-fit:cover;
    border-radius:6px;
    box-shadow: 0 6px 18px rgba(20,20,20,0.12);
    background:#eee;
  }

  .info{
    background:var(--card-bg);
    padding:24px 22px;
    box-shadow: 0 6px 18px rgba(20,20,20,0.06);
    border-radius:0 0 8px 8px;
    margin-top: -6px;
  }

  .name{font-weight:700;font-size:20px;margin:0 0 6px}
  .role{font-weight:600;color:#444;margin:0 0 8px;font-size:14px}
  .desc{color:var(--muted);font-size:13px;line-height:1.5;margin:0}

  /* Make middle card image taller */
  .card.center .photo{max-height:420px}

  /* Responsive */
  @media (max-width:1000px){
    .cards{grid-template-columns:1fr;}
    header h1{font-size:32px}
    .card{min-height:auto}
  }

  /* thin top frame */
  .top-frame{height:6px;background:linear-gradient(90deg,#cfc8c2,#ffffff);border-radius:4px;margin-bottom:18px}

</style>
</head>
<body>
  <div class="wrap">
    <div class="top-frame"></div>
    <header>
      <h1>Tenaga Kerja</h1>
    </header>
    <main class="cards">
      <!-- Card 1 -->
      <article class="card">
        <div class="photo-wrap">
          <img class="photo" src="https://cdn.pixabay.com/photo/2023/12/21/06/23/doctor-8461303_1280.jpg" alt="Dede Inoen" />
        </div>
        <div class="info">
          <h2 class="name">Dede Inoen</h2>
          <div class="role">Dokter gigi</div>
          <p class="desc">Mengecek kondisi gigi, mulut, dan gusi.</p>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="card center">
        <div class="photo-wrap">
          <img class="photo" src="https://tse2.mm.bing.net/th/id/OIP.h0hOCCKLFPcOCrie_PRWeQAAAA?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Michael & Michel" />
        </div>
        <div class="info">
          <h2 class="name">Michael &amp; Michel</h2>
          <div class="role">Dokter Umum</div>
          <p class="desc">Memeriksa kondisi pasien secara menyeluruh.</p>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="card">
        <div class="photo-wrap">
          <img class="photo" src="https://img.freepik.com/premium-photo/healthcare-medical-concept-smiling-female-asian-doctor-uniform-looking-confident-camera-tr_1258-83000.jpg" alt="Azera" />
        </div>
        <div class="info">
          <h2 class="name">Azera</h2>
          <div class="role">Dokter Spesialis Tulang</div>
          <p class="desc">Menangani kelainan bawaan.</p>
        </div>
      </article>
    </main>
  </div>
</body>
</html>
