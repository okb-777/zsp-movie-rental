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
        <div class="main_index">
            <h4>Wyszukaj film</h4>
            <form method="post" action="/filmy/sites/movie-details.php">
                <input type="text" name="wfilm">
                <button type="submit" class="button-tworzenie">Wyszukaj</button>
            </form>
            <hr>
            <?php
                $filmy = 'SELECT films.title, categories.category_name FROM `films` JOIN categories ON films.categorie_id = categories.id;';
            
                if($result_filmy = $db -> query($filmy))
                {
                    while($row_filmy = $result_filmy -> fetch_array())
                    {
                        echo $row_filmy['title']. '<br>';
                    }
                }
            ?>
        </div>
    </body>
</html>