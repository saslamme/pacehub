<?php
namespace Pacehub\ToolsCalculatorsBundle\Module;
use Contao\Module;

class CalcTools extends Module
{
    protected $strTemplate = 'mod_calc_tools';

    protected function compile(): void
    {
        $this->Template->calculatorType  = $this->calc_tools_type ?: 'pace';
        $this->Template->defaultDistance = (float) ($this->calc_default_distance ?: 10.0);
        $this->Template->unit            = $this->calc_unit ?: 'km';
        $this->Template->showSpeed       = true;

        // Slider ranges from backend (km / kmh)
        $this->Template->distanceMin  = (string) ($this->calc_distance_min  !== null && $this->calc_distance_min  !== '' ? $this->calc_distance_min  : '0');
        $this->Template->distanceMax  = (string) ($this->calc_distance_max  !== null && $this->calc_distance_max  !== '' ? $this->calc_distance_max  : '100');
        $this->Template->distanceStep = (string) ($this->calc_distance_step !== null && $this->calc_distance_step !== '' ? $this->calc_distance_step : '0.1');

        $this->Template->speedMin  = (string) ($this->calc_speed_min  !== null && $this->calc_speed_min  !== '' ? $this->calc_speed_min  : '0');
        $this->Template->speedMax  = (string) ($this->calc_speed_max  !== null && $this->calc_speed_max  !== '' ? $this->calc_speed_max  : '30');
        $this->Template->speedStep = (string) ($this->calc_speed_step !== null && $this->calc_speed_step !== '' ? $this->calc_speed_step : '0.1');

        // Cache-busted JS filename
        $GLOBALS['TL_JAVASCRIPT']['tools_calculators'] = 'bundles/toolscalculators/tools.v186.js|static';
        $GLOBALS['TL_CSS']['tools_calculators'] = 'bundles/toolscalculators/tools.css|static';
    }
}
