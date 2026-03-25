<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?? 'Nusa Interiors' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.cdnfonts.com/css/cormorant-garamond" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>/app/Views/assets/css/style.css">


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