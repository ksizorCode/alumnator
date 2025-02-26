<!DOCTYPE html>
<html lang="es">
<head>

    
    <!-- Configuración básica -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título SEO -->
    <title><?titulo()?></title>
    
    <!-- Establece la URL base para todas las URLs relativas -->
    <base href="<?=URL?>/">

    <meta name="description" content="<?=DESCRIPCION?>">
    <meta name="keywords" content="gestor de alumnos, administración educativa, control de calificaciones, plataforma escolar, gestión académica">
    <link rel="stylesheet" href="<?=URL?>/assets/css/style.css">

    <?php //cargar style de debug.css en caso de que DEBUG esté activado
    if(DEBUG){echo '<link rel="stylesheet" href="<?=URL?>/assets/css/debug.css">'; }
    ?>

    <meta name="theme-color" content="#007bff">
    <meta name="author" content="Miguel Esteban">
    <meta name="robots" content="index, follow">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/icons/favicon.ico" type="image/x-icon">

    <!-- PWA - Web App Manifest -->
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" sizes="192x192" href="assets/img/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="512x512" href="assets/img/icons/icon-512x512.png">

    <!-- OpenGraph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:title" content="<?titulo()?>">    
    <meta property="og:description" content="<?=DESCRIPCION?>">
    <meta property="og:image" content="https://alumnator.com/assets/img/icons/screenshot.jpg">
    <meta property="og:url" content="https://alumnator.com">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?titulo()?>">
    <meta name="twitter:description" content="<?=DESCRIPCION?>">
    <meta name="twitter:image" content="https://alumnator.com/assets/img/icons/screenshot.jpg">
    <meta name="twitter:site" content="@Alumnator">

    <!-- Canonical (evita contenido duplicado en SEO) -->
    <link rel="canonical" href="https://alumnator.com">

    <!-- Conexión con redes sociales -->
    <link rel="me" href="https://instagram.com/alumnator">
    <link rel="me" href="https://bluesky.com/alumnator">
    <link rel="me" href="https://youtube.com/alumnator">
    
</head>
<body>
    <header>
        <a href="index.php" class="logo"><?=TITULO_SITE?></a>
        <? menu()?>
    </header>
    <main>
        <h1><?=$titulo?></h1>
        <?debug('fin de header.php')?>

        