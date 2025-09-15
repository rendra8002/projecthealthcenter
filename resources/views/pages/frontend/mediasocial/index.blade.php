
<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80')
              no-repeat center center/cover;
  color: #333;
}

.overlay {
  background: rgba(255, 255, 255, 0.85);
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

.social-grid {
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
  text-decoration: none;
  color: #000;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.card img {
  width: 40px;
  height: 40px;
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
</style>

<div class="overlay">
  <h1>Social Media</h1>

  <div class="social-grid">
    <div class="row">
      <a href="#" class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="Instagram">
        <div>
          <h3>Instagram</h3>
          <p>@HealthCenter</p>
        </div>
      </a>

      <a href="#" class="card">
        <img src="https://logos-world.net/wp-content/uploads/2020/04/Twitter-Logo.png" alt="Twitter">
        <div>
          <h3>Twitter</h3>
          <p>@HealthCenter</p>
        </div>
      </a>
    </div>

    <div class="row">
      <a href="#" class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
        <div>
          <h3>Facebook</h3>
          <p>@HealthCenter</p>
        </div>
      </a>

      <a href="#" class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
        <div>
          <h3>LinkedIn</h3>
          <p>@HealthCenter</p>
        </div>
      </a>
    </div>
  </div>
</div>