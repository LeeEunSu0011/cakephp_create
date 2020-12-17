<?php 
/**
 * 
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[] $posts
 * 
 */
?>
<div class="content">
    <?php foreach($posts as $post) :?>
        <h3><?= h($post->title) ?></h3>
        <p><?= $post->created->i18nFormat('YYYY年MM月DD日 HH:mm') ?></p>
        <p><?= $this->Text->autoParagraph(h($post->body))?></p>
        <?= $this->Html->link('詳細',[ 'action' => 'view', $post->id],['class' => 'button']) ?>
    <?php endforeach; ?>
</div>