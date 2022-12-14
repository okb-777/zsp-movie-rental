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
        <div class="main_szukanie">
            <h4>Twoje filmy:</h4> 
            <?php
                $filmy = 'SELECT films.title, films.description, films.director, users.nick, films.accept, categories.category_name FROM `films` JOIN categories ON films.categorie_id = categories.id JOIN users ON films.user_id = users.id WHERE users.nick = "'.$_SESSION['login'].'";';
                
                if($result_filmy = $db -> query($filmy))
                {
                    while($row_filmy = $result_filmy -> fetch_array())
                    {
                        if($row_filmy['nick'] = $_SESSION['login'])
                        {
                            echo '<span style="font-weight: bolder; font-size: 13px">Tytuł: </span>'.$row_filmy['title'].'<br><br>';
                        }
                    }
                }
            ?>
            <form method="post" action="/filmy/sites/movie-add.php">
                <button  class="button-lista" type="submit">Dodaj film</button>
            </form>
        </div>
        <div>
            <?php
                include '../includes/footer.php';
            ?>
        </div>
    </body>
</html>