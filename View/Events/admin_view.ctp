<div class="events view">
<h2><?php  echo __('Event'); ?></h2>
  <?php echo $this->Html->image($this->Html->url('/../uploads/'.$event['Event']['image'], true ), array('alt' => h($event['Event']['image']))); ?>
  <dl>
    <dt><?php echo __('Id'); ?></dt>
    <dd>
      <?php echo h($event['Event']['id']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Maintext'); ?></dt>
    <dd>
      <?php echo h($event['Event']['maintext']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Image'); ?></dt>
    <dd>
      <?php echo h($event['Event']['image']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Created'); ?></dt>
    <dd>
      <?php echo h($event['Event']['created']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Modified'); ?></dt>
    <dd>
      <?php echo h($event['Event']['modified']); ?>
      &nbsp;
    </dd>
  </dl>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
    <li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
    <li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
  </ul>
</div>
