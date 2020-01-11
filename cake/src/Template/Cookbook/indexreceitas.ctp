<h1>Blog receitas</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($receitas as $receita): ?>
    <tr>
        <td><?= $receita->id ?></td>
        <td>
            <?= $this->Html->link($receita->title, ['action' => 'view', $receita->id]) ?>
        </td>
        <td>
            <?= $receita->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</table>