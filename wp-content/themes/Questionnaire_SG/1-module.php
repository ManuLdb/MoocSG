
<?php
	session_start();
	get_header();
	// Template Name: module
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
	        	<h3>Les attentes des clients du pilotage financier</h3><br><br><br><br><br>
	        	<div class="col-md-5 col-md-offset-1 col-xs-12 text-center">
	        		<img src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/fauteuil.png">
	        	</div>

	        	<div class="col-md-5 col-xs-12">
					<a href="http://localhost/moocsg/premquestion/"><button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">Le fonctionnement d'une Banque</button></a><br>
					<a href="http://localhost/moocsg/premquestion/"><button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">L'Organisation du Groupe </button></a><br>
					<a href="http://localhost/moocsg/premquestion/"><button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">La Stratégie du Groupe SG</button></a><br>
					<a href="http://localhost/moocsg/premquestion/"><button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">La Filière Finance SG</button></a><br>
					<a href="http://localhost/moocsg/premquestion/"><button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">Le Rôle du Pilotage Financier</button></a><br>
	        	</div>
	        	<div class="col-md-1"></div>

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