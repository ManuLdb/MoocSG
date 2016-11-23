

$(document).ready(function()
{

  //Questionnaire
  $("#question1 .question .texte_container p:gt(0)").hide();
  $("#indice_01").hide();
  $("#question_simple_01").hide();
  $("#a1").hide();
  $("#ai1").hide();
  $("#question2").hide();
  $("#question3").hide();
  $(".answers").hide();
  $(".answer_img").hide();
  $('.next').hide();


   
});

//Vérification erreur ou non flash
var error_on_flash = 0;

//Choix Flash
$("#flash_01").click(function(){
  $("#choix_joker_01").hide();
  $("#question1 .question .texte_container p:gt(3)").show(200);
  $("#question1 .question .texte_container p:lt(3)").hide();
  $("#ai1").show(200);
  $("#indice_01").show(200);
});
$("#flash_02").click(function(){
  $("#choix_joker_02").hide();
  $("#question2 .question .texte_container p:gt(3)").show(200);
  $("#question2 .question .texte_container p:lt(3)").hide();
  $("#ai2").show(200);
  if(error_on_flash == 0)
  {
    $("#indice_02").show(200);
  }
  else
  {
    $("#indice_02").hide();
  }
});
$("#flash_03").click(function(){
  $("#choix_joker_03").hide();
  $("#question3 .question .texte_container p:gt(3)").show(200);
  $("#question3 .question .texte_container p:lt(3)").hide();
  $("#ai3").show(200);
  if(error_on_flash == 0)
  {
    $("#indice_03").show(200);
  }
  else
  {
    $("#indice_03").hide();
  }
});

//Choix joker
$("#bingo_01").click(function(){
  $("#choix_joker_01").hide();
  $("#question1 .question .texte_container p:first").hide();
  $("#question_simple_01").show(200);
  $("#question1 .question .texte_container p:gt(0)").show(200);
  $("#question1 .question .texte_container p:gt(3)").hide();
  $("#a1").show(200);
});
$("#bingo_02").click(function(){
  $("#choix_joker_02").hide();
  $("#question2 .question .texte_container p:first").hide();
  $("#question_simple_02").show(200);
  $("#question2 .question .texte_container p:gt(0)").show(200);
  $("#question2 .question .texte_container p:gt(3)").hide();
  $("#a2").show(200);
});
$("#bingo_03").click(function(){
  $("#choix_joker_03").hide();
  $("#question3 .question .texte_container p:first").hide();
  $("#question_simple_03").show(200);
  $("#question3 .question .texte_container p:gt(0)").show(200);
  $("#question3 .question .texte_container p:gt(3)").hide();
  $("#a3").show(200);
});

//Initialisation score
var score = 0;
var txt_score = " point.";
document.getElementById("score").innerHTML = score + txt_score;
function updatescore() 
{
    if((score >= -1) && (score <= 1))
    {
      txt_score = " point."
    }
    else
    {
      txt_score = " points."
    }
    document.getElementById("score").innerHTML = score + txt_score;
}

//Compteur
var cpt = 15 ;
var x;
 
function decompte()
{
    if(cpt>=0)
    {
        if(cpt>1)
        {
            var sec = " secondes.";
        } else {
            var sec = " seconde.";
        }
        document.getElementById("Crono").innerHTML = "Vous n'avez plus que " + cpt + sec ;
        cpt-- ;
        x = setTimeout("decompte()",1000) ;
    }
    else
    {
        clearTimeout(x) ;
    }
}

//Confirmation réponses Flash
$('#ai1').click(
          function() { 
            $('.answers').show(200);
            $('#reponse1').hide();
            if ($(':radio[id="i1"]:checked').val()) {
              $('#img1').hide();
              $('#img2').show(200);
              $('#img3').hide();
              $('#answer1').css('background', '#0F0');
              $('.reponse').css('color', '#FFF');
              score = score+3;
              updatescore();
              error_on_flash = 0;
            }  
            else{
              $('#img1').hide();
              $('#img2').hide();
              $('#img3').show(200);
              $('#answer1').css('background', '#F00');
              $('.reponse').css('color', '#FFF');
              error_on_flash = 1;
            }
            $('#next1').show(200);
            $('#ai1').hide();
          });
