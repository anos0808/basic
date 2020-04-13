<?php
use yii\helpers\Html;

?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet" />
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
							<ul id="progressbar">
								<li class="active" id="model"><strong>Model</strong></li>
								<li id="anbindung"><strong>Anbindung</strong></li>
								<li id="Feature"><strong>Feature</strong></li>
								<li id="Feature"><strong>Datenvollmen</strong></li>
								<li id="confirm"><strong>Services</strong></li>
							</ul>
							<!-- fieldsets -->
							<fieldset>
									
							<div class="form-bill">
							<h2 class="fs-title">Model</h2>
							
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
		Einrichtungspauschale
	<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		299 €
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
		Online Einführungs-Schulung (2 Stunden)
	<?= Html::endTag('td') ?>
		<?= Html::beginTag('td')?>
		199 €
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
							<input type="button" name="next" class="next action-button"value="Next Step" />
							<?php 
							echo HTML::ajaxSubmitButton('Save',
							    Yii::app()->createUrl('site/NewrefList',
							        array("id" => 1))
							  );
							?>
							</fieldset>
							<fieldset>
								<div class="form-bill">
									<h2 class="fs-title">anbindung </h2>
						<?= Html::label('Amazon', '') ?>
							<?= Html::label(':   56$', '') ?>
							<?= Html::checkbox('Amazon', 'xxx') ?>
								</div>
								<input type="button" name="previous"
									class="previous action-button-previous" value="Previous"
									style="" /> <input type="button" name="next"
									class="next action-button" value="Next Step" />
									<?= Html::a(Yii::t('app', 'Search'), ['search','stop'=>1,'stops'=>2], ['class' => 'btn btn-success']) ?>
							</fieldset>
							<fieldset>
								<div class="form-bill">
								<h2 class="fs-title">Feature </h2>
								<?= Html::label('Datenanreichung', ':    49$') ?>
								<?= Html::label(':  59$', '') ?>
								<?= Html::checkbox('Datenanreichung', 'xxx') ?>
	
								</div>
								<input type="button" name="previous"
									class="previous action-button-previous" value="Previous" /> 
									<input type="button" name="next" class="next action-button"
									value="Next Step" />
							</fieldset>
							<fieldset>
								<div class="form-bill">
								<h2 class="fs-title">Datenvollumen</h2>
								<?= Html::label('Datenanreichung', ':    49$') ?>
								<?= Html::label(':  59$', '') ?>
								<?= Html::checkbox('Datenanreichung', 'xxx') ?>
								</div>
								<input type="button" name="previous"
									class="previous action-button-previous" value="Previous" />		
									<input type="button" name="next" class="next action-button"
									value="Next Step" />
							</fieldset>
						<fieldset>
								<div class="form-bill">
									<h2 class="fs-title">Services</h2>
								<?= Html::label('Telefon Support pro Minute', ':    2 $') ?>
								<?= Html::label(':  56$', '') ?>
								<?= Html::checkbox('Telefon Support pro Minute', '') ?>
								</div>
								<input type="button" name="previous"
									class="previous action-button-previous" value="Previous" />
									 <input
									type="submit" name="make_Pdf" class="next action-button"value="Create PDF" />
									<?=Html::button('Create PDF', ['class' => 'pdf-btn','onclick'=> 'js:document.location.href="index.php?r=site/pdf"','id'=>'22']); ?>
									 <input
									type="button" name="make_download" class="next action-button"
									value="Download" />
							
							</fieldset>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
