<?php 
class Application_Form_Contact extends Zend_Form {
 
     public function init() { 

          $this->setDecorators(array( 'FormElements', 'Form'));
          $this->setMethod('post');
          $decorator_default = array('ViewHelper','Errors','Description','HtmlTag','Label',array(array('row' => 'HtmlTag'),array('tag' => 'div', 'class' => 'field')));
		
          $nome = new Zend_Form_Element_Text('nome');
          $nome -> addDecorators($decorator_default);
          $nome -> setAttrib('class', 'form-control');
          $nome -> setAttrib('type', 'text');
          $nome -> setLabel("Nome:")
                -> setRequired(true);

          $email = new Zend_Form_Element_Text('email');
          $email -> addDecorators($decorator_default);
          $email -> setAttrib('class','form-control');
          $email -> setLabel("Email:")
                 -> setRequired(true);

          $telefone = new Zend_Form_Element_Text('telefone');
          $telefone -> addDecorators($decorator_default);
          $telefone -> setAttrib('class', 'form-control');
          $telefone -> setLabel("Telefone:")
                    -> setRequired(true);
          
          $endereco = new Zend_Form_Element_Text('endereco');
          $endereco -> addDecorators($decorator_default);
          $endereco -> setAttrib('class', 'form-control');
          $endereco -> setLabel("Endereço:")
                    -> setRequired(true);
                  
          $submit = new Zend_Form_Element_Submit('submit');
          $submit -> setAttrib('id', 'submit');
          $submit -> clearDecorators();
          $submit -> setDecorators(array('ViewHelper'));
          $nome   -> setAttrib('type', 'submit');
          $submit -> setAttrib('class', 'btn btn-primary float-right');
     
          $this->addElements(array($nome, $email, $telefone, $endereco, $submit));
 
}
}