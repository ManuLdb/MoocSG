<?php
	get_header();
?>


<form action="" method="">
 
	<div class="container" id="question1">
	    <div class="question col-md-12">
	      <div class="texte_container col-md-5">
	        <h2>Question 1</h2>
	          <p>Intitulé de la question :</p>
	          <p><input type="radio" id="r1" name="q1">Réponse 1 (vraie)</p>
	          <p><input type="radio" id="r2" name="q1">Réponse 2 (fausse)</p>
	          <p><input type="radio" id="r3" name="q1">Réponse 3 (fausse)</p>
	          <a href="#" class="button_answer" id="a1">Confirmer</a>
	      </div>
	      <div class="col-md-7 answer_img_container">
	      	<img class="question_img" id="img1" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/FAQ.png" alt="Question" />
	      	<img class="answer_img" id="img2" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check.png" alt="Bonne réponse" />
	      	<img class="answer_img" id="img3" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check_wrong.png" alt="Mauvaise réponse" />
	      </div>
	      <div id="answer1" class="col-md-12 answers text-center">
	      	<p class="reponse" id="reponse1">La réponse rédigée</p>
	      </div>
	      <div id="next1" class="col-md-12 text-center next">
	      	<a href="#" class="button_answer" id="n1">Suivant</a>
	      </div>
	    </div>
	</div>

    <div class="container" id="question2">
	    <div class="question col-md-12">
	      <div class="texte_container col-md-5">
	        <h2>Question 2</h2>
	          <p>Intitulé de la question :</p>
	          <p><input type="radio" id="r4" name="q1">Réponse 1 (fausse)</p>
	          <p><input type="radio" id="r5" name="q1">Réponse 2 (vraie)</p>
	          <p><input type="radio" id="r6" name="q1">Réponse 3 (fausse)</p>
	          <a href="#" class="button_answer" id="a2">Confirmer</a>
	      </div>
	      <div class="col-md-7 answer_img_container">
	      	<img class="question_img" id="img4" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/FAQ.png" alt="Question" />
	      	<img class="answer_img" id="img5" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check.png" alt="Bonne réponse" />
	      	<img class="answer_img" id="img6" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check_wrong.png" alt="Mauvaise réponse" />
	      </div>
	      <div id="answer2" class="col-md-12 answers text-center">
	      	<p class="reponse" id="reponse2">La réponse rédigée</p>
	      </div>
	      <div id="next2" class="col-md-12 text-center next">
	      	<a href="#" class="button_answer" id="n2">Suivant</a>
	      </div>
	    </div>
    </div>

	<div class="container" id="question3">
	    <div class="question col-md-12">
	      <div class="texte_container col-md-5">
	        <h2>Question 3</h2>
	          <p>Intitulé de la question :</p>
	          <p><input type="radio" id="r7" name="q1">Réponse 1 (fausse)</p>
	          <p><input type="radio" id="r8" name="q1">Réponse 2 (fausse)</p>
	          <p><input type="radio" id="r9" name="q1">Réponse 3 (vraie)</p>
	          <a href="#" class="button_answer" id="a3">Confirmer</a>
	      </div>
	      <div class="col-md-7 answer_img_container">
	      	<img class="question_img" id="img7" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/FAQ.png" alt="Question" />
	      	<img class="answer_img" id="img8" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check.png" alt="Bonne réponse" />
	      	<img class="answer_img" id="img9" src="<?php bloginfo('url'); ?>/wp-content/themes/Questionnaire_SG/img/Check_wrong.png" alt="Mauvaise réponse" />
	      </div>
	      <div id="answer3" class="col-md-12 answers text-center">
	      	<p class="reponse" id="reponse1">La réponse rédigée</p>
	      </div>
	      <div id="next3" class="col-md-12 text-center next">
	      	<a href="#" class="button_answer" id="n3"><button type="submit">Suivant</button></a>
	      </div>
	    </div>
	</div>

</form>


<?php
	get_footer();
?>