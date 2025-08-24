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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    
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
        <script src="/assets/js/components/cube3d.js"></script>
        <script src="/assets/js/components/fade.js"></script>
        <script src="/assets/js/components/numbers.js"></script>
        <script src="/assets/js/components/pulse.js"></script>
        <script src="/assets/js/components/validation-form.js"></script>
        <script src="/assets/js/main.js"></script>

</body>
</html>