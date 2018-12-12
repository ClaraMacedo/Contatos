<?php 
class Application_Form_Contact extends Zend_Form {
 
     public function init() { 
          $this->addElement('text', 'nome', array('label' => 'Digite seu nome:','required' => true));
          $this->addElement('text', 'email', array('label' => 'Digite seu email:','required' => true));
          $this->addElement('text', 'telefone', array('label' => 'Digite o numero do seu telefone:', 'required' => true));
          $this->addElement('text', 'endereco', array('label' => 'Digite seu endereco:','required' => true));
          $this->addElement('submit','submit',array('label' => 'Add Contact'));
     }
 
}