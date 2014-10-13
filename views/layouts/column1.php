<?php
use yii\helpers\Html;
use hscstudio\heart\widgets\Breadcrumbs;
use kartik\icons\Icon;
use kartik\widgets\AlertBlock; 
// Set default icon fontawesome
Icon::map($this, Icon::FA);
/**
 * @var \yii\web\View $this
 * @var string $content
 */
?>
<?php $this->beginContent('@app/views/layouts/main.php'); ?>
<div class="wrapper">
    <aside class="right-side strech">   
        <section class="content-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </section>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <section class="content">
			<?php 
			echo AlertBlock::widget([
				'useSessionFlash' => true,
				'type' => AlertBlock::TYPE_ALERT
			]); 
			?>
            <?= $content ?>
        </section>
    </aside>
</div>
<?php $this->endContent();