<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <?php
            include '../includes/header.php';
            include '../includes/nav.php';
        ?>
        <div class="main_index">
            <h3>Lista Filmów: </h3>
            <input type="hidden">
            <?php
                $filmy = 'SELECT films.title, categories.category_name FROM `films` JOIN categories ON films.categorie_id = categories.id;';

                if($result_filmy = $db -> query($filmy))
                {
                    while($row_filmy = $result_filmy -> fetch_array())
                    {
                        echo '<div class="lista">';
                            echo $row_filmy['title'].'<br>';
                            echo 'Kategoria: '.$row_filmy['category_name'].'<br>';
                            echo '<form method="post" action="/filmy/admin/movie-details.php">';
                                echo '<input type="hidden" name="film" value="'.$row_filmy['title'].'">';
                                    echo '<button type="submit" class="button-lista">Szczegóły Filmu</button>';
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