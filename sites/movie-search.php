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
            <h4>Wyszukaj film: </h4>
            <form method="post" action="/filmy/sites/movie-details.php">
                <input type="text" name="wfilm">
                <button type="submit" class="button-tworzenie">Wyszukaj</button>
            </form>
            <div class="krecha"></div>
            <h4>Dostępne filmy: </h4>
            <div class="szukanie">
            <?php
                $filmy = 'SELECT films.title, films.description, films.director, users.nick, films.accept, categories.category_name FROM `films` JOIN categories ON films.categorie_id = categories.id JOIN users ON films.user_id = users.id;';
            
                if($result_filmy = $db -> query($filmy))
                {
                    while($row_filmy = $result_filmy -> fetch_array())
                    {
                        if($row_filmy['accept'] == 1)
                        {
                            if($row_filmy['nick'] !== $_SESSION['login'])
                            {
                                echo '<span style="font-weight: bolder; font-size: 13px">Tytuł: </span>'.$row_filmy['title']. '<br>';
                                echo '<span style="font-weight: bolder; font-size: 13px">Kategoria: </span>'.$row_filmy['category_name']. '<br><br>';
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