<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Content\CPanel\Doctrine;

use MSBios\CPanel\Doctrine\Factory\ControllerFactory;

return [

    'controllers' => [

        'factories' => [
            Controller\TextPageController::class =>
                ControllerFactory::class,
        ],
        'aliases' => [
            \MSBios\Content\CPanel\Controller\TextPageController::class =>
                Controller\TextPageController::class
        ]
    ],

    'form_elements' => [
        'aliases' => [
            Controller\TextPageController::class =>
                \MSBios\Content\Resource\Form\TextPageForm::class
        ]
    ],

    \MSBios\Theme\Module::class => [
        'themes' => [
            'limitless' => [
                'template_map' => [
                    'ms-bios/content/c-panel/doctrine/text-page/add' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/content/c-panel/doctrine/text-page/form.phtml',
                    'ms-bios/content/c-panel/doctrine/text-page/edit' =>
                        __DIR__ . '/../themes/limitless/view/ms-bios/content/c-panel/doctrine/text-page/form.phtml',

                ],
                'template_path_stack' => [
                    __DIR__ . '/../themes/limitless/view/',
                ],
                'translation_file_patterns' => [
                    [
                        'type' => 'gettext',
                        'base_dir' => __DIR__ . '/../themes/limitless/language/',
                        'pattern' => '%s.mo',
                    ]
                ]
            ]
        ]
    ],
];
