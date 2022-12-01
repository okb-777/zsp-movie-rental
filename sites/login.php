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
        
        <div class="main">
            <div class="logowanie">
                <h3>Logowanie</h3>
                <form method="post">
                    <label>Login: <input type="text" name="Login"></label><br>
                    <label>Password: <input type="password" name="password"></label><br>
                    <p>
                        <button class="button-logowanie" type="submit">Zaloguj</button> 
                        <a href="register.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: #9d0000;">Utwórz Konto</a>
                    </p>
                </form>
                
                <?php
                    $user = "SELECT name, lastname, nick, password FROM users";
                
                    if($result_user = $db -> query($user))
                    {
                        while($row_user = $result_user -> fetch_array())
                        {
                            echo $row_user["name"].' '.$row_user["lastname"].' '.$row_user["nick"].' '.$row_user["password"].'<br>';
                            
                            if(isset($_POST['login']) && isset($_POST['password']))
                            {
                                if($_POST['login'] == $row_user["nick"] && $_POST['password'] == $row_user["password"])
                                {
                                    echo '<p color: black>GRATULACJE</p>';
                                    echo '<a href="index.php">Przejdź do strony</a>';
                                }
                            }
                        }
                    }
                ?>
            </div>
        </div>
        
        <div>
            <?php
                include '../includes/footer.php';
            ?>
        </div>
    </body>
</html>