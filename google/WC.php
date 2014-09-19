<?php
$client=new SoapClient("./GoogleSearch.wsdl");
$google_cache=$client->doGetCachedPage("AIzaSyC8CaPvjc6tkdC6I0Af5tGv2SlZV77srGs","http://mail.ru");
echo base64_decode($google_cache);

?>