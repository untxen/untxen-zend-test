<?php
class Form_Registration
extends Zend_Form
{
	public function init()
	{
		$this->setMethod('post');
		$name = new Zend_Form_Element_Text('name');
		$name->setLabel('Name:')->setRequired(true);

		$micampo = new ZC_Form_Element_Phone('phone');
		$micampo->setLabel('Phone:')->setRequired(true);
		
		$submit = new Zend_Form_Element_Submit('submit');
		
		$this->addElements(array($name,$micampo,$submit));
	}
	

}
