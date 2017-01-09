
<?php
	session_start();
	get_header();
	// Template Name: 4 propositions réponses bingo
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
			    		<h2>Question 1</h2>
			        	<h3>Le fonctionnement d'une banque</h3><br><br><br><br><br>


					<div class="col-md-1"></div>
		        	<div class="col-md-5">
		        		<button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">Le fonctionnement d'une Banque</button><br>
		        		<button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">L'Organisation du Groupe </button><br>
		        		<button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">La Stratégie du Groupe SG</button><br>
		        		<button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">La Filière Finance SG</button><br>
		        		<button type="button" class="btn btn-primary btn-lg btn-block boutonslarges">Le Rôle du Pilotage Financier</button><br>
		        	</div> <!-- 6 (gauche questions) -->

		        	<div class="col-md-2"></div>
		        	<div class="col-md-2">
		        		<img src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/horloge.png">
		        		<a href="http://localhost/moocsg/premquestion/" class="btn btn-danger btn-lg boutonrouge boutonjouer boutonjouercentre">Valider</a>
		        	</div>
		        	<div class="col-md-2"></div>

		        	
		        	<div class="col-md-10 zonequestion">
		        		<h4 class="text-center">Parmi la liste suivante, indiquez les trois produits qui sont commercialisés par le Groupe SG.</h4>
		        	</div>
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