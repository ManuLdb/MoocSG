

$(document).ready(function()
{

  //Questionnaire
  $("#question2").hide();
  $("#question3").hide();
  $(".answers").hide();
  $(".answer_img").hide();
  $('.next').hide();


   
});

$('#a1').click(
          function() { 
            $('.answers').show(200);
            if ($(':radio[id="r1"]:checked').val()) {
              $('#img1').hide();
              $('#img2').show(200);
              $('#img3').hide();
              $('#answer1').css('background', '#0F0');
              $('.reponse').css('color', '#FFF');
            }  
            else{
              $('#img1').hide();
              $('#img2').hide();
              $('#img3').show(200);
              $('#answer1').css('background', '#F00');
              $('.reponse').css('color', '#FFF');
            }
            $('#next1').show(200);
            $('#a1').hide();
          });

   $('#n1').click(
          function() {
            $('#question1').hide();
            $('#question2').show(200);
          });

   $('#a2').click(
          function() { 
            $('.answers').show(200);
            if ($(':radio[id="r5"]:checked').val()) {
              $('#img4').hide();
              $('#img5').show(200);
              $('#img6').hide();
              $('#answer2').css('background', '#0F0');
              $('.reponse').css('color', '#FFF');
            }  
            else{
              $('#img4').hide();
              $('#img5').hide();
              $('#img6').show(200);
              $('#answer2').css('background', '#F00');
              $('.reponse').css('color', '#FFF');
            }
            $('#next2').show(200);
            $('#a2').hide();
          });

    $('#n2').click(
          function() {
            $('#question2').hide();
            $('#question3').show(200);
          });

    $('#a3').click(
          function() { 
            $('.answers').show(200);
            if ($(':radio[id="r9"]:checked').val()) {
              $('#img7').hide();
              $('#img8').show(200);
              $('#img9').hide();
              $('#answer3').css('background', '#0F0');
              $('.reponse').css('color', '#FFF');
            }  
            else{
              $('#img7').hide();
              $('#img8').hide();
              $('#img9').show(200);
              $('#answer2').css('background', '#F00');
              $('.reponse').css('color', '#FFF');
            }
            $('#next3').show(200);
            $('#a3').hide();
          });