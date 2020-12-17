<?php 
/**
 * 
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 * 
 */
?>
<div class="content">
    <h1><?= h($tag->title) ?>の一覧</h1>
        <?php foreach ($posts as $post): ?>
            <h3><?= h($post->title) ?></h3>
            <?= $post->created->i18nFormat('YYYY年MM月DD日 HH:mm') ?>
            <p><?= $this->Text->autoParagraph(h($post->description))?></p>
            <p>投稿者：<?= h($post->user->username) ?></p>
        <?php endforeach; ?>
    <?= $this->Html->link('戻る',[ 'action' => 'index'],['class' => 'button']) ?>
</div>