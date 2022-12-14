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
            <h3>Szczegóły Filmu: </h3>
            <div class="lista">
                <?php
                    $filmy = 'SELECT films.title, films.description, films.director, users.nick, films.accept, categories.category_name FROM `films` JOIN categories ON films.categorie_id = categories.id JOIN users ON films.user_id = users.id WHERE films.title = "'.$_POST['film'].'";';
                    
                    if($result_filmy = $db -> query($filmy))
                    {
                        while($row_filmy = $result_filmy -> fetch_array())
                        {
                            echo '<span style="font-weight: bolder; font-size: 13px">Tytuł: </span>'.$_POST['film'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Opis: </span>'.$row_filmy['category_name'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Opis: </span>'.$row_filmy['description'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Reżyser: </span>'.$row_filmy['director'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Dodany przez: </span>'.$row_filmy['nick'].'<br><br>';
                            echo '<span style="font-weight: bolder; font-size: 13px">Czy zaakceptowany: </span>';
                            if($row_filmy['accept'] == 1){
                                echo 'tak';   
                            }
                            else{
                                echo 'nie';
                            }
                            echo '<br><br>';
                            
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>