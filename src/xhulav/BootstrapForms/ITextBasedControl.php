<?php

namespace xhulav\BootstrapForms;

interface ITextBasedControl {
	
	public function getPrefix();
	
	public function setPrefix($prefix);
	
	public function getSuffix();

	public function setSuffix($suffix);

	public function setGlyphiconPrefix($glyphicon);

	public function setIconPrefix($icon);

	public function setGlypiconSuffix($glyphicon);

	public function setIconSuffix($icon);
	
	public function hasGroupAddon();
	
	public function getInputSize();

	public function setInputSize($inputSize);
	
	public function addClassToInputGroup($class);
	
	public function getInputGroupClasses();
}
