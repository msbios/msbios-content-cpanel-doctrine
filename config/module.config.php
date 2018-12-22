<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Content\CPanel\Doctrine;

use MSBios\CPanel\Doctrine\Factory\ControllerFactory;

return [

    //'router' => [
    //    'routes' => [
    //        'cpanel' => [
    //            'child_routes' => [
    //                'resource' => [
    //                    'type' => Segment::class,
    //                    'options' => [
    //                        'route' => 'resource[/[:action[/[:id[/]]]]]',
    //                        'defaults' => [
    //                            'controller' => Controller\ResourceController::class,
    //                        ],
    //                        'constraints' => [
    //                            'action' => 'add|edit|drop',
    //                            'id' => '[0-9]+'
    //                        ]
    //                    ]
    //                ],
    //                'resource-permission' => [
    //                    'type' => Segment::class,
    //                    'options' => [
    //                        'route' => 'resource-permission/:resource_id[/[:action[/[:id[/]]]]]',
    //                        'defaults' => [
    //                            'controller' => Controller\Resource\PermissionController::class,
    //                        ],
    //                        'constraints' => [
    //                            'action' => 'add|edit|drop',
    //                            'resource_id' => '[0-9]+',
    //                            'id' => '[0-9]+'
    //                        ]
    //                    ]
    //                ],
    //                'role' => [
    //                    'type' => Segment::class,
    //                    'options' => [
    //                        'route' => 'role[/[:action[/[:id[/]]]]]',
    //                        'defaults' => [
    //                            'controller' => Controller\RoleController::class,
    //                        ],
    //                        'constraints' => [
    //                            'action' => 'add|edit|drop',
    //                            'id' => '[0-9]+'
    //                        ]
    //                    ]
    //                ],
    //                'rule' => [
    //                    'type' => Segment::class,
    //                    'options' => [
    //                        'route' => 'rule[/[:action[/[:id[/]]]]]',
    //                        'defaults' => [
    //                            'controller' => Controller\RuleController::class,
    //                        ],
    //                        'constraints' => [
    //                            'action' => 'add|edit|drop',
    //                            'id' => '[0-9]+'
    //                        ]
    //                    ]
    //                ],
    //                'user' => [
    //                    'type' => Segment::class,
    //                    'options' => [
    //                        'route' => 'user[/[:action[/[:id[/]]]]]',
    //                        'defaults' => [
    //                            'controller' => Controller\UserController::class,
    //                        ],
    //                        'constraints' => [
    //                            'action' => 'add|edit|drop',
    //                            'id' => '[0-9]+'
    //                        ]
    //                    ]
    //                ]
    //            ]
    //        ]
    //    ]
    //],
    //
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

    //
    //'navigation' => [
    //    \MSBios\CPanel\Navigation\Sidebar::class => [
    //        'acl' => [
    //            'label' => _('Access Control List'),
    //            'uri' => '#',
    //            'class' => 'icon-accessibility',
    //            'order' => 100400,
    //            'pages' => [
    //                'user' => [
    //                    'label' => _('Users'),
    //                    'route' => 'cpanel/user',
    //                    'pages' => [
    //                        [
    //                            'label' => _('Create new user'),
    //                            'route' => 'cpanel/user',
    //                            'action' => 'add'
    //                        ], [
    //                            'label' => _('Edit user record'),
    //                            'route' => 'cpanel/user',
    //                            'action' => 'edit'
    //                        ],
    //                    ]
    //                ],
    //                'resource' => [
    //                    'label' => _('Resources'),
    //                    'route' => 'cpanel/resource',
    //                    'pages' => [
    //                        [
    //                            'label' => _('Create new resource'),
    //                            'route' => 'cpanel/resource',
    //                            'action' => 'add'
    //                        ], [
    //                            'label' => _('Edit user resource'),
    //                            'route' => 'cpanel/resource',
    //                            'action' => 'edit'
    //                        ], [
    //                            'label' => _('Resource Permissions'),
    //                            'route' => 'cpanel/resource-permission',
    //                            'pages' => [
    //                                [
    //                                    'label' => _('Create resource permission'),
    //                                    'route' => 'cpanel/resource-permission',
    //                                    'action' => 'add'
    //                                ], [
    //                                    'label' => _('Edit resource permission'),
    //                                    'route' => 'cpanel/resource-permission',
    //                                    'action' => 'edit'
    //                                ],
    //                            ]
    //                        ],
    //                    ]
    //                ],
    //                'role' => [
    //                    'label' => _('Roles'),
    //                    'route' => 'cpanel/role',
    //                    'pages' => [
    //                        [
    //                            'label' => _('Create new role'),
    //                            'route' => 'cpanel/role',
    //                            'action' => 'add'
    //                        ], [
    //                            'label' => _('Edit user role'),
    //                            'route' => 'cpanel/role',
    //                            'action' => 'edit'
    //                        ],
    //                    ]
    //                ],
    //                'rule' => [
    //                    'label' => _('Rules'),
    //                    'route' => 'cpanel/rule',
    //                    'pages' => [
    //                        [
    //                            'label' => _('Create new rule'),
    //                            'route' => 'cpanel/rule',
    //                            'action' => 'add'
    //                        ], [
    //                            'label' => _('Edit rule'),
    //                            'route' => 'cpanel/rule',
    //                            'action' => 'edit'
    //                        ],
    //                    ]
    //                ],
    //            ],
    //        ],
    //    ],
    //],
    //
    //'service_manager' => [
    //
    //    'factories' => [
    //        Module::class =>
    //            Factory\ModuleFactory::class,
    //    ]
    //
    //],
    //
    //'form_elements' => [
    //    'factories' => [
    //    ]
    //],
    //
    //'input_filters' => [
    //    'factories' => [
    //    ]
    //],
    //
    \MSBios\Theme\Module::class => [
        'themes' => [
            'limitless' => [
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
