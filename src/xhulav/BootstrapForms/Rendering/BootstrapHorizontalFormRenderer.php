<?php

namespace xhulav\BootstrapForms\Rendering;

class BootstrapHorizontalFormRenderer extends BootstrapFormRenderer
{
    /**
     * Overide wrappers settings
     */
    function __construct()
    {
        $this->wrappers['controls']['container'] = NULL;
        $this->wrappers['pair']['container'] = 'div class=form-group';
        $this->wrappers['pair']['.error'] = 'has-error';
        $this->wrappers['control']['container'] = 'div class=col-sm-4';
        $this->wrappers['label']['container'] = 'div class="col-sm-2 control-label"';
        $this->wrappers['control']['description'] = 'span class=help-block';
        $this->wrappers['control']['errorcontainer'] = 'span class=help-block';

        $this->formType = 'form-horizontal';
    }

}