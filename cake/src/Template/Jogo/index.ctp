<h1>Blog articles</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($personagens as $personagem): ?>
    <tr>
        <td><?= $personagem->id ?></td>
        <td>
            <?= $this->Html->link($personagem->title, ['action' => 'view', $personagem->id]) ?>
        </td>
        <td>
            <?= $personagem->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>