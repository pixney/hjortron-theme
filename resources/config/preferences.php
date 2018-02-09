<?php

return [
    'navigation'    => [
        'type'       => 'anomaly.field_type.textarea',
        'input_view' => 'pixney.theme.hjortron::admin/navigation/preferences',
    ],
    'layout'        => [
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'options'       => [
                'compact' => 'Compact',
                'normal'  => 'Normal',
                'airy'    => 'Airy',
            ],
            'default_value' => 'normal',
            'mode'          => 'radio',
        ],
    ],
];
