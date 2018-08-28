<?php

namespace Lendable\GoCardlessEnterpriseBundle\Tests\DependencyInjection;

use Lendable\GoCardlessEnterprise\Client;
use Lendable\GoCardlessEnterpriseBundle\DependencyInjection\GoCardlessEnterpriseExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class GoCardlessEnterpriseExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions()
    {
        return [
            new GoCardlessEnterpriseExtension(),
        ];
    }

    /**
     * @test
     */
    public function verify_that_after_loading_all_bundle_services_and_params_are_set()
    {
        $this->assertContainerBuilderHasAlias('gocardless_enterprise.client', Client::class);
        $this->assertContainerBuilderHasService(Client::class, Client::class);
        $this->assertContainerBuilderHasParameter('gocardless_enterprise');
    }
}
