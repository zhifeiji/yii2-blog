<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="art">
            <ul>
                <?php
                // put your code here
                //var_dump($data);
                    foreach ($data as $row) {
                        echo "<li>";
                        echo "<a href='/art/view2?id={$row['_id']}' >{$row['title']}</a>";
                        //. "<span>{$row['span']}</span>";
                    }
                    //LinkPager::widget(['pagination' => $pages]);
                ?>
                
            </ul>
        </div>
        <div id="pages">
            <?php
            echo "<a href='/index.php?r=art/index2&id=1'>首页</a>";
            if($curr>1){
                $prePage = $curr - 1;
                echo "<a href='/art/index2?id={$prePage}'>上一页</a>";
            }
            echo "<a>{$curr}</a>";
            if($curr<$count){
                $nextPage = $curr + 1;
                echo "<a href='/art/index2?id={$nextPage}'>下一页</a>";
            }
           
            
            ?>
        </div>
    </body>
</html>
