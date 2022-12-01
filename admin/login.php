<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div>
            <?php
                include '../includes/header.php';
                include '../includes/nav.php';
            ?>
        </div>
        <div class="logowanie">
            
            <h3>Panel Administratora - Logowanie</h3>
            <label>Login: <input type="text" name="Login"></label><br>
            <label>Password: <input type="password" name="password"></label><br>
            <p><button class="button-logowanie" type="submit">Zaloguj</button></p>
        </div>
        
        <div>
            <?php
                include '../includes/footer.php';
            ?>
        </div>
    </body>
</html>