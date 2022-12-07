<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="nav">
            <?php
                if (!isset($_SESSION['czy zalogowano']))
                {
                    echo'<h5>';
                    echo'<a href="/filmy/sites/login.php">Logowanie</a> | ';
                    echo'<a href="/filmy/admin/login.php">Panel Administratora</a>';
                    echo'</h5>';    
                }
                else
                {
                    echo'<h5>';
                    echo'<a href=/filmy/>Wyszukaj Film</a> | ';
                    echo'<a href=/filmy/>Moje Filmy</a> | ';
                    echo'<a href=/filmy/>Dodaj Film</a> | ';
                    echo'<a href="/filmy/sites/logout.php">Wyloguj</a>';
                    echo'</h5>'; 
                }
            ?>
        </div>
    </body>
</html>