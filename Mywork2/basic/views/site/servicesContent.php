	<?php
use yii\helpers\Html;
?>
<div class="form-bill">
	<h2 class="fs-title">Services</h2>
							
<?= Html::beginTag('table', ['class' => 'table']) ?>
	<?= Html::beginTag('tr',['id'=>'bigtr'])?>
		<?= Html::beginTag('th',['id'=>'modul'])?>
			Modul*
		<?= Html::endTag('th') ?>
		<?= Html::beginTag('th',['id'=>'preis'])?>
			Preis**
		<?= Html::endTag('th') ?>
		<?= Html::beginTag('th',['id'=>'tuenus'])?>
			Turnus
		<?= Html::endTag('th') ?>
		<?= Html::beginTag('th',['id'=>'menge'])?>
			Menge
		<?= Html::endTag('th') ?>
		<?= Html::beginTag('th',['id'=>'sum'])?>
			Summe
		<?= Html::endTag('th') ?>
	
		<?= Html::endTag('tr') ?>
		<?= Html::beginTag('tr',['id'=>'bigtr'])?>
		<?= Html::beginTag('td')?>
			Telefon Support pro Minute
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			2,25 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			einmalig
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('Mail[cc]', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
		<?= Html::endTag('tr') ?>
		<?= Html::endTag('tr') ?>
		<?= Html::beginTag('tr',['id'=>'bigtr'])?>
		<?= Html::beginTag('td')?>
			Mail Support 
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			150 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			einmalig
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('Mail[cc]', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('tr',['id'=>'bigtr'])?>
		<?= Html::beginTag('td')?>
			Sonderprogrammierung pro Stunde
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			kostenlos
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			einmalig
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('Mail[cc]', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
	<?= Html::endTag('tr') ?>
<?= Html::endTag('table') ?>
							</div>