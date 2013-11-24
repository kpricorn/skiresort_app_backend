<?php
$this->Html->addCrumb('Events');
?>

<div class="events index">
  <h2><?php echo __('Events'); ?></h2>
  <table cellpadding="0" cellspacing="0">
  <thead>
    <tr>
        <th></th>
        <th>id</th>
        <th>maintext</th>
        <th>image</th>
        <th>created</th>
        <th>modified</th>
        <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
  </thead>
  <tbody id="events">
  <?php foreach ($events as $event): ?>
    <tr id='Event_<?php echo $event['Event']['id']?>'>
      <td class="handle" style="cursor:pointer;"><?php echo $this->Html->image('sort.png') ?></td>
      <td><?php echo h($event['Event']['id']); ?>&nbsp;</td>
      <td><?php echo h($this->Text->truncate($event['Event']['maintext'])); ?>&nbsp;</td>
      <td><?php echo h($event['Event']['image']); ?>&nbsp;</td>
      <td><?php echo h($event['Event']['created']); ?>&nbsp;</td>
      <td><?php echo h($event['Event']['modified']); ?>&nbsp;</td>
      <td class="actions">
        <?php echo $this->Html->link(__('View'), array('action' => 'view', $event['Event']['id'])); ?>
        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $event['Event']['id'])); ?>
        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $event['Event']['id']), null, __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?>
      </td>
    </tr>
  <?php endforeach; ?>
  <tbody>
  </table>
<?php
$this->Js->get('#events');
$this->Js->sortable(array(
  'complete' => '$.post("' . $this->Html->url(array("action" => "reorder")) . '", $("#events").sortable("serialize"))',
  'handle' => '.handle'
));
?>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?></li>
  </ul>
</div>
