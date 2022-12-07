<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="nav">
            <?php
                if ($_SESSION['czy zalogowano'] = 1)
                {
                    echo'<h5>';
                    echo'<a href="filmy/sites/login.php">Logowanie</a> | ';
                    echo'<a href="filmy/admin/login.php">Panel Administratora</a>';
                    echo'</h5>';    
                }
                else
                {
                    echo'<h5>';
                    echo'<a href="./sites/logout.php">Wyloguj</a>';
                    echo'</h5>'; 
                }
            ?>
        </div>
    </body>
</html>