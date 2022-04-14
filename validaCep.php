<?php
function validaCep($cep){
    // formatar o cep , removendo caracteres não numerico
    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "http://viacep.com.br/ws/$cep/xml/";

    $xml = @simplexml_load_file($url);
    return $xml;
}
//var_dump(get_endereco("13184556"));
    $endereco = (validaCep(@$_POST['cep']));
?>