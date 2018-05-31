<?php

return [
    'navigation'    => [
        'type'       => 'anomaly.field_type.textarea',
        'input_view' => 'pixney.theme.hjortron::admin/navigation/settings',
    ],
    'color_scheme'        => [
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'options'       => [
                'Dark'   => 'Dark',
                'Blue'   => 'Blue'
            ],
            'default_value' => 'dark',
            'mode'          => 'dropdown',
        ],
    ],
];
