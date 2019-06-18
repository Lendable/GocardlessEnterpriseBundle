<?php

declare(strict_types=1);

namespace Lendable\GoCardlessEnterpriseBundle\Tests\DependencyInjection;

use GuzzleHttp\Client as GuzzleClient;
use Lendable\GoCardlessEnterprise\Client;
use Lendable\GoCardlessEnterpriseBundle\DependencyInjection\GoCardlessEnterpriseExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class GoCardlessEnterpriseExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions(): array
    {
        return [
            new GoCardlessEnterpriseExtension(),
        ];
    }

    protected function getMinimalConfiguration()
    {
        return [
            'baseUrl' => 'https://api-sandbox.gocardless.com/',
            'gocardlessVersion' => '2015-07-06',
            'webhook_secret' => 'BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB',
            'token' => 'CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC',
        ];
    }

    /**
     * @test
     */
    public function verify_that_after_loading_all_bundle_services_and_params_are_set()
    {
        $this->load();
        $this->compile();

        $this->assertContainerBuilderHasAlias('gocardless_enterprise.client', Client::class);
        $this->assertContainerBuilderHasService('gocardless_enterprise.client', Client::class);
        $this->assertContainerBuilderHasService('gocardless_enterprise.guzzle_client', GuzzleClient::class);
        $this->assertContainerBuilderHasService(Client::class, Client::class);
    }
}
