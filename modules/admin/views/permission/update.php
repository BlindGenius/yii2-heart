<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var mdm\admin\models\AuthItem $model
 */
$this->title = 'Update Permission: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?php $this->beginContent('@hscstudio/heart/modules/admin/views/layouts/column2.php'); ?>
<div class="auth-item-update">
	<?php
	echo $this->render('_form', [
		'model' => $model,
	]);
	?>
</div>
<?php $this->endContent();