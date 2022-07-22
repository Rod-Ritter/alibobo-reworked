<?php

if (isset($_POST['articlesEdit.inc'])) {
    $nom = isset($_POST['categories']);
}

?>

<form action="index.php?page=articlesEdit" method="post">
    <div>
        <label for="categories">Catégories :</label>
        <input type="text" id="categories" name="categories" value="<?=$categories?>" />
    </div>

    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="articlesEdit.inc" />
</form>



