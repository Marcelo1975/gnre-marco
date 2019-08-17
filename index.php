<?php
$xml = '<?xml version="1.0" encoding="utf-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://www.w3.org/2003/05/soap-envelope" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
    <SOAP-ENV:Header>
        <NS1:gnreCabecMsg xmlns:NS1="https://www.gnre.pe.gov.br/webservice/GnreLoteRecepcao">
            <versaoDados xmlns="http://www.gnre.pe.gov.br/webservice/GnreLoteRecepcao">1.00</versaoDados>
        </NS1:gnreCabecMsg>
    </SOAP-ENV:Header>
    <SOAP-ENV:Body>
        <processar xmlns=\"https://www.gnre.pe.gov.br/webservice/GnreLoteRecepcao\">
            <gnreDadosMsg>
                <TLote_GNRE xmlns=\"http://www.gnre.pe.gov.br\">
                    <guias>
                        <TDadosGNRE>
                            <c01_UfFavorecida>AC</c01_UfFavorecida>
                            <c02_receita>100099</c02_receita>
                            <c26_produto>44</c26_produto>
                            <c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente>
                            <c03_idContribuinteEmitente>
                                <CNPJ>05744574000198</CNPJ>
                            </c03_idContribuinteEmitente>
                            <c28_tipoDocOrigem>10</c28_tipoDocOrigem>
                            <c04_docOrigem>000666</c04_docOrigem>
                            <c06_valorPrincipal>666</c06_valorPrincipal>
                            <c10_valorTotal>6</c10_valorTotal>
                            <c14_dataVencimento>2012-10-10</c14_dataVencimento>
                            <c16_razaoSocialEmitente>EMPRESA TESTE LTDA</c16_razaoSocialEmitente>
                            <c18_enderecoEmitente>RUA SHIT</c18_enderecoEmitente>
                            <c19_municipioEmitente>02704</c19_municipioEmitente>
                            <c20_ufEnderecoEmitente>PE</c20_ufEnderecoEmitente>
                            <c21_cepEmitente>13456000</c21_cepEmitente>
                            <c22_telefoneEmitente>38892984</c22_telefoneEmitente>
                            <c34_tipoIdentificacaoDestinatario>2</c34_tipoIdentificacaoDestinatario>
                            <c35_idContribuinteDestinatario>
                                <CPF>06010296820</CPF>
                            </c35_idContribuinteDestinatario>
                            <c37_razaoSocialDestinatario>ZULEYD RIBEIRO</c37_razaoSocialDestinatario>
                            <c38_municipioDestinatario>02704</c38_municipioDestinatario>
                            <c33_dataPagamento>2012-09-05</c33_dataPagamento>
                            <c05_referencia>
                                <periodo>1</periodo>
                                <mes>10</mes>
                                <ano>2012</ano>
                            </c05_referencia>
                        </TDadosGNRE>
                        <TDadosGNRE>
                            <c01_UfFavorecida>AC</c01_UfFavorecida>
                            <c02_receita>100099</c02_receita>
                            <c26_produto>44</c26_produto>
                            <c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente>
                            <c03_idContribuinteEmitente><CNPJ>05744574000198</CNPJ>
                        </c03_idContribuinteEmitente>
                        <c28_tipoDocOrigem>10</c28_tipoDocOrigem>
                        <c04_docOrigem>000666</c04_docOrigem>
                        <c06_valorPrincipal>666</c06_valorPrincipal>
                        <c10_valorTotal>6</c10_valorTotal>
                        <c14_dataVencimento>2012-10-10</c14_dataVencimento>
                        <c16_razaoSocialEmitente>EMPRESA TESTE LTDA</c16_razaoSocialEmitente>
                        <c18_enderecoEmitente>RUA SHIT</c18_enderecoEmitente>
                        <c19_municipioEmitente>02704</c19_municipioEmitente>
                        <c20_ufEnderecoEmitente>PE</c20_ufEnderecoEmitente>
                        <c21_cepEmitente>13456000</c21_cepEmitente>
                        <c22_telefoneEmitente>38892984</c22_telefoneEmitente>
                        <c34_tipoIdentificacaoDestinatario>2</c34_tipoIdentificacaoDestinatario>
                        <c35_idContribuinteDestinatario>
                            <CPF>06010296820</CPF>
                        </c35_idContribuinteDestinatario>
                        <c37_razaoSocialDestinatario>ZULEYD RIBEIRO</c37_razaoSocialDestinatario>
                        <c38_municipioDestinatario>02704</c38_municipioDestinatario>
                        <c33_dataPagamento>2012-09-05</c33_dataPagamento>
                        <c05_referencia>
                            <periodo>1</periodo>
                            <mes>10</mes>
                            <ano>2012</ano>
                        </c05_referencia>
                    </TDadosGNRE>
                    <TDadosGNRE>
                        <c01_UfFavorecida>AC</c01_UfFavorecida>
                        <c02_receita>100099</c02_receita>
                        <c26_produto>44</c26_produto>
                        <c27_tipoIdentificacaoEmitente>1</c27_tipoIdentificacaoEmitente>
                        <c03_idContribuinteEmitente>
                            <CNPJ>05744574000198</CNPJ>
                        </c03_idContribuinteEmitente>
                        <c28_tipoDocOrigem>10</c28_tipoDocOrigem>
                        <c04_docOrigem>000666</c04_docOrigem>
                        <c06_valorPrincipal>666</c06_valorPrincipal>
                        <c10_valorTotal>6</c10_valorTotal>
                        <c14_dataVencimento>2012-10-10</c14_dataVencimento>
                        <c16_razaoSocialEmitente>EMPRESA TESTE LTDA</c16_razaoSocialEmitente>
                        <c18_enderecoEmitente>RUA SHIT</c18_enderecoEmitente>
                        <c19_municipioEmitente>02704</c19_municipioEmitente>
                        <c20_ufEnderecoEmitente>PE</c20_ufEnderecoEmitente>
                        <c21_cepEmitente>13456000</c21_cepEmitente>
                        <c22_telefoneEmitente>38892984</c22_telefoneEmitente>
                        <c34_tipoIdentificacaoDestinatario>2</c34_tipoIdentificacaoDestinatario>
                        <c35_idContribuinteDestinatario>
                            <CPF>06010296820</CPF>
                        </c35_idContribuinteDestinatario>
                        <c37_razaoSocialDestinatario>ZULEYD RIBEIRO</c37_razaoSocialDestinatario>
                        <c38_municipioDestinatario>02704</c38_municipioDestinatario>
                        <c33_dataPagamento>2012-09-05</c33_dataPagamento>
                        <c05_referencia>
                            <periodo>1</periodo>
                            <mes>10</mes>
                            <ano>2012</ano>
                        </c05_referencia>
                    </TDadosGNRE>
                </guias>
            </TLote_GNRE>
        </gnreDadosMsg>
    </processar>
