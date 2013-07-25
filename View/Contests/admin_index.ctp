<?php
$this->Html->addCrumb('Contests');
?>

<div class="contests index">
  <h2><?php echo __('Contests'); ?></h2>
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
  <tbody id="contests">
  <?php foreach ($contests as $contest): ?>
    <tr id='Contest_<?php echo $contest['Contest']['id']?>'>
      <td class="handle" style="cursor:pointer;"><?php echo $this->Html->image('sort.png') ?></td>
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
  <tbody>
  </table>
<?php
$this->Js->get('#contests');
$this->Js->sortable(array(
  'complete' => '$.post("/contests/reorder", $("#contests").sortable("serialize"))',
  'handle' => '.handle'
));
?>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('New Contest'), array('action' => 'add')); ?></li>
  </ul>
</div>
