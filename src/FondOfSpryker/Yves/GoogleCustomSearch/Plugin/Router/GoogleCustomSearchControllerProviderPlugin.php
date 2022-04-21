<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class GoogleCustomSearchControllerProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ROUTE_GOOGLE_CUSTOM_SEARCH_FORM = 'gcs/form';
    public const ROUTE_GOOGLE_CUSTOM_SEARCH_RESULT = 'gcs/result';

    /**
     * Specification:
     * - Adds Routes to the RouteCollection.
     *
     * @api
     *
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addFormRoute($routeCollection);
        $routeCollection = $this->addResultRoute($routeCollection);

        return $routeCollection;
    }

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     *
     * @deprecated Register widget `FondOfSpryker\Yves\GoogleCustomSearch\Widget\GoogleCustomSearchWidget` instead and use it in tpl
     */
    protected function addFormRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('gcs/form', 'GoogleCustomSearch', 'Search', 'form');
        $route = $route->setMethods(['GET']);
        $routeCollection->add(static::ROUTE_GOOGLE_CUSTOM_SEARCH_FORM, $route);

        return $routeCollection;
    }

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    protected function addResultRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('gcs/result', 'GoogleCustomSearch', 'Search', 'result');
        $routeCollection->add(static::ROUTE_GOOGLE_CUSTOM_SEARCH_RESULT, $route);

        return $routeCollection;
    }
}
