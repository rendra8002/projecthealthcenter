<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Health Center</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      background: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: relative;
      z-index: 1000; /* biar nggak ketutup background */
    }

    header .logo {
      font-size: 22px;
      font-weight: bold;
      color: #4CAF50;
    }

    nav ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      margin: 0 12px;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
      font-size: 14px;
    }

    .btn-contact {
      background: #8BC34A;
      color: white;
      padding: 8px 16px;
      border-radius: 4px;
      text-decoration: none;
      margin-left: 20px;
    }

    .contact-section {
      display: flex;
      padding: 40px;
      background: url("https://img.freepik.com/free-photo/blur-hospital_1203-7959.jpg") no-repeat center center/cover;
      min-height: 70vh;
    }

    .contact-form {
      flex: 1;
      background: rgba(255,255,255,0.9);
      padding: 20px;
      border-radius: 10px;
      margin-right: 20px;
    }

    .contact-form h2 {
      margin-bottom: 20px;
      text-transform: capitalize;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .contact-info {
      flex: 1;
      background: rgba(255,255,255,0.9);
      padding: 20px;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .contact-info img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    footer {
      background: #f8f8f8;
      padding: 15px 40px;
      font-size: 13px;
      color: #555;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    footer a {
      text-decoration: none;
      color: #333;
      margin: 0 10px;
    }
  </style>
</head>
<body>

  

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="contact-form">
      <h2>contact us</h2>
      <form>
        <input type="text" placeholder="First name">
        <input type="text" placeholder="Last name">
        <input type="text" placeholder="Subject">
        <textarea rows="5" placeholder="Message"></textarea>
      </form>
    </div>

    <div class="contact-info">
      <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Contact Person">
      <p><strong>address :</strong> El Mirela 48</p>
      <p><strong>email :</strong> Elmirela@gmail.com</p>
      <p><strong>phone number :</strong> +62 999 999 999</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Health Center</p>
    <div>
      <a href="#">Privacy Policy</a> |
      <a href="#">Terms of Service</a>
    </div>
  </footer>

</body>
</html>
