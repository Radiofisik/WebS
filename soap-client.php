<?php
$client     = new SoapClient("./catalog.wsdl");
$catalogId      = 'catalog2';
$response       = $client->getCatalogEntry($catalogId,"3");
echo $response;
?>
http://stackoverflow.com/questions/11165142/soap-error-fatal-error-uncaught-soapfault-exception-http-could-not-connect-t