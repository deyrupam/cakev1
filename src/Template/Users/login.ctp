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

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/bootstrap.icon-large.min.css" rel="stylesheet">
        <div class="col-md-4 col-md-offset-4" style='margin-top:20px;'>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login via site</h3>
                </div>
                <div class="panel-body">
                <?= $this->Form->create('User') ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="yourmail@example.com" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <?= $this->Form->button(__('submit'),['class'=>'btn btn-primary btn-block'])?>
                        </fieldset>
                    <?= $this->Form->end() ?>
                    <hr/>
                    <center>
                        <h4>OR</h4></center>


                </div>
            </div>
        </div>
