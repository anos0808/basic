	<?php
use yii\helpers\Html;
?>
	<div class="form-bill">
		<h2 class="fs-title">Anbindung</h2>
<?= Html::beginTag('table', ['class' => 'table']) ?>
	<?= Html::beginTag('tr',['id'=>''])?>
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
			Grundsystem - Warenwirtschaft
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			49 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			monatlich
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
		<?= Html::endTag('tr') ?>
		<?= Html::endTag('tr') ?>
		<?= Html::beginTag('tr')?>
		<?= Html::beginTag('td')?>
			Amazon
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			49 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			monatlich
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('tr')?>
		<?= Html::beginTag('td')?>
			Farfetch
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			49 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			monatlich
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('tr')?>
		<?= Html::beginTag('td')?>
			Onlineshop
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			49 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			monatlich
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('tr')?>
		<?= Html::beginTag('td')?>
			DHL
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			49 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			monatlich
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('tr')?>
		<?= Html::beginTag('td')?>
			dpd
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			49 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			monatlich
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('tr')?>
		<?= Html::beginTag('td')?>
			Schweizer Post
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			49 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			monatlich
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle">
		<?= Html::endTag('td') ?>
	<?= Html::endTag('tr') ?>
<?= Html::endTag('table') ?>
	</div>

