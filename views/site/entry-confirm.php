<?php
use yii\helpers\HTML;
?>
<p>Terimakasih sudah menginputkan pada form:</p>
<ul>
	<li><label>Name</label>: <?= Html::encode($model->name) ?></li>
	<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
	<li><label>No.Telp</label>: <?= Html::encode($model->notelp) ?></li>
	<li><label>Alamat</label>: <?= Html::encode($model->alamat) ?></li>
</ul>