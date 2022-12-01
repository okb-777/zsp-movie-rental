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
            <h3>Tworzenie konta</h3>
            <label>Name: <input type="text" name="name"></label><br>
            <label>Lastname: <input type="text" name="lastname"></label><br>
            <label>Login: <input type="text" name="Login"></label><br>
            <label>Password: <input type="password" name="password"></label><br>
            <p>
                <button class="button-tworzenie" type="submit">Stwórz konto</button>
            </p>
            <p>
                <a href="login.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: #9d0000;">Wróć do logowania</a>
            </p>
        </div>  
        
        <div>
            <?php
                include '../includes/footer.php';
            ?>
        </div>
    </body>
</html>