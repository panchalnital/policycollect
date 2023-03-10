<?php
namespace Policy;

use Policy\Controller\PolicyController;
use Policy\Model\Policy;
use Policy\Model\PolicyTable;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    public function getControllerConfig()
    {
        return [
            'factories' => [
                PolicyController::class => function ($container) {
                    return new PolicyController($container->get(PolicyTable::class));
                }
            ]
        ];
    }
    public function getServiceConfig()
    {
        return [
            'factories' => [
                PolicyTable::class => function ($container) {
                    $tableGateway = $container->get(Model\PolicyTableGateway::class);
                    return new PolicyTable($tableGateway);
                },
                Model\PolicyTableGateway::class => function ($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Policy());
                    return new TableGateway('policys', $dbAdapter, null, $resultSetPrototype);
                },
            ],
        ];
    }
}