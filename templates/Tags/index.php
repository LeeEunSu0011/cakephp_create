<?php 
/**
 * 
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag[] $tags
 */
?>
<div class="content">
    <?php foreach($tags as $tag) :?>
        <h3><?= h($tag->title) ?></h3>
        <p><?= $tag->created->i18nFormat('YYYY年MM月DD日 HH:mm') ?></p>
        <p><?= $this->Text->autoParagraph(h($tag->body))?></p>
        <?= $this->Html->link('詳細',[ 'action' => 'view', $tag->id],['class' => 'button']) ?>
    <?php endforeach; ?>
</div>