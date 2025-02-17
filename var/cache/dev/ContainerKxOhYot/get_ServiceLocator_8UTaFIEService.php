<?php

namespace ContainerKxOhYot;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8UTaFIEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8UTaFIE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8UTaFIE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AdminController::deleteProduct' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::deleteProductType' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::deleteStock' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::editProduct' => ['privates', '.service_locator.LNwsF6h', 'get_ServiceLocator_LNwsF6hService', true],
            'App\\Controller\\AdminController::editProductType' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::editStock' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::newProduct' => ['privates', '.service_locator.LNwsF6h', 'get_ServiceLocator_LNwsF6hService', true],
            'App\\Controller\\AdminController::newProductType' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::newStock' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::orderDetail' => ['privates', '.service_locator.ruxHxcA', 'get_ServiceLocator_RuxHxcAService', true],
            'App\\Controller\\AdminController::orders' => ['privates', '.service_locator.4n4ylFv', 'get_ServiceLocator_4n4ylFvService', true],
            'App\\Controller\\AdminController::productTypes' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::products' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::stocks' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController::updateOrderStatus' => ['privates', '.service_locator.EDFwMy7', 'get_ServiceLocator_EDFwMy7Service', true],
            'App\\Controller\\PageController::addToCart' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController::adminOrderDetail' => ['privates', '.service_locator.ruxHxcA', 'get_ServiceLocator_RuxHxcAService', true],
            'App\\Controller\\PageController::adminOrderStatus' => ['privates', '.service_locator.EDFwMy7', 'get_ServiceLocator_EDFwMy7Service', true],
            'App\\Controller\\PageController::adminOrders' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController::cart' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController::checkout' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController::deleteProduct' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController::shop' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController::shopDetail' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController::tempShop' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController::tempShopDetail' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController::updateCart' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:deleteProduct' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:deleteProductType' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:deleteStock' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:editProduct' => ['privates', '.service_locator.LNwsF6h', 'get_ServiceLocator_LNwsF6hService', true],
            'App\\Controller\\AdminController:editProductType' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:editStock' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:newProduct' => ['privates', '.service_locator.LNwsF6h', 'get_ServiceLocator_LNwsF6hService', true],
            'App\\Controller\\AdminController:newProductType' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:newStock' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:orderDetail' => ['privates', '.service_locator.ruxHxcA', 'get_ServiceLocator_RuxHxcAService', true],
            'App\\Controller\\AdminController:orders' => ['privates', '.service_locator.4n4ylFv', 'get_ServiceLocator_4n4ylFvService', true],
            'App\\Controller\\AdminController:productTypes' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:products' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:stocks' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\AdminController:updateOrderStatus' => ['privates', '.service_locator.EDFwMy7', 'get_ServiceLocator_EDFwMy7Service', true],
            'App\\Controller\\PageController:addToCart' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController:adminOrderDetail' => ['privates', '.service_locator.ruxHxcA', 'get_ServiceLocator_RuxHxcAService', true],
            'App\\Controller\\PageController:adminOrderStatus' => ['privates', '.service_locator.EDFwMy7', 'get_ServiceLocator_EDFwMy7Service', true],
            'App\\Controller\\PageController:adminOrders' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController:cart' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController:checkout' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController:deleteProduct' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController:shop' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController:shopDetail' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController:tempShop' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController:tempShopDetail' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\PageController:updateCart' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::deleteProduct' => '?',
            'App\\Controller\\AdminController::deleteProductType' => '?',
            'App\\Controller\\AdminController::deleteStock' => '?',
            'App\\Controller\\AdminController::editProduct' => '?',
            'App\\Controller\\AdminController::editProductType' => '?',
            'App\\Controller\\AdminController::editStock' => '?',
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\AdminController::newProduct' => '?',
            'App\\Controller\\AdminController::newProductType' => '?',
            'App\\Controller\\AdminController::newStock' => '?',
            'App\\Controller\\AdminController::orderDetail' => '?',
            'App\\Controller\\AdminController::orders' => '?',
            'App\\Controller\\AdminController::productTypes' => '?',
            'App\\Controller\\AdminController::products' => '?',
            'App\\Controller\\AdminController::stocks' => '?',
            'App\\Controller\\AdminController::updateOrderStatus' => '?',
            'App\\Controller\\PageController::addToCart' => '?',
            'App\\Controller\\PageController::adminOrderDetail' => '?',
            'App\\Controller\\PageController::adminOrderStatus' => '?',
            'App\\Controller\\PageController::adminOrders' => '?',
            'App\\Controller\\PageController::cart' => '?',
            'App\\Controller\\PageController::checkout' => '?',
            'App\\Controller\\PageController::deleteProduct' => '?',
            'App\\Controller\\PageController::shop' => '?',
            'App\\Controller\\PageController::shopDetail' => '?',
            'App\\Controller\\PageController::tempShop' => '?',
            'App\\Controller\\PageController::tempShopDetail' => '?',
            'App\\Controller\\PageController::updateCart' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:deleteProduct' => '?',
            'App\\Controller\\AdminController:deleteProductType' => '?',
            'App\\Controller\\AdminController:deleteStock' => '?',
            'App\\Controller\\AdminController:editProduct' => '?',
            'App\\Controller\\AdminController:editProductType' => '?',
            'App\\Controller\\AdminController:editStock' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\AdminController:newProduct' => '?',
            'App\\Controller\\AdminController:newProductType' => '?',
            'App\\Controller\\AdminController:newStock' => '?',
            'App\\Controller\\AdminController:orderDetail' => '?',
            'App\\Controller\\AdminController:orders' => '?',
            'App\\Controller\\AdminController:productTypes' => '?',
            'App\\Controller\\AdminController:products' => '?',
            'App\\Controller\\AdminController:stocks' => '?',
            'App\\Controller\\AdminController:updateOrderStatus' => '?',
            'App\\Controller\\PageController:addToCart' => '?',
            'App\\Controller\\PageController:adminOrderDetail' => '?',
            'App\\Controller\\PageController:adminOrderStatus' => '?',
            'App\\Controller\\PageController:adminOrders' => '?',
            'App\\Controller\\PageController:cart' => '?',
            'App\\Controller\\PageController:checkout' => '?',
            'App\\Controller\\PageController:deleteProduct' => '?',
            'App\\Controller\\PageController:shop' => '?',
            'App\\Controller\\PageController:shopDetail' => '?',
            'App\\Controller\\PageController:tempShop' => '?',
            'App\\Controller\\PageController:tempShopDetail' => '?',
            'App\\Controller\\PageController:updateCart' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
