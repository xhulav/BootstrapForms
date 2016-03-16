<?php

namespace xhulav\BootstrapForms;

interface IButton {

	public function setButtonSize($size);
	public function getButtonSize();
	
	public function setButtonType($type);
	public function getButtonType();

	public function setButtonDisplay($display);
	public function getButtonDisplay();
	
	public function addClass($class);
}
