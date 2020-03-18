<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$slider = new FieldsBuilder('Slider');

$slider
    ->setLocation('block', '==', 'acf/slider');

$slider
    ->addRepeater('slides', [
        'layout' => 'block',
    ])
        ->addTab('content')
            ->addText('lead')
            ->addText('heading')
            ->addWysiwyg('text')
            ->addGroup('video')
                ->addText('text')
                ->addText('youtube id')
            ->endGroup()
        ->addTab('options') 
            ->addImage('background image')
            ->addColorPicker('blur',  [
                'instructions' => 'Color of the blurred dot overlapping the heading',
            ])
    ->endRepeater();

return $slider;