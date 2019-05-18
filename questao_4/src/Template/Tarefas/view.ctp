<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<div class="content">
    <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
    <div class="tarefas view large-9 medium-8 columns content">
        <h3>Visualizar</h3>
        <table class="vertical-table table">
            <thead class="table-dark">
            <tr>
                <th>Tarefa</th>
                <th>Prioridade</th>
                <th>Criado Em</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?= h($tarefa->tarefa) ?></td>
                <td><?= $this->Number->format($tarefa->prioridade) ?></td>
                <td><?= h($tarefa->criado_em) ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
