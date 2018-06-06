<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;

/**
 * Class IndexController
 * @package FondOfSpryker\Yves\GoogleCustomSearch\Controller
 * @method \FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchFactory getFactory()
 * @method \FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSeachClientInterface getClient()
 */
class IndexController extends AbstractController
{
    public function indexAction(Request $request): array
    {
        $googleCustomSearchForm = $this
            ->getFactory()
            ->getGoogleCustomSearchForm();

        $parentRequest = $this->getApplication()['request_stack']->getParantRequest();

        if ($parentRequest !== null) {
            $request = $parentRequest;
        }

        $googleCustomSearchForm->handleRequest($request);

        if ($googleCustomSearchForm->isValid() && $googleCustomSearchForm->isSubmitted()) {
            $transfer = new GoogleCustomSearchRequestTransfer();
            $transfer
                ->setSearchString($googleCustomSearchForm->get('search')->getData())
                ->setLocale($this->getLocale());

            $response = $this->getClient()->search($transfer);
        }

        return [

        ];
    }
}
