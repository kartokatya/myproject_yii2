<?php
/**
 * Created by PhpStorm.
 * User: Mi
 * Date: 26/05/2018
 * Time: 14:45
 */

use yii\helpers\Url;

?>
<h1><?=$category->name?></h1>
<?php foreach ($products as $product):?>
    <div class="col-md-4">
        <a href="<?= Url::to(['/site/product', 'id'=>$product->id])?>"> ссылка</a>
    </div>
<?php endforeach; ?>
