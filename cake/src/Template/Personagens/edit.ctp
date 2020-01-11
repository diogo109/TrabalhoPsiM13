<!-- File: src/Template/Articles/edit.ctp -->

<h1>Editar personagens</h1>
<?php
    echo $this->Form->create($personagens);
    echo $this->Form->input('Id_personagem');
    echo $this->Form->input('nome', ['rows' => '3']);
   
    echo $this->Form->button(__('Salvar artigo'));
    echo $this->Form->end();
?>