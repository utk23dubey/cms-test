<html>
<head></head>
<body id='maincontent'>
<div id="content1">
<?php echo 'hello'; ?>
</div>
<div id="content2">
<?php echo 'helloeveryone'; ?>
</div>
<script type="text/javascript">
var content=1;
function swap_content() {
  document.getElementById('maincontent').innerHTML = document.getElementById('content' + content).innerHTML
  if (content == 1) {
    content = 2;
  } else {
    content = 1;
  }
}
</script>
<a href="#" onclick="swap_content();">Open File</a>
</body>
</html>