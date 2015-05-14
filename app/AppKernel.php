<?php
/**
 * This file is part of the Symfony from Scratch tutorial
 *
 * @copyright   2015 PMG <https://www.pmg.com>
 * @license     http://opensource.org/licenses/mit MIT
 */

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

final class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new PMG\FromScratch\AppBundle\AppBundle(),
        ];

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(sprintf('%s/config/config_%s.yml', __DIR__, $this->getEnvironment()));
    }

    public function getLogDir()
    {
        return __DIR__.'/../var/log';
    }

    public function getCacheDir()
    {
        return __DIR__.'/../var/cache/'.$this->getEnvironment();
    }
}