</SOAP-ENV:Body>
</SOAP-ENV:Envelope>';

 $url = "https://www.testegnre.pe.gov.br/gnreWS/services/GnreLoteRecepcao?wsdl" ;

 $ch = curl_init ();
 curl_setopt ( $ch , CURLOPT_URL, $url);
 curl_setopt ( $ch , CURLOPT_RETURNTRANSFER, true );
 curl_setopt ( $ch , CURLOPT_SSL_VERIFYPEER, false );
 curl_setopt ( $ch , CURLOPT_SSL_VERIFYHOST, 0 );

 $headers = array ();
 array_push ( $headers , "Tipo de Conteúdo: text / xml; charset = utf-8" );
 array_push ( $headers , "Aceitar: texto / xml" );
 array_push ( $headers , "Cache-Control: no-cache" );
 array_push ( $headers , "Pragma: no-cache" );
 array_push ( $headers , "SOAPAction: https://www.testegnre.pe.gov.br/gnreWS/services/GnreLoteRecepcao?wsdl" );
 if ( $xml != null ) {
    curl_setopt ( $ch , CURLOPT_POSTFIELDS, " $xml " );
    array_push ( $headers , "Content-Length:" . strlen ( $xml ));
 }
 curl_setopt ( $ch , CURLOPT_USERPWD, "user_name:password" );  /* Se necessário */
 curl_setopt ( $ch , CURLOPT_POST, true );
 curl_setopt ( $ch , CURLOPT_HTTPHEADER, $headers );
 $response = curl_exec ( $ch );
 $code = curl_getinfo ( $ch , CURLINFO_HTTP_CODE);
 curl_close ( $ch );
 ?>