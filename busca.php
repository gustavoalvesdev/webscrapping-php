<?php 

libxml_use_internal_errors(true);

$conteudo = file_get_contents('https://dias.dev');

$documento = new DOMDocument();

$documento->loadHTML($conteudo);

$xPath = new DOMXPath($documento);

$domNodeList = $xPath->query('.//span[@itemprop="headline"]');

foreach($domNodeList as $elemento) {

    echo $elemento->textContent . PHP_EOL;


}
