
<html><body>

<?php
function php_func(){
echo "Stay Safe";
}
?>
<div id="demo"></div>
<a onclick="clickMe()"> Click </a>
<script>
  

  
function clickMe(){
  document.getElementById("demo").innerHTML = "<?php php_func(); ?>";
}
</script>
  
  </body>
  </html>

