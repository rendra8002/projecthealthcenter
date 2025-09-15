<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('https://th.bing.com/th/id/R.24d820a90f18ffd9487b4ef6e8c2e658?rik=5tU2gqT5y2P9yQ&riu=http%3a%2f%2frsuii.co.id%2fbackend%2fuploads%2fmediamanager%2fWhatsApp+Image+2020-01-06+at+16.48.26+(8).jpeg-06Jan2020095918&ehk=DkLO0HDxtRQ%2bjVKRWN8Tv%2buRedqBMSumHjpvjdA036E%3d&risl=&pid=ImgRaw&r=0') no-repeat center center/cover;
        }

        .services-section {
            text-align: center;
            padding: 60px 20px;
            background: rgba(255, 255, 255, 0.4);
        }

        .services-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
            font-family: 'Georgia', serif;
        }

        .service-card {
            display: flex;
            align-items: center;
            max-width: 700px;
            margin: 20px auto;
            background: #c8f7f0;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service-card:nth-child(2) {
            background: #b6e3f7;
        }

        .service-card:nth-child(3) {
            background: #aee9d9;
        }

        .service-card:nth-child(4) {
            background: #f7e3c8;
        }

        .service-icon {
            flex: 0 0 60px;
            height: 60px;
            background: #007bff;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }

        .service-icon img {
            width: 35px;
            height: 35px;
            filter: invert(100%) brightness(100%);
        }

        .service-info h3 {
            margin: 0;
            font-size: 20px;
            color: #000;
        }

        .service-info p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #333;
        }
    </style>
</head>

<body>

    <section class="services-section">
        <h2>Services</h2>

        <div class="service-card">
            <div class="service-icon">
                <img src="https://static.vecteezy.com/system/resources/previews/002/102/641/original/stethoscope-icon-medicine-medical-health-doctor-care-hospital-aid-isolated-symbol-for-web-and-mobile-app-free-vector.jpg"
                    alt="check-up">
            </div>
            <div class="service-info">
                <h3>General Check-up</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed sonpdisun iph pusttobor-coram laid se
                    umaqua.</p>
            </div>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="https://media.istockphoto.com/id/1252757864/id/vektor/garis-detak-jantung-jejak-denyut-nadi-simbol-ekg-dan-kardio-konsep-sehat-dan-medis-ilustrasi.jpg?s=1024x1024&w=is&k=20&c=DCIO_dWTyDTFXXTvBVDlPQxOyfCWulJyZvqtRc5BTVY="
                    alt="cardiology">
            </div>
            <div class="service-info">
                <h3>Cardiology</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eldeisom potisacion nuodionie nuluntusm
                    sodiam and nainaua.</p>
            </div>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="https://media.istockphoto.com/id/1298895558/id/vektor/medis-cross-plus-putaran-lingkaran-ikon-vektor-ide-tanda-swiss-konsep-elemen-logo-farmasi.jpg?s=1024x1024&w=is&k=20&c=doSKcIdv--lQRmrw5MmQtOtk_hhLBf6jr4g7f2vTKdk="
                    alt="pediatrics">
            </div>
            <div class="service-info">
                <h3>Pediatrics</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eldeisom potisacion nuodionie nuluntusm
                    sodiam and nainaua.</p>
            </div>
        </div>

        <div class="service-card">
            <div class="service-icon">
                <img src="https://png.pngtree.com/png-clipart/20220425/ourlarge/pngtree-seorang-ayah-bergandengan-tangan-dengan-anak-laki-lakinya-png-image_4556613.png"
                    alt="dental care">
            </div>
            <div class="service-info">
                <h3>Dental Care</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
        </div>

    </section>

</body>

</html>
