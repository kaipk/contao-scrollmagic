<?php

foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key => $palette) {

    if (is_string($key)) {
        $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = str_replace(
            '{invisible_legend:hide}',
            '{scrollmagic_legend:hide},
                    scrollmagicAnimation;
                    {invisible_legend:hide}',
            $palette
        );
    }

}

$GLOBALS['TL_DCA']['tl_content']['fields']['scrollmagicAnimation'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['scrollmagicAnimation'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => array('tl_class' => 'w50 m12'),
    'sql' => "char(1) NOT NULL default ''"
);

class tl_content_scrollmagic
{

}
