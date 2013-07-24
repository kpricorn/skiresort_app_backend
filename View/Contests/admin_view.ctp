<div class="contests view">
<h2><?php  echo __('Contest'); ?></h2>
  <dl>
    <dt><?php echo __('Id'); ?></dt>
    <dd>
      <?php echo h($contest['Contest']['id']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Maintext'); ?></dt>
    <dd>
      <?php echo h($contest['Contest']['maintext']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Image'); ?></dt>
    <dd>
      <?php echo h($contest['Contest']['image']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Created'); ?></dt>
    <dd>
      <?php echo h($contest['Contest']['created']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Modified'); ?></dt>
    <dd>
      <?php echo h($contest['Contest']['modified']); ?>
      &nbsp;
    </dd>
  </dl>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('Edit Contest'), array('action' => 'edit', $contest['Contest']['id'])); ?> </li>
    <li><?php echo $this->Form->postLink(__('Delete Contest'), array('action' => 'delete', $contest['Contest']['id']), null, __('Are you sure you want to delete # %s?', $contest['Contest']['id'])); ?> </li>
    <li><?php echo $this->Html->link(__('List Contests'), array('action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Contest'), array('action' => 'add')); ?> </li>
  </ul>
</div>
