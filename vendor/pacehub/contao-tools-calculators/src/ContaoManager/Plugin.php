<?php
namespace Pacehub\ToolsCalculatorsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Pacehub\ToolsCalculatorsBundle\ToolsCalculatorsBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ToolsCalculatorsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
