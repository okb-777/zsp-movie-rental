<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div>
            <?php
                include '../includes/header.php';
                include '../includes/nav.php';
                session_destroy();
            ?>
        </div>
        
        <div class="main_logout">
            <br>
            <h4>Wylogowano</h4>
            <br>      
            <a href="/filmy/index.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: #9d0000;">Strona główna</a>
        </div>
        
        <div>
            <?php
                include '../includes/footer.php';
            ?>
        </div>
    </body>
</html>