
<?php 
$countries = [
    ["pays" => "Allemagne", "drapeau" => "https://flagcdn.com/de.svg", "capitale" => "Berlin", "nb_habitants" => 83149300],
    ["pays" => "Belgique", "drapeau" => "https://flagcdn.com/be.svg", "capitale" => "Bruxelles", "nb_habitants" => 11420000],
    ["pays" => "Espagne", "drapeau" => "https://flagcdn.com/es.svg", "capitale" => "Madrid", "nb_habitants" => 46754778],
    ["pays" => "France", "drapeau" => "https://flagcdn.com/fr.svg", "capitale" => "Paris", "nb_habitants" => 67060000],
    ["pays" => "Italie", "drapeau" => "https://flagcdn.com/it.svg", "capitale" => "Rome", "nb_habitants" => 60360000],
    ["pays" => "Pays-Bas", "drapeau" => "https://flagcdn.com/nl.svg", "capitale" => "Amsterdam", "nb_habitants" => 17280000],
    ["pays" => "Angleterre", "drapeau" => "https://flagcdn.com/gb-eng.svg", "capitale" => "Londres", "nb_habitants" => 56286961],
    ["pays" => "Portugal", "drapeau" => "https://flagcdn.com/pt.svg", "capitale" => "Lisbonne", "nb_habitants" => 10290000],
    ["pays" => "Suisse", "drapeau" => "https://flagcdn.com/ch.svg", "capitale" => "Berne", "nb_habitants" => 8570000],
    ["pays" => "Danemark", "drapeau" => "https://flagcdn.com/dk.svg", "capitale" => "Copenhague", "nb_habitants" => 5820000],
    ["pays" => "Autriche", "drapeau" => "https://flagcdn.com/at.svg", "capitale" => "Vienne", "nb_habitants" => 8850000],
    ["pays" => "Croatie", "drapeau" => "https://flagcdn.com/hr.svg", "capitale" => "Zagreb", "nb_habitants" => 4047200],
    ["pays" => "République tchèque", "drapeau" => "https://flagcdn.com/cz.svg", "capitale" => "Prague", "nb_habitants" => 10690000],
    ["pays" => "Pologne", "drapeau" => "https://flagcdn.com/pl.svg", "capitale" => "Varsovie", "nb_habitants" => 37950000],
    ["pays" => "Suède", "drapeau" => "https://flagcdn.com/se.svg", "capitale" => "Stockholm", "nb_habitants" => 10330000],
    ["pays" => "Ukraine", "drapeau" => "https://flagcdn.com/ua.svg", "capitale" => "Kiev", "nb_habitants" => 43733762]
]; ?>


<div class="Cards">
<?php foreach ($countries as $country) : ?>
        <div class="box" width ="200px"><img src="<?= $country["drapeau"]?>" alt="" srcset="" width="100px"><?= $country["pays"]?> <?= $country["capitale"]?> <?= $country["nb_habitants"]?></div>
        <?php endforeach; ?>


</div>

                                        