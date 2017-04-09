<?php
use yii\widgets\LinkPager;
?>

    <h1>Новини</h1>
    <ul>
        <?php foreach ($news as $news) { ?>
            <li><b><a href="<?=Yii::$app->urlManager->createUrl(['site/description','name'=>$news->name])?>"</a>
                    <?=$news->name?>   </b></li>
            <?=$news->describing?>
        <?php }?>
    </ul>
<?= LinkPager::widget(['pagination'=>$pagination]) ?>