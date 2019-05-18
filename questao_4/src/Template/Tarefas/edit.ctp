<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<div class="content">
    <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
    <div class="tarefas form large-9 medium-8 columns content">
        <?= $this->Form->create($tarefa) ?>
        <fieldset>
            <legend>Editar Tarefa</legend>
            <?php
            echo $this->Form->control('tarefa');
            echo $this->Form->control('prioridade');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Enviado')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
