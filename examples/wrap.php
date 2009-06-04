<?php
header('Content-type: text/plain');

$xml = <<<XML
<html>
<head></head>
<body>
  <p>Hello</p>
  <p>cruel</p>
  <p>World</p>
</body>
</html>
XML;

require_once('../FluentDOM.php');

echo FluentDOM($xml)
  ->find('//p')
  ->wrap('<div class="outer"><div class="inner"></div></div>')
  ->document
  ->saveXML();
?>