<ul class="pagination">
    <?php if($data['paginacja']['actualpage']>1)
    {
        ?>
        <li><a href="<?php echo Resources::route('zdjecia/gallery', $data['paginacja']['actualpage'] - 1)?>">«</a></li>
        <?php
    }
    ?>
    <?php
    for($i=1; $i<=$data['paginacja']['numberofallpages']; $i++):
        ?>
        <li><a href="<?php echo Resources::route('zdjecia/gallery', $i)?>" <?php if($data['paginacja']['actualpage']==$i) echo 'class="active"' ?>><?php echo $i ?></a></li>
    <?php
    endfor;
    ?>
    <?php if($data['paginacja']['actualpage']<$data['paginacja']['numberofallpages'])
    {
        ?>
        <li><a href="<?php echo Resources::route('zdjecia/gallery', $data['paginacja']['actualpage'] + 1)?>">»</a></li>
        <?php
    }
    ?>
</ul>
