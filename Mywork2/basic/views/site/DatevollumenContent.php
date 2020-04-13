	<?php
use yii\helpers\Html;
?>
<div class="form-bill">
	<h2 class="fs-title">Datenvollumen</h2>
							
<?= Html::beginTag('table', ['class' => 'table']) ?>
	<?= Html::beginTag('tr')?>
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
	
		<?= Html::beginTag('tr')?>
		<?= Html::beginTag('td')?>
			Eingestellte Artikel pro 5.000 Artikel 
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			5 &euro;
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
			Angebundene Filialen pro Filiale 
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			5 &euro;
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
<?= Html::endTag('table') ?>
</div>
