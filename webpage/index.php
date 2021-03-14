<?php
$songs = glob('./songs/*.mp3');
$playlists = glob("./songs/*.txt");
?>
<?php 
include('header.php');
?>

<!--    content area    -->
			<ul id="musiclist">
                <!--    songs    -->
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


                <!--    playlists    -->
                <?php
                foreach ($playlists as $playlist) {
                    $name = basename($playlist);
                    ?>
                        <li class = "playlistitem">
                            <a href="playlist.php">
                                <?= $name ?>
                            </a>
                        </li>
                    <?php
                }
                ?>

			</ul>
            

