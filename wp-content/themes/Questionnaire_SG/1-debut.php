
<?php
	session_start();
	get_header();
	// Template Name: debut
?>
<div class="col-md-12" id="container">
	<!-- <div class="row"> --> <!-- Row vidéo -->
	<!--	<div class="col-md-2">
		</div>

		<div class="col-md-4">
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/0JAyi66CmlA" frameborder="0" allowfullscreen></iframe>
			<h4 class="text-center titrevideo">T1M1: How a bank operates</h4>
		</div>

		<div class="col-md-2 playlist">
			<h3 class="text-center">Vidéos</h3>
			<ul><li>
				<p>Qu’est-ce qu’une banque ?</p>
			</li>
			<li>
				<p>La stratégie du Groupe SG</p>
			</li>
			<li>
				<p>Le rôle du contrôle de gestion</p>
			</li>
			<li>
				<p>Les ratios de pilotage</p>
			</li>
			<li>
				<p>Les enjeux du pilotage intégré du Groupe</p>
				<p>Aaaa</p>
			</li>
			<li>
				<p>Bbbbb</p>
			</li>
			<li>
				<p>Cccc</p>
			</li>
			<li>
				<p>Dddddd</p>
			</li>
			<li>
				<p>Eeee</p>
			</li></ul>
		</div>

		<div class="col-md-2">
		</div>
	</div> --> <!-- /Row vidéo -->

	<form action="score.php" method="post">
	<input type="number" id="score_02" value="0" name="score_hide" style="display:none;" />

	<div class="container" id="question1">
	    <div class="question col-md-12 pagedebut">
	    	<div class="question col-md-12">
	    	<div class="texte_container col-md-12 col-xs-12 ">
	    	<h2>THÈME 1</h2>
	        	<h3>Les attentes des clients du pilotage financier</h3>
	        	<div class="col-md-4 col-xs-6 col-xs-offset-3">
	        		<img style="position:relative;z-index:2;" class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/Elements/fauteuil.png" alt="Fauteuil" />
	        	</div>
	        	<div class="col-md-4 col-xs-12 text-center" style="margin-top:100px;"><a href="http://localhost/moocsg/module/" class="btn btn-danger btn-lg boutonrouge boutonjouer">JOUER</a></div>
				
	    	</div>
	    	<div class="col-md-12 col-xs-12" style="background-color: #AD0011; height: 120px; position : relative; top:-80px; z-index:1;">
	    	<div class="col-md-12 text-right col-xs-12"><a class="btn btn-danger boutonregles" style="margin-top : 50px !important; margin-right : 50px !important;" data-target="#regles" data-toggle="modal">Règles du jeu</a></div>
	    	</div>
	    	</div>
		</div>

	</div>


</form>


	</div> <!-- /Row jeu -->
</div> <!-- /container -->

<?php
	get_footer();
?>