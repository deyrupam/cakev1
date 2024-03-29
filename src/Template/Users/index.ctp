<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<?= $this->element('sidemenuloggedin');?>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive table striped">
        <thead>
            <tr>
                <th scope="col" width="5%"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions" width="30%"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->ID) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->phone) ?></td>
                <td><?php echo $this->Time->timeagoinwords($user->created); ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">

                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->ID],['class'=>'btn btn-secondary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->ID],['class'=>'btn btn-secondary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->ID],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
