<?php

declare(strict_types=1);

// increase memory limit to 2GB
ini_set('memory_limit', '2048M');


require __DIR__ . '/../../vendor/autoload.php';

$container = \AIO\DependencyInjection::GetContainer();

/** @var \AIO\Controller\DockerController $dockerController */
$dockerController = $container->get(\AIO\Controller\DockerController::class);

// Start apache
$dockerController->stopTopContainer();
