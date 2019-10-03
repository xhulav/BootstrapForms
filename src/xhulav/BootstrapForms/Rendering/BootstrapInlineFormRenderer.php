<?php

namespace xhulav\BootstrapForms\Rendering;

class BootstrapInlineFormRenderer extends BootstrapFormRenderer
{
    /**
     * Overide wrappers settings
     */
    function __construct()
    {
    	parent::__construct();

        $this->formType = 'form-inline';
    }

}