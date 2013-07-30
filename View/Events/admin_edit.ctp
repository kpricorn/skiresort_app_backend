<?php
$this->Html->addCrumb('Events', array('action' => 'index'));
$this->Html->addCrumb('Edit Event');
?>

<div class="events form">
<?php echo $this->Form->create('Event', array('type' => 'file')); ?>
  <fieldset>
    <legend><?php echo __('Admin Edit Event'); ?></legend>
  <?php
    echo $this->Form->input('id');
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

    <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Event.id'))); ?></li>
    <li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
  </ul>
</div>
