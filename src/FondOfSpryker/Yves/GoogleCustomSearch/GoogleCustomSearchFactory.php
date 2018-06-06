<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch;

use Spryker\Yves\Kernel\AbstractFactory;
use Symfony\Component\Form\FormInterface;
use FondOfSpryker\Yves\GoogleCustomSearch\Form\GoogleCustomSearchForm;
use Spryker\Shared\Application\ApplicationConstants;

class GoogleCustomSearchFactory extends AbstractFactory
{
    /**
     * @return FormInterface
     * @throws \Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getGoogleCustomSearchForm(): FormInterface
    {
        return $this->getProvidedDependency(ApplicationConstants::FORM_FACTORY)
            ->create($this->createGoogleCustomSearchForm());
    }

    /**
     * @return string
     */
    protected function createGoogleCustomSearchForm(): string
    {
        return GoogleCustomSearchForm::class;
    }
}
