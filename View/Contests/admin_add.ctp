<div class="contests form">
<?php echo $this->Form->create('Contest', array('type' => 'file')); ?>
  <fieldset>
    <legend><?php echo __('Admin Add Contest'); ?></legend>
  <?php
    echo $this->Form->input('maintext');
    echo $this->Form->input('image', array('type' => 'file'));
  ?>
  </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>

    <li><?php echo $this->Html->link(__('List Contests'), array('action' => 'index')); ?></li>
  </ul>
</div>
