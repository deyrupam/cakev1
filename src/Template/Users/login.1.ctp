<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">


<?= $this->Form->create('User') ?>
  <fieldset>
    <legend>Login</legend>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email"  name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp"class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
    </div>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>

  </fieldset>
  <?= $this->Form->end() ?>

</div>
