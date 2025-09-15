<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>History</title>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Nunito:wght@300;600;800&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: #f4f4f4;
    }

    .history-section {
      max-width: 1000px;
      margin: auto;
      padding: 40px 20px;
      background: url('https://statics.indozone.news/content/2019/11/19/vWs58L/t_5de5f0aee125b_700.jpg') no-repeat center center;
      background-size: cover;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    .history-section h2 {
      text-align: center;
      font-family: 'Pacifico', cursive;
      font-size: 32px;
      margin-bottom: 40px;
    }

    .history-card {
      display: flex;
      align-items: stretch;
      margin-bottom: 30px;
      background: #d5f7d5;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .history-card img {
      width: 300px;
      height: auto;
      object-fit: cover;
    }

    .history-content {
      padding: 20px;
      flex: 1;
    }

    .history-content h3 {
      margin: 0 0 10px;
      font-size: 20px;
      font-weight: 700;
      color: #2d572c;
    }

    .history-content p {
      margin: 0;
      line-height: 1.6;
      font-size: 15px;
      color: #333;
    }

    /* Responsif */
    @media(max-width: 768px) {
      .history-card {
        flex-direction: column;
      }
      .history-card img {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <section class="history-section">
    <h2>History</h2>

    <div class="history-card">
      <img src="https://media.istockphoto.com/id/1312706413/id/foto/gedung-rumah-sakit-modern.jpg?s=612x612&w=0&k=20&c=3D069xROCAWAuCjuYkF7cBKyXgbCW5Ua0r6qGPO4dqM=" alt="RS Hasan Sadikin">
      <div class="history-content">
        <h3>Rumah Sakit Dr. Hasan Sadikin Bandung</h3>
        <p>Berdiri sejak 1920, menjadi simbol kesehatan dan harapan bagi masyarakat.
        Dari Rancabadak hingga menjadi Rumah Sakit Umum Pusat yang terkemuka.
        Mengabadikan nama Dr. Hasan Sadikin sebagai penghormatan atas dedikasinya.</p>
      </div>
    </div>

    <div class="history-card">
      <img src="https://micms.mediaindonesia.com/storage/app/media/FOTO/mar/mayapada.jpg" alt="RS Siloam">
      <div class="history-content">
        <h3>Rumah Sakit Siloam</h3>
        <p>Berdiri sejak 1996 menjadi pionir dalam layanan kesehatan berkualitas tinggi.
        Membangun jaringan rumah sakit swasta terkemuka di Indonesia.
        Mengintegrasikan teknologi medis terkini dan layanan kesehatan komprehensif.</p>
      </div>
    </div>

    <div class="history-card">
      <img src="https://media.istockphoto.com/id/1312706504/id/foto/gedung-rumah-sakit-modern.jpg?s=612x612&w=0&k=20&c=5PVwmyYmTJzB7FE60mXIE5yKsCsROyH8IdvCeycMbJg=" alt="RS Abdi Waluyo">
      <div class="history-content">
        <h3>Rumah Sakit Abdi Waluyo</h3>
        <p>Menjadi rumah sakit dengan pelayanan yang mumpuni dan profesional.
        Memiliki sejarah panjang dan apresiasi publik luas
        berkat kesuksesannya memberikan layanan kesehatan terbaik.</p>
      </div>
    </div>

    <!-- Tambahan satu lagi -->
    <div class="history-card">
      <img src="https://s3.amazonaws.com/123ishproduction/images/9721/original/381411" alt="RS Cipto Mangunkusumo">
      <div class="history-content">
        <h3>Rumah Sakit Cipto Mangunkusumo (RSCM)</h3>
        <p>Didirikan tahun 1919, RSCM menjadi rumah sakit pendidikan utama di Indonesia.
        Berperan sebagai pusat rujukan nasional dengan layanan kesehatan lengkap,
        riset medis, serta pendidikan tenaga kesehatan unggulan.</p>
      </div>
    </div>
  </section>
</body>
</html>