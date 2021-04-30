<?php
// Header menu
return [

    'items' => [
        [],
        [
            'title' => 'Anasayfa',
            'root' => true,
            'page' => '/home',
            'new-tab' => false,
        ],
        [
            'title' => 'Kitaplar',
            'root' => true,
            'page' => '/books',
            'new-tab' => false,
        ],
        [
            'title' => 'Araçlar',
            'root' => true,
            'toggle' => 'click',
            'submenu' => [
                'type' => 'mega',
                'width' => '1000px',
                'alignment' => 'center',
                'columns' => [
                    [
                        'bullet' => 'line',
                        'heading' => [
                            'heading' => true,
                            'title' => 'Pricing Tables',
                            'desc' => '',
                        ],
                        'items' => [
                            [
                                'title' => 'Pricing Tables 1',
                                'page' => 'custom/pages/pricing/pricing-1'
                            ],
                            [
                                'title' => 'Pricing Tables 2',
                                'page' => 'custom/pages/pricing/pricing-2'
                            ],
                            [
                                'title' => 'Pricing Tables 3',
                                'page' => 'custom/pages/pricing/pricing-3'
                            ],
                            [
                                'title' => 'Pricing Tables 4',
                                'page' => 'custom/pages/pricing/pricing-4'
                            ]
                        ]
                    ],
                    [
                        'bullet' => 'line',
                        'heading' => [
                            'heading' => true,
                            'title' => 'Wizards',
                            'desc' => '',
                        ],
                        'items' => [
                            [
                                'title' => 'Wizard 1',
                                'page' => 'custom/pages/wizard/wizard-1'
                            ],
                            [
                                'title' => 'Wizard 2',
                                'page' => 'custom/pages/wizard/wizard-2'
                            ],
                            [
                                'title' => 'Wizard 3',
                                'page' => 'custom/pages/wizard/wizard-3'
                            ],
                            [
                                'title' => 'Wizard 4',
                                'page' => 'custom/pages/wizard/wizard-4'
                            ]
                        ]
                    ],
                    [
                        'bullet' => 'line',
                        'heading' => [
                            'heading' => true,
                            'title' => 'Invoices & FAQ',
                            'desc' => '',
                            'bullet' => 'dot',
                        ],
                        'items' => [
                            [
                                'title' => 'Invoice 1',
                                'page' => 'custom/pages/invoices/invoice-1'
                            ],
                            [
                                'title' => 'Invoice 2',
                                'page' => 'custom/pages/invoices/invoice-2'
                            ],
                            [
                                'title' => 'FAQ 1',
                                'page' => 'custom/pages/faq/faq-1'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'title' => 'Yardım',
            'root' => true,
            'toggle' => 'click',
            'submenu' => [
                'type' => 'classic',
                'alignment' => 'left',
                'items' => [
                    [
                        'title' => 'Kitaplar Hakkında Yorum Yapın',
                        'desc' => 'Massive crud examples',
                        'icon' => 'media/svg/icons/Home/Library.svg',
                        'page' => '/book-comment',
                        'new-tab' => false,
                    ],
                    [
                        'title' => 'Forms & Controls',
                        'desc' => 'Massive crud examples',
                        'icon' => 'media/svg/icons/Shopping/Box2.svg',
                        'page' => '/home',
                        'new-tab' => false,
                    ],
                    [
                        'title' => 'Forms & Controls',
                        'desc' => 'Massive crud examples',
                        'icon' => 'media/svg/icons/Shopping/Box2.svg',
                        'page' => '/home',
                        'new-tab' => false,
                    ],
                    [
                        'title' => 'Forms & Controls',
                        'desc' => 'Massive crud examples',
                        'icon' => 'media/svg/icons/Shopping/Box2.svg',
                        'page' => '/home',
                        'new-tab' => false,
                    ],
                ]
            ]
        ],
        [
            'title' => 'SSS',
            'root' => true,
            'page' => '/home',
            'new-tab' => false,
        ]
    ]

];
