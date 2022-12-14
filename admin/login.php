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
                <form method="post">
                    <h3>Panel Administratora - Logowanie</h3>
                    <label>Login: <input type="text" name="login"></label><br>
                    <label style="margin-right: 20px;">Password: <input type="password" name="password"></label><br>
                    <p>
                        <button class="button-logowanie" type="submit">Zaloguj</button>
                    </p>
                </form>
                
                <?php
                    if(isset($_POST['login']) && isset($_POST['password']))
                    {
                        $admin = 'SELECT name, lastname, nick, password, admin FROM users WHERE nick = "'.$_POST['login'].'" AND password = "'.$_POST['password'].'" AND admin = 1';
                        
                        if($result_admin = $db -> query($admin))
                        {
                            if($row_admin = $result_admin -> fetch_array())
                            {
                                echo '<a href="../index.php" style="border: 2px solid black; border-radius: 7px; padding: 3.3px; color: white; background-color: #9d0000;">Przejdź do strony</a>'; echo '<h4 color: black>Zalogowano pomyślnie jako admin</h4>';
                                $_SESSION['admin'] = 1;
                                $_SESSION['czy zalogowano'] = 1;
                                $_SESSION['l_admin'] = $row_admin['nick'];
                            }
                            else
                            {
                                echo '<h4 color: black>Błędne dane lub nie jesteś adminem</h4>';
                            }
                        }
                    }
                    else
                    {
                        echo '<h4 style="margin-top: 40px;">';
                            echo 'Pusto :/ <br>';
                            echo 'Podaj dane logowania <br>do administratora';
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