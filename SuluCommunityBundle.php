<?php

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\CommunityBundle;

use Sulu\Bundle\CommunityBundle\DependencyInjection\CompilerPass\CommunityManagerCompilerPass;
use Sulu\Bundle\CommunityBundle\DependencyInjection\CompilerPass\CommunityValidatorCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Register the bundles compiler passes.
 */
class SuluCommunityBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new CommunityManagerCompilerPass());
        $container->addCompilerPass(new CommunityValidatorCompilerPass());
    }
}
