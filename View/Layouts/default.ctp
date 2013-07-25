<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$description = __d('cake_dev', 'Skiresort App Backend');
?>
<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $description ?>:
    <?php echo $title_for_layout; ?>
  </title>
<?php
echo $this->Html->meta('icon');

echo $this->Html->css('cake.generic');

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>
  <div id="container">
    <div id="header">
      <h1><?php echo $description ?></h1>
    </div>
    <div id="content">

      <?php
      echo $this->Session->flash();
      echo $this->Session->flash('auth');

      ?>

      <?php if ($authUser) { ?>
      <div class="breadcrumbs index">
        <?php echo $this->Html->getCrumbs(' > ', 'Home'); ?>
      </div>
      <div class="actions">
        <h3><?php echo __('Navigation'); ?></h3>
        <ul>
          <li><?php echo $this->Html->link(__('Home'), array('admin' => false, 'controller' => 'pages', 'action' => 'display', 'home')); ?></li>
          <li><?php echo $this->Html->link(__('Users'), array('admin' => true, 'controller' => 'users', 'action' => 'index')); ?></li>
          <li><?php echo $this->Html->link(__('Contests'), array('admin' => true, 'controller' => 'contests', 'action' => 'index')); ?></li>
          <li><?php echo $this->Html->link('Logout', array('admin' => false, 'controller'=>'users', 'action'=>'logout'));?></li>
        </ul>
      </div>
      <?php } ?>
      <?php echo $this->fetch('content'); ?>

    </div>
  </div>
</body>
</html>
