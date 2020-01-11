<table style="text-align: center;" >
    <tr >
        <div align="center" ><?= $this->Html->link('Adicionar Arma', ['action' => 'add']) ?><div>
        <th class="alignCenterCl" style="color:#A020F0">Id</th>
        <th class="alignCenterCl" style="color:#A020F0">Tipo de arma</th>
        <th class="alignCenterCl" style="color:#A020F0">Utilidade</th>
        <th class="alignCenterCl" style="color:#A020F0">Ações</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($armas as $arma): ?>
    <tr>
        <td class="alignCenterCl" ><?= $arma->Id_arma ?></td>
        <td class="alignCenterCl" >
            <?= $this->Html->link($arma->Tipo_arma, ['action' => 'view', $arma->Id_arma]) ?>
        </td>
        <td class="alignCenterCl" >
        <?= $this->Html->link($arma->Utilidade, ['action' => 'view', $arma->Id_arma]) ?>
        </td>
        <td class="alignCenterCl" style="color:#A020F0"> 
            <?= $this->Html->link('Editar', ['action' => 'edit', $arma->Id_arma]) ?>
            <?= $this->Form->postLink(
                'Deletar',
                ['action' => 'delete', $arma->Id_arma],
                ['confirm' => 'Tem certeza?'])
            ?>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>