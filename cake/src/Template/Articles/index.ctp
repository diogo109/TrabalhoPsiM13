<!-- File: src/Template/Articles/index.ctp -->

<h1>Blog articles</h1>
<?= $this->Html->link('Adicionar artigo', ['action' => 'add']) ?> <br>
<?= $this->Html->link('login', ['controller'=>'users', 'action' => 'login']) ?><br>
<?= $this->Html->link('logout', ['controller'=>'users', 'action' => 'logout']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Deletar',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Tem certeza?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>