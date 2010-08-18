<?php
class ZC_View_Helper_PhoneElement
	extends Zend_View_Helper_FormElement
{
	protected $html = '';
	public function phoneElement($name, $value=null, $attribs = null)
	{
		$a=$b=$c = '';
		$helper = new Zend_View_Helper_FormText();
		$helper->setView($this->view);
		
		if ($value)
		{
			list($a,$b,$c) = split('-',$value);
		}
		
	
		
		$this->html .= $helper->formText($name.'[a]',$a,array('size'=>3,'maxlenght'=>3));
		$this->html .= $helper->formText($name.'[b]',$b,array('size'=>3,'maxlenght'=>3));
		$this->html .= $helper->formText($name.'[c]',$c,array('size'=>3,'maxlenght'=>3));
		
		return $this->html;
	}

}