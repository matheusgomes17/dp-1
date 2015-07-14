<?php 

namespace app\Form;
use app\Interfaces\FormInterface;
use app\Interfaces\FormFieldInterface;

class Form implements FormInterface
{
    protected $elements = array();
    protected $action;
    protected $method;

    public function __construct($action = "", $method = "post")
    {
        $this->action = $action;
        $this->method = $method;
    }   

    public function addElement(FormFieldInterface $field)
    {
        $this->elements[] = $field;
    }

    public function render()
    {
        $form = "<form action=\"{$this->action}\" method=\"{$this->method}\"> \n";
            foreach($this->elements as $element)
            {
                $form .= $element->getElement();
            }
        $form .= "\n</form>";
        echo $form;
    }
}
