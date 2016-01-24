<?php

namespace Pj\EntityExtendBundle;

use Pj\EntityExtendBundle\DependencyInjection\Compiler\MappingDriversPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class PjEntityExtendBundle.
 *
 * @author Paulius Jarmalavičius <paulius.jarmalavicius@gmail.com>
 */
class PjEntityExtendBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new MappingDriversPass());
    }
}