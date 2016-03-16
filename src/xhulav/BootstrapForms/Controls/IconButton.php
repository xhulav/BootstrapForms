<?php

namespace xhulav\BootstrapForms\Controls;

use xhulav\BootstrapForms\IButton;
use xhulav\BootstrapForms\TIconButton;

class IconButton extends BootstrapButton implements IButton
{

    use TIconButton;

    public function __construct($caption = NULL) {
        parent::__construct(NULL);

        $this->getControlPrototype()->setName('button')->setText($caption);
    }
}
