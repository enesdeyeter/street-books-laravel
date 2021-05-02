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
                            'title' => 'Kısayollar',
                            'desc' => '',
                        ],
                        'items' => [
                            [
                                'title' => 'Kitaplar Hakkında Yorum Yapın',
                                'page' => '/book-comment',
                                'new-tab' => false,
                            ]
                        ]
                    ],
                    [
                        'bullet' => 'line',
                        'heading' => [
                            'heading' => true,
                            'title' => 'Kitaplar Hakkında',
                            'desc' => '',
                        ],
                        'items' => [
                            [
                                'title' => 'Yeni Kitap Öner',
                                'page' => '/book/add'
                            ],
                            [
                                'title' => 'Kitap Düzenlemesi Öner',
                                'page' => '/coming-soon'
                            ],
                            [
                                'title' => 'Kitap Şikayet Et',
                                'page' => '/coming-soon'
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'title' => 'Yardım',
            'root' => true,
            'page' => '/coming-soon',
            'new-tab' => false,
        ],
        [
            'title' => 'SSS',
            'root' => true,
            'page' => '/coming-soon',
            'new-tab' => false,
        ]
    ]

];
