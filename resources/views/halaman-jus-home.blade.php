<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #FF9800;
            --accent-color: #8BC34A;
            --text-color: #333;
            --light-bg: #f9f9f9;
            --dark-green: #2E7D32;
            --light-orange: #FFF3E0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-bg);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: linear-gradient(to right, var(--primary-color), var(--accent-color));
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        h2 {
            color: var(--dark-green);
            margin: 20px 0 15px;
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 5px;
        }

        h3 {
            color: var(--primary-color);
            margin: 15px 0 10px;
        }

        .about-section {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .story-item {
            margin-bottom: 20px;
            padding-left: 20px;
            border-left: 3px solid var(--secondary-color);
        }

        .story-item strong {
            color: var(--dark-green);
        }

        .divider {
            height: 2px;
            background: linear-gradient(to right, transparent, var(--secondary-color), transparent);
            margin: 25px 0;
        }

        .innovation, .values {
            background-color: var(--light-orange);
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .juice-menu {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .juice-item {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .juice-item:hover {
            transform: translateY(-5px);
        }

        .juice-img {
            height: 180px;
            background: linear-gradient(to right, #8BC34A, #4CAF50);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .juice-content {
            padding: 15px;
        }

        .juice-content h3 {
            color: var(--dark-green);
        }

        .price {
            color: var(--secondary-color);
            font-weight: bold;
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            background: var(--secondary-color);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #F57C00;
        }

        footer {
            text-align: center;
            padding: 30px;
            margin-top: 30px;
            background-color: var(--dark-green);
            color: white;
        }

        .social-icons {
            margin: 15px 0;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: var(--secondary-color);
        }

        @media (max-width: 768px) {
            .juice-menu {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Toko Jus Segar</h1>
            <p>Menyajikan jus segar dan sehat sejak 2010</p>
        </div>
    </header>

    <div class="container">
        <section class="about-section">
            <h2>Tentang Kami</h2>
            <p>{{ $about['description'] }}</p>

            <div class="divider"></div>

            <h3>Cerita Kami</h3>
            @foreach($about['story'] as $story)
            <div class="story-item">
                <strong>{{ $story['title'] }}</strong><br>
                {{ $story['content'] }}
            </div>
            @endforeach

            <div class="divider"></div>

            <div class="innovation">
                <h3>{{ $about['innovation']['title'] }}</h3>
                <p>{{ $about['innovation']['content'] }}</p>
            </div>

            <div class="divider"></div>

            <div class="values">
                <h3>{{ $about['values']['title'] }}</h3>
                <p>{{ $about['values']['content'] }}</p>
            </div>
        </section>

        <h2>Menu Jus Terpopuler</h2>
        <div class="juice-menu">
            @foreach($juices as $juice)
            <div class="juice-item">
                <div class="juice-img">
                    <i class="fas fa-glass-whiskey"></i>
                </div>
                <div class="juice-content">
                    <h3>{{ $juice['name'] }}</h3>
                    <p>{{ $juice['description'] }}</p>
                    <p class="price">Rp {{ number_format($juice['price'], 0, ',', '.') }}</p>
                    <a href="#" class="btn">Pesan Sekarang</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <footer>
        <div class="container">
            <h3>Toko Jus Segar</h3>
            <p>Menyajikan jus segar dan sehat sejak 2010</p>

            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>

            <p>Alamat: Jl. Segar Sejahtera No. 123, Jakarta</p>
            <p>Telepon: (021) 555-1234</p>
            <p>Email: info@tokjussegar.com</p>

            <p>&copy; 2023 Toko Jus Segar. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
