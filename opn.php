6<?php
$files = scandir("uploads");
for ($a = 1; $a < count($files); $a++){
    ?>
    <p>
    <a  href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
</p>
    <?php
}