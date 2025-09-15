<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Health Center</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;800&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Nunito', sans-serif;
      background: #f8f8f8;
      color: #333;
    }

    .section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 60px 10%;
      background: #fff;
    }

    .text {
      max-width: 50%;
    }

    .text h1 {
      font-size: 36px;
      font-weight: 800;
      margin: 0 0 20px;
      line-height: 1.2;
    }

    .text h1 .highlight {
      background: #000;
      color: #fff;
      padding: 0 6px;
      border-radius: 4px;
      margin: 0 2px;
      display: inline-block;
    }

    .text h2 {
      font-size: 16px;
      font-weight: 700;
      font-style: italic;
      margin: 0 0 15px;
      color: #111;
    }

    .text p {
      font-size: 15px;
      line-height: 1.6;
      color: #555;
      margin: 8px 0;
    }

    .image {
      max-width: 45%;
    }

    .image img {
      width: 100%;
      height: auto;
      border-radius: 6px;
      object-fit: cover;
    }

    @media (max-width: 900px) {
      .section {
        flex-direction: column;
        text-align: center;
      }
      .text, .image {
        max-width: 100%;
      }
      .text {
        margin-bottom: 30px;
      }
    }
  </style>
</head>
<body>
  <section class="section">
    <div class="text">
      <h1>Welcome to Your <span class="highlight">H</span>ealth Center</h1>
      <h2>"Memberikan Layanan Kesehatan Terbaik untuk Anda dan Keluarga"</h2>
      <p>Kami menghadirkan fasilitas modern dengan tenaga medis berpengalaman untuk memastikan kesehatan Anda terjaga setiap saat.</p>
      <p>Kami percaya bahwa setiap orang berhak mendapatkan layanan medis yang berkualitas dengan sentuhan kepedulian dan teknologi terbaik.</p>
    </div>
    <div class="image">
      <!-- Ganti dengan gambar dokter Anda -->
      <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiCPvgOz8cNgNs2WkU-5q-hByA0evUHq1o0mRlAYKcXq2VENBNcaV5xTl0DzX9xfKU5lRrYI8dd0LbRtIknAkZjvi-n1OxsQalq_LOj9pBD04QxvrIqndSbvmFR9xM1CCjHYV4cDhhdRBU/s1600/foto+gratis+dokter+menulis+resep.jpg" alt="Dokter menulis catatan medis">
    </div>
  </section>
</body>
</html>
