<?php

$elementsonpage = $data["paginacja"]["elementsonpage"];
$elementpagelength = $elementsonpage * $data["paginacja"]["actualpage"];

?>
<form action="<?=Resources::route('zdjecia/wybranePost'); ?>" method="POST">
<?php
foreach($data["miniatury"] as $index=>$miniatura_path):
    if ($index < $elementpagelength - $elementsonpage)
    {
        continue;
    }
    if($index==$elementpagelength)
    {
        break;
    }

    $private = $data['private'][$index];
    $login = isset($_SESSION['loggedlogin']) ? $_SESSION['loggedlogin'] : false;
    if(!$private || ($private && $login != false && $data['autor'][$index]==$login)) {
    ?>
    <figure class="photo">
        <a href="<?php echo $data['znaki_wodne'][$index]?>"><img src="<?php echo $miniatura_path ?>" alt="tort"/></a>
        <figcaption style="text-align: center; font-size: 12px;">Autor: <?php echo $data['autor'][$index]?></figcaption>
        <figcaption style="text-align: center; font-size: 12px;">Tytuł: <?php echo $data['tytul'][$index]?></figcaption>
        <?php
        if(isset($_SESSION['zaznaczone']) && is_array($_SESSION['zaznaczone']) && in_array($data['id'][$index], $_SESSION['zaznaczone'])) {?>
            <input type="checkbox" name="id[]" value="<?php echo $data['id'][$index]?>" checked>
        <?php
        } else {?>
            <input type="checkbox" name="id[]" value="<?php echo $data['id'][$index]?>">
        <?php
        }?>
        <?php
        if($private)
            echo '<p style="font-size: 12px; color:orange; text-align: center;">PRYWATNE</p>';
        }
        ?>
    </figure>
<?php
endforeach;
?>

    <input type="submit" value="Zapamiętaj wybrane" name="submit">
</form>
