<?php
$this->Html->addCrumb('Events', array('action' => 'index'));
$this->Html->addCrumb('Add Event');
?>

<div class="events form">
<?php echo $this->Form->create('Event', array('type' => 'file')); ?>
  <fieldset>
    <legend><?php echo __('Admin Add Event'); ?></legend>
  <?php
    echo $this->Form->input('maintext');
    echo $this->Form->input('image', array('type' => 'file'));
  ?>
  <p>Max file dimensions: 600px x 960px</p>
  </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>

    <li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
  </ul>
</div>
