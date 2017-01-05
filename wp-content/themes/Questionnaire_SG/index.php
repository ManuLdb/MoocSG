
<?php
	get_header();
?>
<div class="col-md-12" id="container">
	<div class="row"> <!-- Row vidéo -->
		<div class="col-md-2">
		</div>
		
		<div class="col-md-2 playlist">
			<h3>Score</h3>
	 		<p>Votre score est de <strong id="score" name="score_total"></strong></p>
	 		<a class="btn btn-default" data-target="#regles" data-toggle="modal">Règles</a>
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
	</div> <!-- /Row vidéo -->

	<form action="score.php" method="post">
	<div class="container" id="question1">
	    <div class="question col-md-12">
	      <div class="texte_container col-md-5">
	        <h2>Question 1</h2>
	          <div id="question_simple_01">Question plus simple</div>
	          <p>Intitulé de la question :</p>
	          <div id="cash_container_01">
		          <div id="Crono_01"></div>
		          <div id="ReponseCash_01" class="cash"><input type="text" id="reponse_cash_01" /></div>
		          <a class="button_answer" id="ac1">Confirmer</a>
	          </div>
	          <p><input type="radio" id="r1" name="q1">Réponse 1 (vraie)</p>
	          <p><input type="radio" id="r2" name="q1">Réponse 2 (fausse)</p>
	          <p><input type="radio" id="r3" name="q1">Réponse 3 (fausse)</p>
	          <p><input type="radio" id="r4" name="q1">Réponse 4 (fausse)</p>
	          <p><input type="radio" id="i1" name="q1">Intrus (vraie)</p>
	          <p><input type="radio" id="i2" name="q1">Texte (fausse)</p>
	          <p><input type="radio" id="i3" name="q1">Texte (fausse)</p>
	          <div id="indice_01" class="indices">Indice</div>
	          <a class="button_answer" id="a1">Confirmer</a>
	          <a class="button_answer" id="ai1">Confirmer</a>
	      </div>
	      <div class="col-md-7 answer_img_container">
	      	<img class="question_img" id="img1" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/FAQ.png" alt="Question" />
	      	<img class="answer_img" id="img2" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check.png" alt="Bonne réponse" />
	      	<img class="answer_img" id="img3" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check_wrong.png" alt="Mauvaise réponse" />
	      </div>
	      <div class="col-md-12 choix_joker" id="choix_joker_01">
	      	<div class="col-md-4">
	      		<a title="Cash" id="cash_01" onclick="decompte01();">Cash</a>
	      	</div>
	      	<div class="col-md-4">
	      		<a title="Flash" id="flash_01">Flash</a>
	      	</div>
	      	<div class="col-md-4">
	      		<a title="Bingo" id="bingo_01">Bingo</a>
	      	</div>
	      </div>
	      <div id="answer1" class="col-md-12 answers text-center">
	      	<p class="reponse" id="reponse1c">La réponse rédigée pour Cash</p>
	      	<p class="reponse" id="reponse1i">La réponse rédigée pour Flash</p>
	      	<p class="reponse" id="reponse1">La réponse rédigée pour Bingo</p>
	      </div>
	      <div id="next1" class="col-md-12 text-center next">
	      	<a class="button_answer" id="n1">Suivant</a>
	      </div>
	    </div>
	</div>

    <div class="container" id="question2">
	    <div class="question col-md-12">
	      <div class="texte_container col-md-5">
	        <h2>Question 2</h2>
	          <div id="question_simple_02">Question plus simple</div>
	          <p>Intitulé de la question :</p>
	          <div id="cash_container_02">
		          <div id="Crono_02"></div>
		          <div id="ReponseCash_02" class="cash"><input type="text" id="reponse_cash_02" /></div>
		          <a class="button_answer" id="ac2">Confirmer</a>
	          </div>
	          <p><input type="radio" id="r5" name="q2">Réponse 1 (fausse)</p>
	          <p><input type="radio" id="r6" name="q2">Réponse 2 (vraie)</p>
	          <p><input type="radio" id="r7" name="q2">Réponse 3 (fausse)</p>
	          <p><input type="radio" id="r8" name="q1">Réponse 4 (fausse)</p>
	          <p><input type="radio" id="i4" name="q2">Texte (fausse)</p>
	          <p><input type="radio" id="i5" name="q2">Intrus (vraie)</p>
	          <p><input type="radio" id="i6" name="q2">Texte (fausse)</p>
	          <div id="indice_02" class="indices">Indice</div>
	          <a class="button_answer" id="a2">Confirmer</a>
	          <a class="button_answer" id="ai2">Confirmer</a>
	      </div>
	      <div class="col-md-7 answer_img_container">
	      	<img class="question_img" id="img4" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/FAQ.png" alt="Question" />
	      	<img class="answer_img" id="img5" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check.png" alt="Bonne réponse" />
	      	<img class="answer_img" id="img6" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check_wrong.png" alt="Mauvaise réponse" />
	      </div>
	      <div class="col-md-12 choix_joker" id="choix_joker_02">
	      	<div class="col-md-4">
	      		<a title="Cash" id="cash_02" onclick="decompte02();">Cash</a>
	      	</div>
	      	<div class="col-md-4">
	      		<a title="Flash" id="flash_02">Flash</a>
	      	</div>
	      	<div class="col-md-4">
	      		<a title="Bingo" id="bingo_02">Bingo</a>
	      	</div>
	      </div>
	      <div id="answer2" class="col-md-12 answers text-center">
	      	<p class="reponse" id="reponse2c">La réponse rédigée pour Cash</p>
	      	<p class="reponse" id="reponse2i">La réponse rédigée pour Flash</p>
	      	<p class="reponse" id="reponse2">La réponse rédigée pour Bingo</p>
	      </div>
	      <div id="next2" class="col-md-12 text-center next">
	      	<a class="button_answer" id="n2">Suivant</a>
	      </div>
	    </div>
    </div>

	<div class="container" id="question3">
	    <div class="question col-md-12">
	      <div class="texte_container col-md-5">
	        <h2>Question 3</h2>
	          <div id="question_simple_03">Question plus simple</div>
	          <p>Intitulé de la question :</p>
	          <div id="cash_container_03">
		          <div id="Crono_03"></div>
		          <div id="ReponseCash_03" class="cash"><input type="text" id="reponse_cash_03" /></div>
		          <a class="button_answer" id="ac3">Confirmer</a>
	          </div>
	          <p><input type="radio" id="r9" name="q3">Réponse 1 (fausse)</p>
	          <p><input type="radio" id="r10" name="q3">Réponse 2 (fausse)</p>
	          <p><input type="radio" id="r11" name="q3">Réponse 3 (vraie)</p>
	          <p><input type="radio" id="r12" name="q1">Réponse 4 (fausse)</p>
	          <p><input type="radio" id="i7" name="q3">Texte (fausse)</p>
	          <p><input type="radio" id="i8" name="q3">Texte (fausse)</p>
	          <p><input type="radio" id="i9" name="q3">Intrus (vraie)</p>
	          <div id="indice_03" class="indices">Indice</div>
	          <a class="button_answer" id="a3">Confirmer</a>
	          <a class="button_answer" id="ai3">Confirmer</a>
	      </div>
	      <div class="col-md-7 answer_img_container">
	      	<img class="question_img" id="img7" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/FAQ.png" alt="Question" />
	      	<img class="answer_img" id="img8" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check.png" alt="Bonne réponse" />
	      	<img class="answer_img" id="img9" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check_wrong.png" alt="Mauvaise réponse" />
	      </div>
	      <div class="col-md-12 choix_joker" id="choix_joker_03">
	      	<div class="col-md-4">
	      		<a title="Cash" id="cash_03" onclick="decompte03();">Cash</a>
	      	</div>
	      	<div class="col-md-4">
	      		<a title="Flash" id="flash_03">Flash</a>
	      	</div>
	      	<div class="col-md-4">
	      		<a title="Bingo" id="bingo_03">Bingo</a>
	      	</div>
	      </div>
	      <div id="answer3" class="col-md-12 answers text-center">
	      <p class="reponse" id="reponse3c">La réponse rédigée pour Cash</p>
	      <p class="reponse" id="reponse3i">La réponse rédigée pour Flash</p>
	      	<p class="reponse" id="reponse3">La réponse rédigée pour Bingo</p>
	      </div>
	      <div id="next3" class="col-md-12 text-center next">
	      	<a class="button_answer" id="n3"><button type="submit">Suivant</button></a>
	      </div>
	    </div>
	</div>

</form>

		

	</div> <!-- /Row jeu -->
</div> <!-- /container -->

<?php
	get_footer();
?>