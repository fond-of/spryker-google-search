<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Widget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;

/**
 * @method \FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchFactory getFactory()
 */
class GoogleCustomSearchWidget extends AbstractWidget
{
    public function __construct()
    {
        $this->addParameter('googleCustomSearchForm', $this->getFactory()->getGoogleCustomSearchForm()->createView());
    }

    /**
     * @return string
     */
    public static function getName(): string
    {
        return 'GoogleCustomSearchWidget';
    }

    /**
     * @return string
     */
    public static function getTemplate(): string
    {
        return '@GoogleCustomSearch/view/search/form-widget.twig';
    }
}
