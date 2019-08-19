<?php
$xml = simplexml_load_file('main.xml');
echo "<pre>";
print_r($xml);

$header = array(
	"Content-type: text/xml;charset=\"utf-8\"",
	"Accept: text/xml",
	"Cache-Control: no-cache",
	"Pragma: no-cache",
	"SOAPAction: http://www.testegnre.pe.gov.br/gnreWS/services/GnreLoteRecepcao/processar",
);

$soap = curl_init();
curl_setopt($soap, CURLOPT_URL, "http://www.testegnre.pe.gov.br/gnreWS/services/GnreLoteRecepcao?wsdl" );
curl_setopt($soap, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($soap, CURLOPT_TIMEOUT,        10);
curl_setopt($soap, CURLOPT_RETURNTRANSFER, true );
curl_setopt($soap, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($soap, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($soap, CURLOPT_POST,           true );
curl_setopt($soap, CURLOPT_POSTFIELDS,     $xml);
curl_setopt($soap, CURLOPT_HTTPHEADER,     $header);

if(curl_exec($soap) === false) {
    $err = 'Curl error: ' . curl_error($soap);
    curl_close($soap);
    print $err;
} else {
    curl_close($soap);
    print 'Operação concluída sem erros';
}
?>