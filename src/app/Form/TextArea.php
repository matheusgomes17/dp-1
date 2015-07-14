<?php 

namespace app\Form;
use app\Interfaces\TextAreaInterface;
use app\Interfaces\FormFieldInterface;

class TextArea implements TextAreaInterface, FormFieldInterface
{
	protected $cols;
	protected $name;
	protected $rows;
	protected $placeholder;
	
	public function __construct($cols, $name, $rows, $placeholder)
	{
		$this->cols 		= $cols;
		$this->name 		= $name;
		$this->rows 		= $rows;
		$this->placeholder 	= $placeholder;
	}

	public function setCols($cols)
	{
		$this->cols = $cols;
	}

    public function setName($name)
    {
    	$this->name = $name;
    }

    public function setRows($rows)
    {
    	$this->rows = $rows;
    }

    public function setPlaceholder($placeholder)
    {
    	$this->placeholder = $placeholder;
    }

    public function getCols()
    {
    	return $this->cols;
    }

    public function getName()
    {
    	return $this->name;
    }

    public function getRows()
    {
    	return $this->rows;
    }

    public function getPlaceholder()
    {
    	return $this->placeholder;
    }

    public function getElement()
    {
    	return "<textarea cols='" . $this->cols . "' name='" . $this->name . "' rows='" . $this->rows . "' placeholder='" . $this->placeholder . "'></textarea>\n";
    }
}