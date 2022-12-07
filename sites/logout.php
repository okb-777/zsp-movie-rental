<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <?php
            include '../includes/header.php';
            include '../includes/nav.php';
            session_destroy();
        ?>
        wylogowano
        <a href="../index.php">Wróć</a>
    </body>
</html>