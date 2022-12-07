<html>
    <head>
        <title>ZSP Movie Rental</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        
        <?php
            $db = new mysqli ("localhost", "root", "", "filmy");
            $db -> query ('SET NAMES utf8');
            session_start();
        ?>
    </head>
    <body>
        <div class="header">
            <h1>ZSP Movie Rental</h1>
        </div>
    </body>
</html>