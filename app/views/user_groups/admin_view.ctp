<div class="userGroups view">
<h2><?php  __('UserGroup');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userGroup['UserGroup']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userGroup['UserGroup']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userGroup['UserGroup']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userGroup['UserGroup']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>

<?php 
// set the contextual menu items
$menu->setValue(array(
	array(
		'heading' => 'User Groups',
		'items' => array(
			 $html->link(__('Edit UserGroup', true), array('action' => 'edit', $userGroup['UserGroup']['id'])),
			 $html->link(__('Delete UserGroup', true), array('action' => 'delete', $userGroup['UserGroup']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userGroup['UserGroup']['id'])),
			 $html->link(__('List UserGroups', true), array('action' => 'index')),
			 $html->link(__('New UserGroup', true), array('action' => 'add')),
			 )
		),
	array(
		'heading' => 'Users',
		'items' => array(
			 $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')),
			 )
		),
	));
?>
