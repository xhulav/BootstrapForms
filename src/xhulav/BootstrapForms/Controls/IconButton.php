<?php

namespace xhulav\BootstrapForms\Controls;

use xhulav\BootstrapForms\IButton;
use xhulav\BootstrapForms\TIconButton;

class IconButton extends BootstrapButton implements IButton
{

    use TIconButton;

    public function __construct($caption = NULL) {
        parent::__construct($caption);

        $this->getControlPrototype()->setName('button')->setText($this->translate($caption === NULL ? $this->caption : $caption));
    }
}
