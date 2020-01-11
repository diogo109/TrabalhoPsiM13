<!-- File: src/Template/Articles/add.ctp -->

<h1>Adicionar Arma</h1>
<?php
    echo $this->Form->create($armas);
    echo $this->Form->input('Id_arma');
    echo $this->Form->input('Tipo_Arma', ['rows' => '3']);
    echo $this->Form->input('Utilidade');
    echo $this->Form->button(__('Salvar artigo'));
    echo $this->Form->end();
?>