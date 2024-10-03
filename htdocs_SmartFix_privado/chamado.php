<?php

class chamado{

private $cha_id;
private $cha_dt_inicio;
private $cla_nome;
private $itm_nome;
private $cha_assunto;
private $maq_num;
private $sl_num;
private $bl_nome;
private $cha_desc;
private $cha_sit;
private $cha_dt_fim;
private $cha_notes;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

}

?>