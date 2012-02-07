<?php
echo $this->Form->create(array('action'=>'add'));
echo $this->Form->inputs(array('legend'=>'Signup',
						'username'=> array('label' => 'Username/Email'),
						'password'=> array('label' => 'Password')
						));
echo $this->Form->end('add');
?>