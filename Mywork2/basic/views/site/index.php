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
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2" id="conten-step">
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
							  <?= $this->render('modelContent.php')?>
							 	 <input type="button" name="next" class="next action-button"
									value="Next Step" />
							</fieldset>
							<fieldset>
							  <?= $this->render('AnbindungContent.php')?>
								<input type="button" name="previous"
									class="previous action-button-previous" value="Previous"
									/> <input type="button" name="next"
									class="next action-button" value="Next Step" />
							</fieldset>
							<fieldset>
							 <?= $this->render('featureContent.php')?>
							 	<input type="button" name="previous"
									class="previous action-button-previous" value="Previous" /> 
									<input type="button" name="next" class="next action-button"
									value="Next Step" />
							</fieldset>
							<fieldset>
							 <?= $this->render('DatevollumenContent.php')?>
								<input type="button" name="previous"
									class="previous action-button-previous" value="Previous" />		
									<input type="button" name="next" class="next action-button"
									value="Next Step" />
							</fieldset>
							<fieldset>
							 <?= $this->render('servicesContent.php')?>
								<input type="button" name="previous"
									class="previous action-button-previous" value="Previous" />
									 <input
									type="submit" name="make_download" class="next action-button"value="Download" />
									<?=Html::button('Create PDF', ['class' => 'pdf-btn','onclick'=> 'js:document.location.href="index.php?r=site/pdf"','id'=>'22']); ?>
					
							</fieldset>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
