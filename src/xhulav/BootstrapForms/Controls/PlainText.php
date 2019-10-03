<?php

namespace xhulav\BootstrapForms\Controls;

use Nette\Forms\Controls\BaseControl;

class PlainText extends BaseControl
{

    /**
     * @param string|null $label
     * @param $text
     */
    public function __construct(string $label = NULL, $text)
    {
        parent::__construct($label);

        $this->setOmitted(true);
        $this->getControlPrototype()->setName('p');
        $this->getControlPrototype()->class[] = 'form-control-static';
        $this->getControlPrototype()->setText($text);
    }

}