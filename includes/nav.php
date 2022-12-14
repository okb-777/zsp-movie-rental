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
                    echo'| <a href=/filmy/>Strona Główna</a> | ';
                    echo'<a href="/filmy/sites/login.php">Logowanie</a> | ';
                    echo'<a href="/filmy/admin/login.php">Panel Administratora</a> |';
                    echo'</h5>';    
                }
                else if(isset($_SESSION['admin']))
                {
                    echo'<h5>';
                    echo'| <a href=/filmy/>Strona Główna</a> | ';
                    echo'<a href="/filmy/admin/movie-list.php">Lista Filmów</a> | ';
                    echo'<span>Zalogowany Jako Administrator ['.$_SESSION['l_admin'].'] - </span>';
                    echo'<a href="/filmy/admin/logout.php">Wyloguj |</a>';
                    echo'</h5>';    
                }
                else
                {
                    echo'<h5>';
                    echo'| <a href=/filmy/>Strona Główna</a> | ';
                    echo'<a href=/filmy/sites/movie-search.php>Wyszukaj Film</a> | ';
                    echo'<a href=/filmy/sites/movie-my.php>Moje Filmy</a> | ';
                    echo'<span>Zalogowany Jako ['.$_SESSION['login'].'] - </span>';
                    echo'<a href="/filmy/sites/logout.php">Wyloguj</a> |';
                    echo'</h5>'; 
                }
            ?>
        </div>
    </body>
</html>