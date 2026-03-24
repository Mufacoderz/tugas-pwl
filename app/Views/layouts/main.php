<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?? 'Mini MVC' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.cdnfonts.com/css/cormorant-garamond" rel="stylesheet">


    <style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }

        .navbar-brand {
            font-family: 'Cormorant Garamond', sans-serif;
            letter-spacing: 2px;
        }

        .goldenBG {
            background-color: #D4AF37 !important;
            border-color: none !important;
        }

        .hero-overlay {
            background: linear-gradient(to right, rgba(0, 0, 0, 0.75) 40%, rgba(0, 0, 0, 0.15) 100%);
        }

        .hero-label {
            color: #D4AF37;
            letter-spacing: 4px;
        }

        .hero-heading {
            font-size: 3.2rem;
            line-height: 1.15;
            font-family: 'Playfair Display', serif;
        }

        .hero-desc {
            color: rgba(255, 255, 255, 0.7);
            max-width: 420px;
        }

        .hero-btn {
            background-color: #D4AF37;
            border-color: #D4AF37;
        }

        .hero-visual {
            max-width: 380px;
        }

        .hero-img {
            height: 280px;
            border-radius: 12px 12px 0 0 !important;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0 0 12px 12px !important;
        }
    </style>

</head>

<body>

    <?php require BASE_PATH . '/app/Views/partials/navbar.php'; ?>

    <div>
        <?= $content ?>
    </div>

    <?php require BASE_PATH . '/app/Views/partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>