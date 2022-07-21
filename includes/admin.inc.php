<?php

if (verifierAdmin()) 
    echo "Admin";
else
    echo "Verboten";

    ?>
    <label for="selection">choisir une table</label>

    <select name="pets" id="pet-select">
        <option value="">choisissez une table</option>
        <option value="categories">Catégories</option>
        <option value="tva">TVA</option>
       
    </select>
