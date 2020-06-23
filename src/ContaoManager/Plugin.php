<?php


namespace kaipk\ScrollmagicBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;

/**
 * Plugin for the Contao Manager.
 *
 * @author KAIPO EDV IT Ges.m.b.H <https://kaipo.at>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('kaipk\ScrollmagicBundle\ScrollmagicBundle')
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}