<?php 
include('header.php')
?>
<?php
$songs = file($playlist);
?>
<a href="index.php"> back </a>
<?php
foreach($songs as $song){
    $name = basename($song);
    ?>
        <li class="mp3item">
            <a href="songs/<?=$song?>">
                <?=$name?>
            </a>
            (<?=filesize($song)?> b)    
        </li>

    <?php
}
?>
<?php
include('footer.php');
?>