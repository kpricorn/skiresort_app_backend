<div class="contests index">
  <h2><?php echo __('Contests'); ?></h2>
  <table cellpadding="0" cellspacing="0">
  <tr>
      <th><?php echo $this->Paginator->sort('id'); ?></th>
      <th><?php echo $this->Paginator->sort('maintext'); ?></th>
      <th><?php echo $this->Paginator->sort('image'); ?></th>
      <th><?php echo $this->Paginator->sort('created'); ?></th>
      <th><?php echo $this->Paginator->sort('modified'); ?></th>
      <th class="actions"><?php echo __('Actions'); ?></th>
  </tr>
  <?php foreach ($contests as $contest): ?>
  <tr>
    <td><?php echo h($contest['Contest']['id']); ?>&nbsp;</td>
    <td><?php echo h( $this->Text->truncate($contest['Contest']['maintext'])); ?>&nbsp;</td>
    <td><?php echo h($contest['Contest']['image']); ?>&nbsp;</td>
    <td><?php echo h($contest['Contest']['created']); ?>&nbsp;</td>
    <td><?php echo h($contest['Contest']['modified']); ?>&nbsp;</td>
    <td class="actions">
      <?php echo $this->Html->link(__('View'), array('action' => 'view', $contest['Contest']['id'])); ?>
      <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contest['Contest']['id'])); ?>
      <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contest['Contest']['id']), null, __('Are you sure you want to delete # %s?', $contest['Contest']['id'])); ?>
    </td>
  </tr>
<?php endforeach; ?>
  </table>
  <p>
  <?php
  echo $this->Paginator->counter(array(
  'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
  ));
  ?>  </p>
  <div class="paging">
  <?php
    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('separator' => ''));
    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
  ?>
  </div>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('New Contest'), array('action' => 'add')); ?></li>
  </ul>
</div>
