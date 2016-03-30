<?php

namespace xhulav\BootstrapForms\Controls;

use Nette\Forms\Controls\SubmitButton;
use xhulav\BootstrapForms\IButton;
use xhulav\BootstrapForms\TButton;
use xhulav\BootstrapForms\TIconButton;

class BootstrapSubmitButton extends SubmitButton implements IButton {
	
	use TButton, TIconButton;

	public function __construct($caption = NULL) {
		parent::__construct($caption);
		
		$this->getControlPrototype()->setName('button')->setText($this->translate($caption === NULL ? $this->caption : $caption));
	}

}
