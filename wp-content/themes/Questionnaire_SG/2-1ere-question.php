
<?php
	session_start();
	get_header();
	// Template Name: 1ère question
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
		    		<div class="col-md-12 col-xs-12">
		    			<a href="#"><img style="margin-left : 20px; margin-top:10px; float : left;" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/Elements/Home.png" alt="Accueil" class="img-responsive" /></a>
		    			<img style="margin-right : 20px; margin-top:10px; margin-bottom:20px; float :right;" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/Elements/Score.png" alt="Accueil" class="img-responsive" />
		    		</div>
			    		<h2 class="text-center">THÈME 1</h2>
			        	<h3 class="text-center">Les attentes des clients du pilotage financier</h3>

		        	<div class="col-md-5 col-md-offset-1" style="margin-top:20px;">
		        		<img src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/fauteuil.png">
		        	</div> <!-- 6 (gauche fauteuil) -->

		        	<div class="col-md-5 col-xs-12 col-md-offset-1" style="margin-top : 60px;">
		        	<div class="col-md-6 col-xs-5 BINGO">
		        			<a href="http://localhost/moocsg/proposition/" class="btn btn-danger btn-lg boutonrouge boutonjouer">BINGO</a>
		        	</div>
		        	<div class="col-md-6 col-xs-5 CASH">
		        			<a href="http://localhost/moocsg/proposition/" class="btn btn-danger btn-lg boutonrouge boutonjouer">CASH</a>
		        	</div> 
		        	<div class="col-md-9 col-xs-12 text-center"><br><a href="http://localhost/moocsg/proposition/" class="btn btn-danger btn-lg boutonrouge boutonjouer">FLASH</a></div>
					</div>
		        	<div class="col-md-8 col-xs-12 zonequestion col-md-offset-2" style="padding:8px !important; margin-top : 20px;">
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