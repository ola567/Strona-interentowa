<?php

$elementsonpage = $data["paginacja"]["elementsonpage"];
$elementpagelength = $elementsonpage * $data["paginacja"]["actualpage"];

?>
<form action="<?=Resources::route('zdjecia/wybraneDeletePost'); ?>" method="POST">
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
    ?>
    <figure class="photo">
        <a href="<?php echo $data['znaki_wodne'][$index]?>"><img src="<?php echo $miniatura_path ?>" alt="tort"/></a>
        <figcaption style="text-align: center; font-size: 12px;">Autor: <?php echo $data['autor'][$index]?></figcaption>
        <figcaption style="text-align: center; font-size: 12px;">Tytuł: <?php echo $data['tytul'][$index]?></figcaption>
        <input type="checkbox" name="id[]" value="<?php echo $data['id'][$index]?>">
    </figure>
<?php
endforeach;
?>

    <input type="submit" value="Usuń zaznaczone z zapamiętanych" name="submit">
</form>
