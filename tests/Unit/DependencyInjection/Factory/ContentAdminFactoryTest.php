<?php

namespace Symfony\Cmf\Bundle\SonataPhpcrAdminIntegrationBundle\Tests\Unit\DependencyInjection\Factory;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class ContentAdminFactoryTest extends AbstractFactoryTest
{
    public function testAdminService()
    {
        $this->container->setParameter('kernel.bundles', [
            'CmfContentBundle' => true,
            'SonataDoctrinePHPCRAdminBundle' => true
        ]);

        $this->load([
            'bundles' => [
                'content' => true,
            ],
        ]);

        $this->assertContainerBuilderHasService('cmf_sonata_phpcr_admin_integration.content.admin');

    }
}
