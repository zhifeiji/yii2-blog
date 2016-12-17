<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $data['title']; ?></title>
    </head>
    <body>
        <div class="art_box">
            <div class="artbody imgbody">
                <?php
                // put your code here
                foreach ($data['img_dir'] as $img) {
                    $tmp_src = str_replace('/var/www/download/spider', '', $img);
                    echo "<p>";
                    echo "<img src='{$tmp_src}' alt>";
                    echo "</p>";
                }
                ?>
            </div>
        </div>
        
    </body>
</html>
