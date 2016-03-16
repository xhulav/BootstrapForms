<?php

namespace xhulav\BootstrapForms\Controls;

use Nette\Forms\Controls\SelectBox;
use xhulav\BootstrapForms\ITextBasedControl;
use xhulav\BootstrapForms\TTextBasedInput;

class BootstrapSelectBox extends SelectBox implements ITextBasedControl
{
    use TTextBasedInput;
}
