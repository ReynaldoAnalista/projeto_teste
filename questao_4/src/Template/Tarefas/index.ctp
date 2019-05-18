<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa[]|\Cake\Collection\CollectionInterface $tarefas
 */
?>
<div class="content">
    <div class="row">
        <div class="col-md-12">

            <?php
            echo $this->Html->link(
                'Nova Tarefa',
                ['action' => 'add'],
                ['class' => 'btn btn-primary']
            );
            ?>
        </div>
    </div>
    <div class="tarefas index large-12 medium-12 columns content">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col"><?= $this->Paginator->sort('tarefa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criado_em') ?></th>
                <th scope="col" class="actions">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($tarefas as $tarefa): ?>
                <tr>
                    <td><?= h($tarefa->tarefa) ?></td>
                    <td><?= $this->Number->format($tarefa->prioridade) ?></td>
                    <td><?= h($tarefa->criado_em) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $tarefa->id], ['class' => 'btn btn-success']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tarefa->id], ['class' => 'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Tem certeza que deseja excluir?', $tarefa->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
                <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('próximo') . ' >') ?>
                <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}')]) ?></p>
        </div>
    </div>
</div>

