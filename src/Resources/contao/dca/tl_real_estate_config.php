<?php

declare(strict_types=1);

/*
 * This file is part of Contao EstateManager.
 *
 * @see        https://www.contao-estatemanager.com/
 * @source     https://github.com/contao-estatemanager/google-services
 * @copyright  Copyright (c) 2021 Oveleon GbR (https://www.oveleon.de)
 * @license    https://www.contao-estatemanager.com/lizenzbedingungen.html
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

// Add field
$GLOBALS['TL_DCA']['tl_real_estate_config']['fields']['googleApiToken'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_real_estate_config']['googleApiToken'],
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50'],
];

// Extend default palette
PaletteManipulator::create()
    ->addLegend('google_legend', 'filter_config_legend', PaletteManipulator::POSITION_AFTER)
    ->addField(['googleApiToken'], 'google_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_real_estate_config')
;
