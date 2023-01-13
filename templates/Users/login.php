<?php echo $this->Flash->render() ?>
<?= $this->Form->create() ?>
<?= $this->Form->control('username'); ?>
<?= $this->Form->control('password'); ?>
<?= $this->Form->submit() ?>
<?= $this->Form->end() ?>
<!-- button for new account registration-->
<?php echo $this->Html->link('Register',['controller' => 'users', 'action' => 'add'],['class' => 'button']); ?>
