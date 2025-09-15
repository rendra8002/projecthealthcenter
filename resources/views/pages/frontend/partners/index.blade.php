
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: url('https://images.unsplash.com/photo-1505691938895-1758d7feb511?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
      color: #333;
    }

    .overlay {
      background: rgba(255, 255, 255, 0.8);
      min-height: 100vh;
      padding: 40px 20px;
    }

    h1 {
      text-align: center;
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 40px;
      font-family: 'Georgia', serif;
    }

    .partners {
      display: flex;
      flex-direction: column;
      gap: 20px;
      max-width: 1000px;
      margin: auto;
    }

    .row {
      display: flex;
      gap: 20px;
      justify-content: center;
    }

    .card {
      flex: 1;
      display: flex;
      align-items: center;
      background: #fff;
      border-radius: 12px;
      padding: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      min-height: 100px;
    }

    .card img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      margin-right: 15px;
    }

    .card h3 {
      margin: 0;
      font-size: 18px;
      font-weight: bold;
    }

    .card p {
      margin: 5px 0 0;
      font-size: 14px;
      color: #555;
    }

    footer {
      text-align: center;
      padding: 20px;
      font-size: 12px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="overlay">
    <h1>Partner</h1>

    <div class="partners">
      <div class="row">
        <div class="card">
          <img src="https://tse1.mm.bing.net/th/id/OIP.TfJz9UCF9Mne2e_Ph1ptZgAAAA?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="RS Harapan">
          <div>
            <h3>RS. Harapan Pematangsiantar</h3>
            <p>Hatiku tergerak oleh belas kasihan</p>
          </div>
        </div>

        <div class="card">
          <img src="https://apmbpjs-dev.herminahospitals.com/assets/img/logo/PASTEUR_2.png" alt="Hermina Pasteur">
          <div>
            <h3>Hermina Pasteur</h3>
            <p>Sehat bersama Hermina Pasteur</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <img src="https://www.rspelni.co.id/wp-content/uploads/2020/04/00_LOGO-PELNI-IHC.png" alt="RS Pelni IHC">
          <div>
            <h3>RS. Pelni (IHC)</h3>
            <p>Komitmen pada pelayanan kesehatan profesional dan terpercaya</p>
          </div>
        </div>

        <div class="card">
          <img src="https://ugc.production.linktr.ee/51951685-c7cc-488f-bf84-e43a6d329b6f_WhatsApp-Image-2023-11-01-at-09.23.29-718e9513.jpeg?io=true&size=avatar-v3_0" alt="RS Patuh Karya">
          <div>
            <h3>RS. Umum Daerah Patuh Karya</h3>
            <p>Dedikasi untuk masyarakat dengan layanan unggul</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    © 2025 Health Center. All rights reserved.
  </footer>
</body>
</html>

