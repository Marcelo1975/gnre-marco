<?php
$xml = '<?xml version="1.0" encoding="utf-8" standalone="no"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
<soap:Header>
    <gnreCabecMsg xmlns="http://www.gnre.pe.gov.br/webservice/GnreLoteRecepcao">
        <versaoDados>2.00</versaoDados>
    </gnreCabecMsg>
</soap:Header>
<soap:Body>
    <gnreDadosMsg xmlns="http://www.gnre.pe.gov.br/webservice/GnreLoteRecepcao">
        <TLote_GNRE xmlns="http://www.gnre.pe.gov.br">
            <guias>
                <TDadosGNRE>
                    <c01_UfFavorecida>PE</c01_UfFavorecida>
                    <c02_receita>100145</c02_receita>
                    <c26_produto></c26_produto>
                    <c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente>
                    <c03_idContribuinteEmitente>
                        <CNPJ>47368253000186</CNPJ>
                    </c03_idContribuinteEmitente>
                    <c06_valorPrincipal>0.01</c06_valorPrincipal>
                    <c14_dataVencimento>2019-08-21</c14_dataVencimento>
                    <c15_convenio>49-Protocolo</c15_convenio>
                    <c16_razaoSocialEmitente>ECIN EMPRESARIAL</c16_razaoSocialEmitente>
                    <c18_enderecoEmitente>AV ESTER 192</c18_enderecoEmitente>
                    <c19_municipioEmitente>12803</c19_municipioEmitente>
                    <c20_ufEnderecoEmitente>SP</c20_ufEnderecoEmitente>
                    <c21_cepEmitente>13150029</c21_cepEmitente>
                    <c22_telefoneEmitente>1938722867</c22_telefoneEmitente>
                    <c34_tipoIdentificacaoDestinatario></c34_tipoIdentificacaoDestinatario>
                    <c35_idContribuinteDestinatario>
                        <CNPJ></CNPJ>
                    </c35_idContribuinteDestinatario>
                    <c37_razaoSocialDestinatario></c37_razaoSocialDestinatario>
                    <c38_municipioDestinatario></c38_municipioDestinatario>
                    <c33_dataPagamento>2019-08-21</c33_dataPagamento>
                    <c05_referencia>
                        <mes>08</mes>
                        <ano>2019</ano>
                    </c05_referencia>
                    <c39_camposExtras>
                        <campoExtra>
                            <codigo>9</codigo>
                            <tipo>T</tipo>
                            <valor>TESTE</valor>
                        </campoExtra>
                    </c39_camposExtras>
                </TDadosGNRE>
            </guias>
        </TLote_GNRE>
    </gnreDadosMsg>
</soap:Body>
</soap:Envelope>';

$function = 'processar';

try {
$opt = array('trace' => true,'encoding' => 'utf8', 'soap_version' => SOAP_1_2);
$cliente = new SoapClient(null, array(
    'location' => 'http://www.testegnre.pe.gov.br/gnreWS/services/GnreLoteRecepcao?wsdl',
    'uri' => 'http://www.testegnre.pe.gov.br/'));
 
$result = $cliente->processar($xml);
    echo "<pre>";
    print_r($result);
} catch (SoapFault $e) {
    echo $e->getMessage();
}
?>