<!-- 
 ================================ 
 ARQUIVO: src/Views/layouts/app.php 
 ================================ 
 -->
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'NFT Marketplace' ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/../../public/assets/css/style.css">

    
</head>
<body>
    <!-- Header -->
    <?php include '../src/Views/partials/header.php'; ?>
    
    <!-- Main Content -->
    <main>
        <?php include "../src/Views/{$view}.php"; ?>
    </main>
    
    <!-- Footer -->
    <?php include '../src/Views/partials/footer.php'; ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>