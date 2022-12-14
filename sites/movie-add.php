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
            <h4>Dodaj nowy film:</h4>
            <form method="post">
                <label>Tytuł: <input type="text" maxlength="45"><br></label>
                <label style="margin-left: 8px;">Opis: <input type="text" maxlength="255"><br></label>
                <label style="margin-right: 13px;">Reżyser: <input type="text" maxlength="45"><br></label>
                <label style="margin-right: 13px;">
                    Kategoria: 
                    <select>
                        <option selected>
                            Wybierz kategorie
                        </option>
                        <?php
                            $kategorie = 'SELECT category_name FROM `categories`;';
                            if($result_kategorie = $db -> query($kategorie))
                            {
                                while($row_kategorie = $result_kategorie -> fetch_array())
                                {
                                    echo '<option>'.$row_kategorie['category_name'].'</option>';   
                                }
                            }
                        ?>
                    </select>
                </label><br><br>
                <button class="button-lista" type="submit">Dodaj film</button>
            </form>
        </div>
        <div>
            <?php
                include '../includes/footer.php';
            ?>
        </div>
    </body>
</html>