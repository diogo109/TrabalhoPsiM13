<!-- File: src/Template/Articles/view.ctp -->

<h1><?= h($receita->title) ?></h1>
<p><?= h($receita->body) ?></p>
<p><small>Criado: <?= $receita->created->format(DATE_RFC850) ?></small></p>