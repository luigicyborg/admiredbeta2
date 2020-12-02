//gif loader animation
var ajax_load="<img class='loading' src='img/ajax-loader.gif'>"
//
//  This to submit the form through JS   [ I have tested this... this works when the form is not loaded through ajax..... ]

function submitTestResult(){
 $('form#myTestForm').submit(function (event){
 //prevent it from posting right away.
 event.preventDefault();
 
 var url=$(this).attr('action');
 var loadTestChart = "ajax/chartJava.php";
 var testData=$(this).serialize();
 
 $.post(url, testData, function(resultData){
 $("#result").html(resultData).load(loadTestChart, function(){
 drawChart();
 });
 });
 return false
 });
 }

var loadForm= "formDoc.php"
$("#startSomething").click(function(){
      $("#loadContent").html(ajax_load).load(loadForm, function(){
            submitTestResult();
      });
});
