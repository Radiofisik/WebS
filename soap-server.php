<?php
function getCatalogEntry($catalogId,$num){

$outstr="<html>
                <head>
                    <title>catalog</title>
                </head>
                <body>
                    <p>$num</p>
                </body>
            </html>";





    return  $outstr;
    }
    ini_set("soap.wsdl_cache_enabled", "0");
    $server = new soapserver("./catalog.wsdl");
    $server->addfunction("getCatalogEntry");
    $server->handle();
	?>