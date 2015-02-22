<?php

echo $this->Form->create('Usuario'); 
echo $this->Form->input('login'); 
echo $this->Form->input('nome');
echo $this->Form->input('email'); 
echo $this->Form->input('Enviar', array('label' => FALSE, 'type' => 'submit')); 
echo $this->Form->end(); 
?>
