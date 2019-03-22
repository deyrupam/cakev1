<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Login'),['contoller'=>'users','action'=>'login']) ?></li>
        <li><?= $this->Html->link(__( 'Signup'),['contoller'=>'users','action'=>'Signup']) ?></li>
        <li><?= $this->Html->link(__('Forget Password'),['contoller'=>'users','action'=>'forgetpassword']) ?></li>
        <li><?= $this->Html->link(__('About Us'),['contoller'=>'pages','action'=>'about']) ?></li>
        <li><?= $this->Html->link(__('Contact Us'),['contoller'=>'pages','action'=>'login']) ?></li>

    </ul>
</nav>
