<?php

namespace xhulav\BootstrapForms\Controls;

use Nette\Forms\Controls\TextInput;
use xhulav\BootstrapForms\ITextBasedControl;
use xhulav\BootstrapForms\TTextBasedInput;

class BootstrapTextInput extends TextInput implements ITextBasedControl
{
    use TTextBasedInput;
}
