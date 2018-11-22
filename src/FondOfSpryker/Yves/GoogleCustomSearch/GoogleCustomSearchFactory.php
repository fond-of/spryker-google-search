<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch;

use FondOfSpryker\Yves\GoogleCustomSearch\Form\GoogleCustomSearchForm;
use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Yves\Kernel\AbstractFactory;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;

class GoogleCustomSearchFactory extends AbstractFactory
{
    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    public function getGoogleCustomSearchForm(): FormInterface
    {
        return $this->getFormFactory()->create($this->createGoogleCustomSearchForm());
    }

    /**
     * @return \FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchConfig
     */
    public function getConfig(): GoogleCustomSearchConfig
    {
        return new GoogleCustomSearchConfig();
    }

    /**
     * @return string
     */
    protected function createGoogleCustomSearchForm(): string
    {
        return GoogleCustomSearchForm::class;
    }

    /**
     * @return \Symfony\Component\Form\FormFactoryInterface
     */
    protected function getFormFactory(): FormFactoryInterface
    {
        return $this->getProvidedDependency(ApplicationConstants::FORM_FACTORY);
    }
}
