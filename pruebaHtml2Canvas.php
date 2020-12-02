<!doctype html>
<html>
 <head>
  <script type="text/javascript" src="js/html2canvas.min.js"></script>
 </head>
 <body>
  <h1>Take screenshot of webpage with html2canvas</h1>
  <div class="container" id='container' >
   <img src='media/Logo-SAS-cuadrado-reduced.png' width='100' height='100'>
   <img src='media/Logo-SAS-cuadrado-reduced.png' width='100' height='100'>
   <img src='media/Logo-SAS-cuadrado-reduced.png' width='100' height='100'>
  </div>
  <input type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();'><br/>

  <!-- Script -->
  <script type='text/javascript'>
  function screenshot(){
    html2canvas(document.getElementById('container')).then(function(canvas) {
    document.body.appendChild(canvas);
   });
  }
  </script>

 </body>
</html>