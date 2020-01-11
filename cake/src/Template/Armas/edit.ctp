<!-- File: src/Template/Articles/edit.ctp -->

<h1>Editar personagens</h1>
<?php
    echo $this->Form->create($armas);
    echo $this->Form->input('Id_arma');
    echo $this->Form->input('Tipo_Arma', ['rows' => '3']);
    echo $this->Form->input('Utilidade', ['rows' => '3']);
   
    echo $this->Form->button(__('Salvar artigo'));
    echo $this->Form->end();
?>