	<?php
use yii\helpers\Html;
?>
<div class="form-bill">
	<h2 class="fs-title">Model</h2>
							
<?= Html::beginTag('table', ['class' => 'table','id'=>'table']) ?>
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
	
		<?= Html::endTag('tr') ?>
		<?= Html::beginTag('tr',['id'=>'bigtr'])?>
		<?= Html::beginTag('td')?>
			Einrichtungspauschale
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			299 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			einmalig
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle" id="a">
		<?= Html::endTag('td') ?>
		<?= Html::endTag('tr') ?>
		<?= Html::endTag('tr') ?>
		<?= Html::beginTag('tr',['id'=>'bigtr'])?>
		<?= Html::beginTag('td')?>
			Online Einführungs-Schulung (2 Stunden)
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			199 &euro;
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
			einmalig
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		<?= Html::textInput('', '', ['id' => 'menge']) ?>
		<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
	   <input type="checkbox" data-toggle="toggle" id="test">
		<?= Html::endTag('td') ?>
	<?= Html::endTag('tr') ?>
<?= Html::endTag('table') ?>
</div>
<<script type="text/javascript">
0

$("#a").on('change', function() {
        if ($(this).is(':checked')) {
            $(this).attr('value', 'true');
            alert($(this).val());
        }
        else {
           $(this).attr('value', 'false');
           alert($(this).val());
        }
    });
</script>
