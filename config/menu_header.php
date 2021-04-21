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
                    ],
                    [
                        'bullet' => 'line',
                        'heading' => [
                            'heading' => true,
                            'title' => 'User Pages',
                            'bullet' => 'dot',
                        ],
                        'items' => [
                            [
                                'title' => 'Login 1',
                                'page' => 'custom/pages/user/login-1',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Login 2',
                                'page' => 'custom/pages/user/login-2',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Login 3',
                                'page' => 'custom/pages/user/login-3',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Login 4',
                                'page' => 'custom/pages/user/login-4',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Login 5',
                                'page' => 'custom/pages/user/login-5',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Login 6',
                                'page' => 'custom/pages/user/login-6',
                                'new-tab' => true
                            ]
                        ]
                    ],
                    [
                        'bullet' => 'line',
                        'heading' => [
                            'heading' => true,
                            'title' => 'Error Pages',
                            'bullet' => 'dot',
                        ],
                        'items' => [
                            [
                                'title' => 'Error 1',
                                'page' => 'custom/pages/errors/error-1',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Error 2',
                                'page' => 'custom/pages/errors/error-2',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Error 3',
                                'page' => 'custom/pages/errors/error-3',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Error 4',
                                'page' => 'custom/pages/errors/error-4',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Error 5',
                                'page' => 'custom/pages/errors/error-5',
                                'new-tab' => true
                            ],
                            [
                                'title' => 'Error 6',
                                'page' => 'custom/pages/errors/error-6',
                                'new-tab' => true
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'title' => 'SSS',
            'root' => true,
            'toggle' => 'click',
            'submenu' => [
                'type' => 'classic',
                'alignment' => 'left',
                'items' => [
                    [
                        'title' => 'Forms & Controls',
                        'desc' => 'Massive crud examples',
                        'icon' => 'media/svg/icons/Shopping/Box2.svg',
                        'bullet' => 'dot',
                        'submenu' => [
                            [
                                'title' => 'Form Controls',
                                'desc' => '',
                                'icon' => 'flaticon-interface-3',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Base Inputs',
                                        'page' => 'crud/forms/controls/base'
                                    ],
                                    [
                                        'title' => 'Input Groups',
                                        'page' => 'crud/forms/controls/input-group'
                                    ],
                                    [
                                        'title' => 'Checkbox',
                                        'page' => 'crud/forms/controls/checkbox'
                                    ],
                                    [
                                        'title' => 'Radio',
                                        'page' => 'crud/forms/controls/radio'
                                    ],
                                    [
                                        'title' => 'Switch',
                                        'page' => 'crud/forms/controls/switch'
                                    ],
                                    [
                                        'title' => 'Mega Options',
                                        'page' => 'crud/forms/controls/option'
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Form Widgets',
                                'desc' => '',
                                'icon' => 'flaticon-interface-1',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Datepicker',
                                        'page' => 'crud/forms/widgets/bootstrap-datepicker'
                                    ],
                                    [
                                        'title' => 'Datetimepicker',
                                        'page' => 'crud/forms/widgets/bootstrap-datetimepicker'
                                    ],
                                    [
                                        'title' => 'Timepicker',
                                        'page' => 'crud/forms/widgets/bootstrap-timepicker'
                                    ],
                                    [
                                        'title' => 'Daterangepicker',
                                        'page' => 'crud/forms/widgets/bootstrap-daterangepicker'
                                    ],
                                    [
                                        'title' => 'Tagify',
                                        'page' => 'crud/forms/widgets/tagify'
                                    ],
                                    [
                                        'title' => 'Touchspin',
                                        'page' => 'crud/forms/widgets/bootstrap-touchspin'
                                    ],
                                    [
                                        'title' => 'Maxlength',
                                        'page' => 'crud/forms/widgets/bootstrap-maxlength'
                                    ],
                                    [
                                        'title' => 'Switch',
                                        'page' => 'crud/forms/widgets/bootstrap-switch'
                                    ],
                                    [
                                        'title' => 'Multiple Select Splitter',
                                        'page' => 'crud/forms/widgets/bootstrap-multipleselectsplitter'
                                    ],
                                    [
                                        'title' => 'Bootstrap Select',
                                        'page' => 'crud/forms/widgets/bootstrap-select'
                                    ],
                                    [
                                        'title' => 'Select2',
                                        'page' => 'crud/forms/widgets/select2'
                                    ],
                                    [
                                        'title' => 'Typeahead',
                                        'page' => 'crud/forms/widgets/typeahead'
                                    ],
                                ]
                            ],
                            [
                                'title' => 'Form Widgets 2',
                                'desc' => '',
                                'icon' => 'flaticon-interface-1',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'noUiSlider',
                                        'page' => 'crud/forms/widgets/nouislider'
                                    ],
                                    [
                                        'title' => 'Form Repeater',
                                        'page' => 'crud/forms/widgets/form-repeater'
                                    ],
                                    [
                                        'title' => 'Ion Range Slider',
                                        'page' => 'crud/forms/widgets/ion-range-slider'
                                    ],
                                    [
                                        'title' => 'Input Masks',
                                        'page' => 'crud/forms/widgets/input-mask'
                                    ],
                                    [
                                        'title' => 'Autosize',
                                        'page' => 'crud/forms/widgets/autosize'
                                    ],
                                    [
                                        'title' => 'Clipboard',
                                        'page' => 'crud/forms/widgets/clipboard'
                                    ],
                                    [
                                        'title' => 'Google reCaptcha',
                                        'page' => 'crud/forms/widgets/recaptcha'
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Form Text Editors',
                                'desc' => '',
                                'icon' => 'flaticon-interface-1',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'TinyMCE',
                                        'page' => 'crud/forms/editors/tinymce'
                                    ],
                                    [
                                        'title' => 'CKEditor',
                                        'bullet' => 'line',
                                        'submenu' => [
                                            [
                                                'title' => 'CKEditor Classic',
                                                'page' => 'crud/forms/editors/ckeditor-classic'
                                            ],
                                            [
                                                'title' => 'CKEditor Inline',
                                                'page' => 'crud/forms/editors/ckeditor-inline'
                                            ],
                                            [
                                                'title' => 'CKEditor Balloon',
                                                'page' => 'crud/forms/editors/ckeditor-balloon'
                                            ],
                                            [
                                                'title' => 'CKEditor Balloon Block',
                                                'page' => 'crud/forms/editors/ckeditor-balloon-block'
                                            ],
                                            [
                                                'title' => 'CKEditor Document',
                                                'page' => 'crud/forms/editors/ckeditor-document'
                                            ],
                                        ]
                                    ],
                                    [
                                        'title' => 'Quill Text Editor',
                                        'page' => 'crud/forms/editors/quill'
                                    ],
                                    [
                                        'title' => 'Summernote WYSIWYG',
                                        'page' => 'crud/forms/editors/summernote'
                                    ],
                                    [
                                        'title' => 'Markdown Editor',
                                        'page' => 'crud/forms/editors/bootstrap-markdown'
                                    ],
                                ]
                            ],
                            [
                                'title' => 'Form Layouts',
                                'desc' => '',
                                'icon' => 'flaticon-web',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Default Forms',
                                        'page' => 'crud/forms/layouts/default-forms'
                                    ],
                                    [
                                        'title' => 'Multi Column Forms',
                                        'page' => 'crud/forms/layouts/multi-column-forms'
                                    ],
                                    [
                                        'title' => 'Basic Action Bars',
                                        'page' => 'crud/forms/layouts/action-bars'
                                    ],
                                    [
                                        'title' => 'Sticky Action Bar',
                                        'page' => 'crud/forms/layouts/sticky-action-bar'
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Form Validation',
                                'desc' => '',
                                'icon' => 'flaticon-calendar-2',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Validation States',
                                        'page' => 'crud/forms/validation/states'
                                    ],
                                    [
                                        'title' => 'Form Controls',
                                        'page' => 'crud/forms/validation/form-controls'
                                    ],
                                    [
                                        'title' => 'Form Widgets',
                                        'page' => 'crud/forms/validation/form-widgets'
                                    ]
                                ]
                            ]
                        ]
                    ],

                    [
                        'title' => 'KTDatatable',
                        'desc' => '',
                        'icon' => 'media/svg/icons/General/Thunder-move.svg',
                        'bullet' => 'dot',
                        'submenu' => [
                            [
                                'title' => 'Base',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Local Data',
                                        'page' => 'crud/ktdatatable/base/data-local',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'JSON Data',
                                        'page' => 'crud/ktdatatable/base/data-json',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'Ajax Data',
                                        'page' => 'crud/ktdatatable/base/data-ajax',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'HTML Table',
                                        'page' => 'crud/ktdatatable/base/html-table',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'Local Sort',
                                        'page' => 'crud/ktdatatable/base/local-sort',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'Translation',
                                        'page' => 'crud/ktdatatable/base/translation',
                                        'icon' => '',
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Advanced',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Record Selection',
                                        'page' => 'crud/ktdatatable/advanced/record-selection',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'Row Details',
                                        'page' => 'crud/ktdatatable/advanced/row-details',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'Modal Examples',
                                        'page' => 'crud/ktdatatable/advanced/modal',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'Column Rendering',
                                        'page' => 'crud/ktdatatable/advanced/column-rendering',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'Column Width',
                                        'page' => 'crud/ktdatatable/advanced/column-width',
                                        'icon' => '',
                                    ],
                                    [
                                        'title' => 'Vertical Scrolling',
                                        'page' => 'crud/ktdatatable/advanced/vertical',
                                        'icon' => ''
                                    ]
                                ]
                            ],
                            /*[
                                'title' => 'Scrolling',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Vertical Scrolling',
                                        'page' => 'crud/ktdatatable/scrolling/vertical',
                                        'icon' => ''
                                    ],
                                    [
                                        'title' => 'Horizontal Scrolling',
                                        'page' => 'crud/ktdatatable/scrolling/horizontal',
                                        'icon' => ''
                                    ],
                                    [
                                        'title' => 'Both Scrolling',
                                        'page' => 'crud/ktdatatable/scrolling/both',
                                        'icon' => ''
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Locked Columns',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Left Locked Columns',
                                        'page' => 'crud/ktdatatable/locked/left',
                                        'icon' => ''
                                    ],
                                    [
                                        'title' => 'Right Locked Columns',
                                        'page' => 'crud/ktdatatable/locked/right',
                                        'icon' => ''
                                    ],
                                    [
                                        'title' => 'Both Locked Columns',
                                        'page' => 'crud/ktdatatable/locked/both',
                                        'icon' => ''
                                    ],
                                    [
                                        'title' => 'HTML Table',
                                        'page' => 'crud/ktdatatable/locked/html-table',
                                        'icon' => ''
                                    ]
                                ]
                            ],*/
                            [
                                'title' => 'Child Datatables',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Local Data',
                                        'page' => 'crud/ktdatatable/child/data-local',
                                        'icon' => ''
                                    ],
                                    [
                                        'title' => 'Remote Data',
                                        'page' => 'crud/ktdatatable/child/data-ajax',
                                        'icon' => ''
                                    ]
                                ]
                            ],
                            [
                                'title' => 'API',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'API Methods',
                                        'page' => 'crud/ktdatatable/api/methods',
                                        'icon' => ''
                                    ],
                                    [
                                        'title' => 'Events',
                                        'page' => 'crud/ktdatatable/api/events',
                                        'icon' => ''
                                    ]
                                ]
                            ]
                        ]
                    ],

                    [
                        'title' => 'Datatables.net',
                        'desc' => '',
                        'icon' => 'media/svg/icons/Shopping/Gift.svg',
                        'bullet' => 'dot',
                        'submenu' => [
                            [
                                'title' => 'Basic',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Basic Tables',
                                        'page' => 'crud/datatables/basic/basic',
                                    ],
                                    [
                                        'title' => 'Scrollable Tables',
                                        'page' => 'crud/datatables/basic/scrollable',
                                    ],
                                    [
                                        'title' => 'Complex Headers',
                                        'page' => 'crud/datatables/basic/headers',
                                    ],
                                    [
                                        'title' => 'Pagination Options',
                                        'page' => 'crud/datatables/basic/paginations',
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Advanced',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Column Rendering',
                                        'page' => 'crud/datatables/advanced/column-rendering',
                                    ],
                                    [
                                        'title' => 'Multiple Controls',
                                        'page' => 'crud/datatables/advanced/multiple-controls',
                                    ],
                                    [
                                        'title' => 'Column Visibility',
                                        'page' => 'crud/datatables/advanced/column-visibility',
                                    ],
                                    [
                                        'title' => 'Row Callback',
                                        'page' => 'crud/datatables/advanced/row-callback',
                                    ],
                                    [
                                        'title' => 'Row Grouping',
                                        'page' => 'crud/datatables/advanced/row-grouping',
                                    ],
                                    [
                                        'title' => 'Footer Callback',
                                        'page' => 'crud/datatables/advanced/footer-callback',
                                    ],
                                ]
                            ],
                            [
                                'title' => 'Data sources',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'HTML',
                                        'page' => 'crud/datatables/data-sources/html',
                                    ],
                                    [
                                        'title' => 'Javascript',
                                        'page' => 'crud/datatables/data-sources/javascript',
                                    ],
                                    [
                                        'title' => 'Ajax Client-side',
                                        'page' => 'crud/datatables/data-sources/ajax-client-side',
                                    ],
                                    [
                                        'title' => 'Ajax Server-side',
                                        'page' => 'crud/datatables/data-sources/ajax-server-side',
                                    ]
                                ]
                            ],
                            [
                                'title' => 'Search Options',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Column Search',
                                        'page' => 'crud/datatables/search-options/column-search',
                                    ],
                                    [
                                        'title' => 'Advanced Search',
                                        'page' => 'crud/datatables/search-options/advanced-search',
                                    ],
                                ]
                            ],
                            [
                                'title' => 'Extensions',
                                'desc' => '',
                                'bullet' => 'dot',
                                'submenu' => [
                                    [
                                        'title' => 'Buttons',
                                        'page' => 'crud/datatables/extensions/buttons',
                                    ],
                                    [
                                        'title' => 'ColReorder',
                                        'page' => 'crud/datatables/extensions/colreorder',
                                    ],
                                    /*[
                                        'title' => 'FixedColumns',
                                        'page' => 'crud/datatables/extensions/fixedcolumns',
                                    ],
                                    [
                                        'title' => 'FixedHeader',
                                        'page' => 'crud/datatables/extensions/fixedheader',
                                    ],*/
                                    [
                                        'title' => 'KeyTable',
                                        'page' => 'crud/datatables/extensions/keytable',
                                    ],
                                    [
                                        'title' => 'Responsive',
                                        'page' => 'crud/datatables/extensions/responsive',
                                    ],
                                    [
                                        'title' => 'RowGroup',
                                        'page' => 'crud/datatables/extensions/rowgroup',
                                    ],
                                    [
                                        'title' => 'RowReorder',
                                        'page' => 'crud/datatables/extensions/rowreorder',
                                    ],
                                    [
                                        'title' => 'Scroller',
                                        'page' => 'crud/datatables/extensions/scroller',
                                    ],
                                    [
                                        'title' => 'Select',
                                        'page' => 'crud/datatables/extensions/select'
                                    ]
                                ]
                            ],
                        ]
                    ],

                    [
                        'title' => 'File Upload',
                        'desc' => '',
                        'icon' => 'media/svg/icons/Shopping/Gift.svg',
                        'bullet' => 'dot',
                        'submenu' => [
                            [
                                'title' => 'Image Input',
                                'page' => 'crud/file-upload/image-input',
                            ],
                            [
                                'title' => 'DropzoneJS',
                                'page' => 'crud/file-upload/dropzonejs'
                            ],
                            [
                                'title' => 'Uppy',
                                'page' => 'crud/file-upload/uppy'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]

];