$('#ai2').click(
          function() { 
            $('.answers').show(200);
            $('#reponse2').hide();
            if ($(':radio[id="i5"]:checked').val()) {
              $('#img4').hide();
              $('#img5').show(200);
              $('#img6').hide();
              $('#answer2').css('background', '#0F0');
              $('.reponse').css('color', '#FFF');
              score = score+3;
              updatescore();
              error_on_flash = 0;
            }  
            else{
              $('#img4').hide();
              $('#img5').hide();
              $('#img6').show(200);
              $('#answer2').css('background', '#F00');
              $('.reponse').css('color', '#FFF');
              error_on_flash = 1;
            }
            $('#next2').show(200);
            $('#ai2').hide();
          });
$('#ai3').click(
          function() { 
            $('.answers').show(200);
            $('#reponse3').hide();
            if ($(':radio[id="i9"]:checked').val()) {
              $('#img4').hide();
              $('#img5').show(200);
              $('#img6').hide();
              $('#answer3').css('background', '#0F0');
              $('.reponse').css('color', '#FFF');
              score = score+3;
              updatescore();
              error_on_flash = 0;
            }  
            else{
              $('#img4').hide();
              $('#img5').hide();
              $('#img6').show(200);
              $('#answer3').css('background', '#F00');
              $('.reponse').css('color', '#FFF');
              error_on_flash = 1;
            }
            $('#next3').show(200);
            $('#ai3').hide();
          });

//Confirmation réponses Bingo
$('#a1').click(
          function() { 
            $('.answers').show(200);
            $('#reponse1i').hide();
            if ($(':radio[id="r1"]:checked').val()) {
              $('#img1').hide();
              $('#img2').show(200);
              $('#img3').hide();
              $('#answer1').css('background', '#0F0');
              $('.reponse').css('color', '#FFF');
              score = score+1;
              updatescore();
            }  
            else{
              $('#img1').hide();
              $('#img2').hide();
              $('#img3').show(200);
              $('#answer1').css('background', '#F00');
              $('.reponse').css('color', '#FFF');
              score = score-1;
              updatescore();
            }
            $('#next1').show(200);
            $('#a1').hide();
          });

   $('#a2').click(
          function() { 
            $('.answers').show(200);
             $('#reponse2i').hide();
            if ($(':radio[id="r5"]:checked').val()) {
              $('#img4').hide();
              $('#img5').show(200);
              $('#img6').hide();
              $('#answer2').css('background', '#0F0');
              $('.reponse').css('color', '#FFF');
              score = score+1;
              updatescore();
            }  
            else{
              $('#img4').hide();
              $('#img5').hide();
              $('#img6').show(200);
              $('#answer2').css('background', '#F00');
              $('.reponse').css('color', '#FFF');
              score = score-1;
              updatescore();
            }
            $('#next2').show(200);
            $('#a2').hide();
          });

    $('#a3').click(
          function() { 
            $('.answers').show(200);
            $('#reponse3i').hide();
            if ($(':radio[id="r9"]:checked').val()) {
              $('#img7').hide();
              $('#img8').show(200);
              $('#img9').hide();
              $('#answer3').css('background', '#0F0');
              $('.reponse').css('color', '#FFF');
              score = score+1;
              updatescore();
            }  
            else{
              $('#img7').hide();
              $('#img8').hide();
              $('#img9').show(200);
              $('#answer3').css('background', '#F00');
              $('.reponse').css('color', '#FFF');
              score = score-1;
              updatescore();
            }
            $('#next3').show(200);
            $('#a3').hide();
          });

//Boutons "Suivant"

$('#n1').click(
          function() {
            $('#question1').hide();
            $("#question2 .question .texte_container p:gt(0)").hide();
            $("#a2").hide();
            $("#ai2").hide();
            $("#question2").show(200);
            $("#indice_02").hide();
            $("#question_simple_02").hide();
          });

    $('#n2').click(
          function() {
            $('#question2').hide();
            $("#question3 .question .texte_container p:gt(0)").hide();
            $("#a3").hide();
            $("#ai3").hide();
            $("#question3").show(200);
            $("#indice_03").hide();
            $("#question_simple_03").hide();
          });