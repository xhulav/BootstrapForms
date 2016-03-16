<?php

namespace xhulav\BootstrapForms\Rendering;

class BootstrapInlineFormRenderer extends BootstrapFormRenderer
{
    /**
     * Overide wrappers settings
     */
    function __construct()
    {
        $this->wrappers['controls']['container'] = NULL;
        $this->wrappers['pair']['container'] = 'div class=form-group';
        $this->wrappers['pair']['.error'] = 'has-error';
        $this->wrappers['control']['container'] = NULL;
        $this->wrappers['label']['container'] = NULL;
        $this->wrappers['control']['description'] = 'span class=help-block';
        $this->wrappers['control']['errorcontainer'] = 'span class=help-block';

        $this->formType = 'form-inline';
    }

}