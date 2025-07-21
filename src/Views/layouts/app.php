<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'NFT Marketplace' ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/components.css">
</head>
<body>
    <?php include 'src/Views/partials/header.php'; ?>
    
    <main class="main-content">
        <?= $content ?>
    </main>
    
    <?php include 'src/Views/partials/footer.php'; ?>
    
    <script src="/assets/js/main.js"></script>
</body>
</html>