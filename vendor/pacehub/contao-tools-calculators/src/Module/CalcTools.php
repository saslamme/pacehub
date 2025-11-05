<?php
namespace Pacehub\ToolsCalculatorsBundle\Module;
use Contao\Module;

class CalcTools extends Module
{
    protected $strTemplate = 'mod_calc_tools';

    protected function compile(): void
    {
        $this->Template->calculatorType = $this->calc_tools_type ?: 'pace';

        $defaultDistance = (float) ($this->calc_default_distance ?: 10.0);
        if ($this->Template->calculatorType === 'swim_pace') {
            $defaultDistance = $defaultDistance > 0 ? $defaultDistance : 1500.0;
        }

        $this->Template->defaultDistance = $defaultDistance;
        $this->Template->unit            = $this->calc_unit ?: 'km';
        $this->Template->showSpeed       = true;

        // Slider ranges from backend (km / kmh)
        $distanceMinDefault  = '0';
        $distanceMaxDefault  = '100';
        $distanceStepDefault = '0.1';

        if ($this->Template->calculatorType === 'swim_pace') {
            $distanceMaxDefault  = '10000';
            $distanceStepDefault = '1';
        }

        $this->Template->distanceMin  = (string) ($this->calc_distance_min  !== null && $this->calc_distance_min  !== '' ? $this->calc_distance_min  : $distanceMinDefault);
        $this->Template->distanceMax  = (string) ($this->calc_distance_max  !== null && $this->calc_distance_max  !== '' ? $this->calc_distance_max  : $distanceMaxDefault);
        $this->Template->distanceStep = (string) ($this->calc_distance_step !== null && $this->calc_distance_step !== '' ? $this->calc_distance_step : $distanceStepDefault);

        $this->Template->speedMin  = (string) ($this->calc_speed_min  !== null && $this->calc_speed_min  !== '' ? $this->calc_speed_min  : '0');
        $this->Template->speedMax  = (string) ($this->calc_speed_max  !== null && $this->calc_speed_max  !== '' ? $this->calc_speed_max  : '30');
        $this->Template->speedStep = (string) ($this->calc_speed_step !== null && $this->calc_speed_step !== '' ? $this->calc_speed_step : '0.1');

        // Cache-busted JS filename
        $GLOBALS['TL_JAVASCRIPT']['tools_calculators'] = 'bundles/toolscalculators/tools.v188.js|static';
        $GLOBALS['TL_CSS']['tools_calculators'] = 'bundles/toolscalculators/tools.css|static';
    }
}
