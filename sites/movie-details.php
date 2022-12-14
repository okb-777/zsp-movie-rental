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
            <?php
                $filmy = 'SELECT films.title, films.description, films.director, users.nick, films.accept, categories.category_name FROM `films` JOIN categories ON films.categorie_id = categories.id JOIN users ON films.user_id = users.id;';
            
                if($result_filmy = $db -> query($filmy))
                {
                    if($row_filmy = $result_filmy -> fetch_array())
                    {
                        echo '<h4>Strona filmu: </h4>';
                        
                        echo '<div class="wyp">';
                            echo '<span style="font-weight: bolder; font-size: 13px">Tytuł: </span>'.$_POST['wfilm'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Kategoria: </span>'.$row_filmy['category_name'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Opis: </span>'.$row_filmy['description'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Reżyser: </span>'.$row_filmy['director'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Dodany przez: </span>'.$row_filmy['nick'].'<br><br>';
                            echo '<form method="post">';
                                echo '<button type="submit" class="button-lista">Wypożycz film</button>';
                            echo '</form>';
                        echo '</div>';
                    }
                }
            ?>
        </div>
        <div>
            <?php
                include '../includes/footer.php';
            ?>
        </div>
    </body>
</html>