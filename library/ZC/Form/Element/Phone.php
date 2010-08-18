<?php

class ZC_Form_Element_Phone
	extends Zend_Form_Element_Xhtml
{
	protected $a = null;
	protected $b = null;
	protected $c = null;
	
	public $helper = "phoneElement";
	
	function setA($num)
	{
		$this->a = $num;
		return $this;
	}
	function setB($num)
	{
		$this->b = $num;
		return $this;
	}	
	function setC($num)
	{
		$this->c = $num;
		return $this;
	}	
	
	public function setValue($value)
	{
		if (is_array($value) 
			&& (isset($value['a']))
			&& (isset($value['b']))
			&& (isset($value['c']))
			)
		{
			$this->setA($value['a'])
				->setB($value['b'])
				->setC($value['c']);
		}
	}
	
	public function getValue()
	{
		if (!$this->a || !$this->b || !$this->c) return false;
		return $this->a.'-'.$this->b.'-'.$this->c;
		
		

	}
}