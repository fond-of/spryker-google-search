<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Controller;

use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class IndexController
 * @package FondOfSpryker\Yves\GoogleCustomSearch\Controller
 * @method \FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchFactory getFactory()
 * @method \FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSeachClientInterface getClient()
 */
class SearchController extends AbstractController
{
    /**
     * @return array
     */
    public function formAction(): array
    {
        $googleCustomSearchForm = $this
            ->getFactory()
            ->getGoogleCustomSearchForm();

        return [
            'googleCustomSearchForm' => $googleCustomSearchForm->createView(),
        ];
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array
     */
    public function resultAction(Request $request): array
    {
        $config = $this->getFactory()->getConfig();
        $currentPage = ($request->get('p')) ? $request->get('p') : 1;
        $transfer = new GoogleCustomSearchRequestTransfer();
        $numberOfPages = 0;
        $searchResults = [];
        $googleCustomSearchForm = $this
            ->getFactory()
            ->getGoogleCustomSearchForm()
            ->handleRequest($request);

        if ($googleCustomSearchForm->get('q')->getData()) {
            $transfer
                ->setSearchString($googleCustomSearchForm->get('q')->getData())
                ->setLocale($this->getLocale());

            $searchResults = $this->getClient()->search(
                $config,
                $transfer,
                $currentPage
            );

            $numberOfPages = ceil($searchResults->getTotalResults() / $config->getItemsPerPage());
        }

        return [
            'searchResults' => $searchResults,
            'searchString' => $transfer->getSearchString(),
            'itemsPerPage' => $config->getItemsPerPage(),
            'currentPage' => $currentPage,
            'numberOfPages' => $numberOfPages,
        ];
    }
}
