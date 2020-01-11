<table style="text-align: center;" >
    <tr >
        <div align="center" ><?= $this->Html->link('Adicionar personagem', ['action' => 'add']) ?><div>
        <th class="alignCenterCl" style="color:#A020F0">Id</th>
        <th class="alignCenterCl" style="color:#A020F0">Nome</th>
        <th class="alignCenterCl" style="color:#A020F0">Ações</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($personagens as $personagem): ?>
    <tr>
        <td class="alignCenterCl" ><?= $personagem->Id_personagem ?></td>
        <td class="alignCenterCl" >
            <?= $this->Html->link($personagem->nome, ['action' => 'view', $personagem->Id_personagem]) ?>
        </td>
        
        <td class="alignCenterCl" style="color:#A020F0"> 
            <?= $this->Html->link('Editar', ['action' => 'edit', $personagem->Id_personagem]) ?>
            <?= $this->Form->postLink(
                'Deletar',
                ['action' => 'delete', $personagem->Id_personagem],
                ['confirm' => 'Tem certeza?'])
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>