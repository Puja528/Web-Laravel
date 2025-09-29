<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juice Bar - Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'constraint', 'Segoe UI', Tahoma;
    }
    .hero {
      background: white;
      padding: 80px 0;
      text-align: center;
    }
    .hero img {
      max-width: 350px;
    }
    .custom-navbar {
        background-color: #4CAF50;
    }
    .section-title {
      font-weight: 700;
      margin-bottom: 30px;
      text-align: center;
    }
    .menu-card {
      border-radius: 15px;
      box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }
    .menu-card:hover {
      transform: translateY(-5px);
    }
    .custom-btn {
        background-color: #4CAF50;
        color: white;
        border: none;
    }
    .custom-btn:hover {
        background-color: #FF9800;
        color: #fff;
    }
    .btn-view {
        background-color: #FF9800;
        color: white;
        padding: 10px 25px;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 500;
        display: inline-block;
        transition: background-color 0.3s ease;
    }
    .btn-view:hover {
        background-color: #FF9800;
    }
    footer {
      background: #4CAF50;
      color: white;
      padding: 40px 0;
      text-align: center;
    }
    .subscribe {
      background: #fdf3e4;
      padding: 50px 0;
      text-align: center;
    }
    .subscribe input {
      border-radius: 30px;
      padding: 10px 20px;
      border: 1px solid #ccc;
      width: 300px;
      max-width: 80%;
    }
    .subscribe button {
      border-radius: 30px;
      padding: 10px 25px;
      background: #4CAF50;
      color: white;
      border: none;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Juice Bar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="#">Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <h1 class="fw-bold">Vitamin Drink</h1>
      <p>Organic Cold-Pressed Juices & Smoothies</p>
      <a href="#menu" class="btn custom-btn">Explore Flavors</a>
      <div class="mt-4">
        <img src="{{ asset('images/bg1.jpg') }}" class="card-img-top" alt="bg1">
      </div>
    </div>
  </section>

  <!-- Popular Smoothies -->
  <section class="py-5">
    <div class="container mt-4">
        <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3">
        <div class="card">
            <img src="{{ asset('images/jus1.jpg') }}" class="card-img-top" alt="jus1">
            <div class="card-body text-center">
            <h5 class="card-title">Green Waterfall</h5>
            <p class="card-text">$4.00</p>
            </div>
        </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-3">
        <div class="card">
            <img src="{{ asset('images/jus3.jpg') }}" class="card-img-top" alt="jus3">
            <div class="card-body text-center">
            <h5 class="card-title">Watermelon Juice</h5>
            <p class="card-text">$3.00</p>
            </div>
        </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-3">
        <div class="card">
            <img src="{{ asset('images/jus2.jpg') }}" class="card-img-top" alt="jus2">
            <div class="card-body text-center">
            <h5 class="card-title">Strawberry Smoothie</h5>
            <p class="card-text">$6.00</p>
            </div>
        </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-3">
        <div class="card">
            <img src="{{ asset('images/jus4.jpg') }}" class="card-img-top" alt="jus4">
            <div class="card-body text-center">
            <h5 class="card-title">Banana Smoothie</h5>
            <p class="card-text">$5.00</p>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="text-center mt-4">
        <a href="#menu" class="btn-view">View All</a>
    </div>
    </div>
  </section>

  <!-- Menu List -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="section-title">Our Menu</h2>
      <div class="row row-cols-2 row-cols-md-4 g-3 text-center">
        <div class="col"><div class="p-3 bg-white shadow-sm rounded">Banana Juice - $5.00</div></div>
        <div class="col"><div class="p-3 bg-white shadow-sm rounded">Red Smoothie - $10.00</div></div>
        <div class="col"><div class="p-3 bg-white shadow-sm rounded">Kale Smoothie - $10.00</div></div>
        <div class="col"><div class="p-3 bg-white shadow-sm rounded">Orange Juice - $6.00</div></div>
        <div class="col"><div class="p-3 bg-white shadow-sm rounded">Mango Smoothie - $12.00</div></div>
        <div class="col"><div class="p-3 bg-white shadow-sm rounded">Pink Smoothie - $10.00</div></div>
        <div class="col"><div class="p-3 bg-white shadow-sm rounded">Kiwi Juice - $8.00</div></div>
        <div class="col"><div class="p-3 bg-white shadow-sm rounded">Watermelon Juice - $5.00</div></div>
      </div>
    </div>
  </section>

  <!-- Best Seller -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title">Best Selling Smoothie</h2>
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card menu-card">
            <img src="{{ asset('images/jus1.jpg') }}" class="card-img-top" alt="jus1">
            <div class="card-body text-center">
              <h5>Black Currant Smoothie</h5>
              <p>$10.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card menu-card">
            <img src="{{ asset('images/jus2.jpg') }}" class="card-img-top" alt="jus2">
            <div class="card-body text-center">
              <h5>Red Smoothie</h5>
              <p>$10.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card menu-card">
            <img src="{{ asset('images/jus3.jpg') }}" class="card-img-top" alt="jus3">
            <div class="card-body text-center">
              <h5>Orange Juice</h5>
              <p>$6.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card menu-card">
            <img src="{{ asset('images/jus4.jpg') }}" class="card-img-top" alt="jus4">
            <div class="card-body text-center">
              <h5>Pink Smoothie</h5>
              <p>$10.00</p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="#menu" class="btn-view">View All</a>
      </div>
    </div>
  </section>

  <!-- Testimonial -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="section-title">Testimonial</h2>
      <div class="row g-4">
        <div class="col-md-4"><div class="p-3 bg-white shadow-sm rounded">"Juice Bar drinks are super refreshing, healthy, and tasty!" - Jane</div></div>
        <div class="col-md-4"><div class="p-3 bg-white shadow-sm rounded">"Best smoothies I’ve ever had. Highly recommended!" - John</div></div>
        <div class="col-md-4"><div class="p-3 bg-white shadow-sm rounded">"Fresh ingredients, organic, and affordable. Love it!" - Sarah</div></div>
      </div>
    </div>
  </section>

  <!-- Subscribe -->
  <section class="subscribe">
    <h3>Subscribe here</h3>
    <form class="d-flex justify-content-center mt-3">
      <input type="email" placeholder="Email Address">
      <button class="ms-2">Subscribe</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 Juice Bar. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
