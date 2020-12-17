<?php 
/**
 * 
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 * 
 */
?>
<div class="content">
    <h3><?= h($post->title) ?></h3>
    <p><?= $post->created->i18nFormat('YYYY年MM月DD日 HH:mm') ?></p>
    <p><?= $this->Text->autoParagraph(h($post->body))?></p>
    <p>投稿者：<?= h($post->user->username) ?></p>
    <?= $this->Html->link('戻る',[ 'action' => 'index'],['class' => 'button']) ?>
</div>