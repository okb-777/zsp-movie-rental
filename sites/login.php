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
                    <label>Login: <input type="text" name="login"></label><br>
                    <label style="margin-right: 20px;">Password: <input type="password" name="password"></label><br>
                    <p>
                        <button class="button-logowanie" type="submit">Zaloguj</button> 
                        <a href="register.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: #9d0000;">Utwórz Konto</a>
                    </p>
                </form>
                
                <?php
                    if(isset($_POST['login']) && isset($_POST['password']))
                    {
                        $user = 'SELECT name, lastname, nick, password FROM users WHERE nick ="'.$_POST['login'].'" AND password="'.$_POST['password'].'"';
                    
                        if($result_user = $db -> query($user))
                        {
                            if($row_user = $result_user -> fetch_array())
                            {
                                echo '<a href="../index.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: #9d0000;">Przejdź do strony</a>';
                                echo '<h4 color: black>Zalogowano pomyślnie</h4>';
                                $_SESSION['czy zalogowano'] = 1;
                                $_SESSION['login'] = $row_user['nick'];
                            }
                            else{
                                echo '<h4 color: black>Błędne dane</h4>';
                            }
                        }
                    }
                    else
                    {
                        echo '<h4 style="margin-top: 40px;">';
                            echo 'Pusto :/ <br>';
                            echo 'Podaj dane logowania';
                        echo '</h4>';
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