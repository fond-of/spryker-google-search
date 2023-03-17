<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Controller;

use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchFactory getFactory()
 * @method \FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSearchClientInterface getClient()
 */
class SearchController extends AbstractController
{
    /**
     * @var \Symfony\Component\Form\FormInterface
     */
    protected $googleCustomSearchForm;

    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    protected function getGoogleCustomSearchForm(): FormInterface
    {
        if ($this->googleCustomSearchForm === null) {
            $this->googleCustomSearchForm = $this->getFactory()->getGoogleCustomSearchForm();
        }

        return $this->googleCustomSearchForm;
    }

    /**
     * @return array
     */
    public function formAction(): array
    {
        return [
            'googleCustomSearchForm' => $this->getGoogleCustomSearchForm()->createView(),
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
        $currentPage = $request->get('p') ?: 1;
        $transfer = new GoogleCustomSearchRequestTransfer();
        $numberOfPages = 0;
        $items = [];
        $totalResult = 0;

        $googleCustomSearchForm = $this->getFactory()
            ->getGoogleCustomSearchForm()
            ->handleRequest($request);

        if ($googleCustomSearchForm->get('q')->getData()) {
            $transfer->setSearchString($googleCustomSearchForm->get('q')->getData());

            $transfer->setExcludeTerms($config->getExcludeTerms());

            $start = $currentPage;

            if ($currentPage > 1) {
                $start = $currentPage * $config->getItemsPerPage() - $config->getItemsPerPage() + 1;
            }

            $searchResults = $this->getClient()->search($transfer, $start, $config->getItemsPerPage());
            $totalResult = $searchResults->getTotalResults() < 100 ? $searchResults->getTotalResults() : 100;
            $numberOfPages = ceil($totalResult / $config->getItemsPerPage());
            $items = $searchResults->getItems();
        }

        return [
            'items' => $items,
            'totalResult' => $totalResult,
            'searchString' => $transfer->getSearchString(),
            'itemsPerPage' => $config->getItemsPerPage(),
            'currentPage' => $currentPage,
            'numberOfPages' => $numberOfPages,
        ];
    }
}
