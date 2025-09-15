<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Gallery</title>

<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Nunito:wght@300;600;800&display=swap" rel="stylesheet">

<style>
  body{
    margin:0;
    font-family:"Nunito", sans-serif;
    background:url('https://media.istockphoto.com/id/1312706413/id/foto/gedung-rumah-sakit-modern.jpg?s=612x612&w=0&k=20&c=3D069xROCAWAuCjuYkF7cBKyXgbCW5Ua0r6qGPO4dqM=') no-repeat center/cover fixed; /* ✅ background foto full screen */
    position: relative;
    min-height:100vh;
  }
  /* overlay gelap + gradasi */
  body::before{
    content:"";
    position:fixed;
    inset:0;
    background:linear-gradient(to bottom, rgba(0,0,0,0.55), rgba(0,0,0,0.35));
    backdrop-filter: blur(2px); /* efek blur supaya konten lebih jelas */
    z-index:0;
  }

  .wrapper{
    position:relative;
    z-index:1;
    padding:50px 20px;
    max-width:1200px;
    margin:auto;
  }
  .title{
    font-family:"Pacifico", cursive;
    font-size:52px;
    text-align:center;
    margin-bottom:40px;
    color:#fff;
    text-shadow:0 2px 6px rgba(0,0,0,0.6);
  }
  .cards{
    display:flex;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;
  }
  .card{
    width:320px;
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,0.35);
    display:flex;
    flex-direction:column;
  }
  .card .photo{
    flex:1;
    height:280px; /* semua foto sama tinggi */
    overflow:hidden;
  }
  .card img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
  }
  .caption{
    padding:18px 15px;
    text-align:center;
  }
  .caption h3{
    margin:0;
    font-size:20px;
    font-weight:800;
  }
  .caption p{
    margin:8px 0 0;
    font-size:14px;
    color:#444;
    line-height:1.4;
  }
</style>
</head>
<body>
  <div class="wrapper">
    <div class="title">Gallery</div>
    <div class="cards">
      <!-- Card 1 -->
      <div class="card">
        <div class="photo">
          <img src="https://rsborromeus.com/wp-content/uploads/2017/07/KAMAR-OPERASI2.jpg" alt="Operasi">
        </div>
        <div class="caption">
          <h3>Operasi</h3>
          <p>Tim medis yang profesional dan berpengalaman</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="card">
        <div class="photo">
          <img src="https://png.pngtree.com/thumb_back/fw800/background/20221125/pngtree-medical-consultation-between-doctor-and-patient-doc-stethoscope-woman-photo-image_42396136.jpg" alt="Konsultasi">
        </div>
        <div class="caption">
          <h3>Konsultasi</h3>
          <p>Konsultasi yang membantu memahami pilihan perawatan</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="card">
        <div class="photo">
          <img src="https://media.istockphoto.com/id/1510747187/id/foto/dokter-berbicara-dengan-pasien-dan-mengisi-riwayat-pasien-pemeriksaan-perawatan-konsep-medis.jpg?s=170667a&w=0&k=20&c=WLA7r5Psf6h98T8lF0DSdwJNMTNiO2JVVU73GXVxgV0=" alt="Penanganan">
        </div>
        <div class="caption">
          <h3>Penanganan</h3>
          <p>Penanganan yang efektif untuk mengembalikan kesehatan</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
