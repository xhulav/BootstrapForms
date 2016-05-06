<?php


use Nette\Forms\Form;
use xhulav\BootstrapForms\BootstrapControls;
use xhulav\BootstrapForms\IBootstrapForm;
use xhulav\BootstrapForms\Rendering\BootstrapFormRenderer;

class BootstrapForm extends Form implements IBootstrapForm
{
    public function __construct($name = NULL)
    {
        parent::__construct($name);

        $this->setRenderer(new BootstrapFormRenderer());
    }

    use BootstrapControls;
}