<?php

// campos de tabela
$query = array();
$campos = null;
$campos .= "id int not null auto_increment primary key, ";
$campos .= "idusuario text, ";
$campos .= "idamigo text, ";
$campos .= "idproduto text, ";
$campos .= "quantidade text, ";
$campos .= "preco text, ";
$campos .= "preco_juros text, ";
$campos .= "juros text, ";
$campos .= "parcelamento text, ";
$campos .= "preco_mensal text, ";
$campos .= "venda_concluida text, ";
$campos .= "pago text, ";
$campos .= "data text";

// nome de tabela
$nome_tabela = TABELA_VENDAS;

// query
$query[] = "create table $nome_tabela($campos);";

// cria a tabela
executador_querys($query);

?>