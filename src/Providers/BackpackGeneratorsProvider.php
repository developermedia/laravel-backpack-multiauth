<?php

namespace ZoutApps\LaravelBackpackAuth\Providers;


use ZoutApps\LaravelBackpackAuth\Generators\BackpackControllersGenerator;
use ZoutApps\LaravelBackpackAuth\Generators\BackpackRouteFileGenerator;
use ZoutApps\LaravelBackpackAuth\Generators\MiddlewaresGenerator;
use ZoutApps\LaravelBackpackAuth\Generators\MigrationsGenerator;
use ZoutApps\LaravelBackpackAuth\Generators\ModelGenerator;
use ZoutApps\LaravelBackpackAuth\Generators\NotificationGenerator;
use ZoutApps\LaravelBackpackAuth\Generators\RoleModelGenerator;
use ZoutApps\LaravelBackpackAuth\Generators\ScopeGenerator;
use ZoutApps\LaravelBackpackAuth\Generators\ViewsGenerator;

class BackpackGeneratorsProvider extends GeneratorsProvider
{
    /**
     * @var \ZoutApps\LaravelBackpackAuth\Generators\BackpackControllersGenerator
     */
    public $controllersGenerator;
    /**
     * @var \ZoutApps\LaravelBackpackAuth\Generators\MiddlewaresGenerator
     */
    public $middlewaresGenerator;
    /**
     * @var \ZoutApps\LaravelBackpackAuth\Generators\MigrationsGenerator
     */
    public $migrationsGenerator;
    /**
     * @var \ZoutApps\LaravelBackpackAuth\Generators\ModelGenerator
     */
    public $modelGenerator;
    /**
     * @var \ZoutApps\LaravelBackpackAuth\Generators\NotificationGenerator
     */
    public $notificationGenerator;
    /**
     * @var \ZoutApps\LaravelBackpackAuth\Generators\RoleModelGenerator
     */
    public $roleModelGenerator;
    /**
     * @var \ZoutApps\LaravelBackpackAuth\Generators\BackpackRouteFileGenerator
     */
    public $routeFileGenerator;
    /**
     * @var \ZoutApps\LaravelBackpackAuth\Generators\ViewsGenerator
     */
    public $viewsGenerator;

    /**
     * @var \ZoutApps\LaravelBackpackAuth\Generators\ScopeGenerator
     */
    public $scopeGenerator;

    function __construct(
        BackpackControllersGenerator $controllersGenerator,
        MiddlewaresGenerator $middlewaresGenerator,
        MigrationsGenerator $migrationsGenerator,
        ModelGenerator $modelGenerator,
        NotificationGenerator $notificationGenerator,
        RoleModelGenerator $roleModelGenerator,
        BackpackRouteFileGenerator $routeFileGenerator,
        ViewsGenerator $viewsGenerator,
        ScopeGenerator $scopeGenerator
    ) {
        $this->controllersGenerator = $controllersGenerator;
        $this->middlewaresGenerator = $middlewaresGenerator;
        $this->migrationsGenerator = $migrationsGenerator;
        $this->modelGenerator = $modelGenerator;
        $this->notificationGenerator = $notificationGenerator;
        $this->roleModelGenerator = $roleModelGenerator;
        $this->routeFileGenerator = $routeFileGenerator;
        $this->viewsGenerator = $viewsGenerator;
        $this->scopeGenerator = $scopeGenerator;
    }
}