<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?= $title ?></title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Mon Blog en PHP MVC'>
    <!-- CSS -->
    <link rel='stylesheet' href='public/css/main.css'>
    <!-- GOOGLE FONTS -->
    <!-- Roboto -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- Quicksand -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Quicksand&display=swap' rel='stylesheet'>
    <!-- Bangers -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Bangers&display=swap' rel='stylesheet'>
    <!-- FONTAWESOME -->
    <script src='https://kit.fontawesome.com/29ef46100e.js' crossorigin='anonymous'></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
</head>

<body>

    <header>
        <a href="index.php">Mon Blog</a>

        <nav>
            <a href="#articles.php">Articles</a>
            <a href="#">Inscription</a>
            <a href="#">Connexion</a>
        </nav>
    </header>

    <main>

        <?= $content ?>

    </main>

    <!-- JAVASCRIPT -->
    <script src='js/.js'></script>
</body>

</html>