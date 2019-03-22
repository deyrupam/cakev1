<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User'),['contoller'=>'users','action'=>'signup']) ?></li>
        <li role="separetor" class="divider"></li>
        <li class="heading">My Acount</li>
        <li><?= $this->Html->link(__( 'Change Pasword'),['contoller'=>'users','action'=>'chnagepassword']) ?></li>
        <li role="separetor" class="divider"></li>
        <li class="heading">Others</li>
        <li><?= $this->Html->link(__('About Us'),['contoller'=>'pages','action'=>'about']) ?></li>
        <li><?= $this->Html->link(__('Contact Us'),['contoller'=>'pages','action'=>'login']) ?></li>
        <li role="separetor" class="divider"></li>
        <li class="heading"><?= __('Admin') ?></li>
        <li><?= $this->Html->link(__('List Users'),['contoller'=>'users','action'=>'list']) ?></li>

    </ul>
</nav>
