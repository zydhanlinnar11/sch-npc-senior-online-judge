<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.factory' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormFactoryInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormFactory.php';

return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')));