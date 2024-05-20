<?php

$data_kota = file_get_contents(__DIR__ . '/global/kota.json');
$kota = json_decode($data_kota, true);


$tema_list = [
    [
        'id' => 1,
        'use' => 200,
        'type' => 'basic',
        'name' => 'greenLeave',
        'value' => 'Green Leave'
    ],
    [
        'id' => 2,
        'use' => 187,
        'type' => 'basic',
        'name' => 'pinkRose',
        'value' => 'Pink Rose'
    ],
    [
        'id' => 3,
        'use' => 130,
        'type' => 'premium',
        'name' => 'nightUbud',
        'value' => 'Night Ubud'
    ],
    [
        'id' => 4,
        'use' => 180,
        'type' => 'premium',
        'name' => 'classic',
        'value' => 'Classic'
    ],
    [
        'id' => 5,
        'use' => 180,
        'type' => 'premium',
        'name' => 'darkPremium',
        'value' => 'Dark Premium'
    ]
];

// logic prosentase tema
$total_use = 0;
foreach ($tema_list as $tem) {
    $total_use += $tem['use'];
}

function protema($total, $tema)
{
    $ron = $tema / $total * 100;
    return round($ron, 2);
}


$paket_list = [
    [
        'id' => 1,
        'name' => 'hemat',
        'value' => 'Hemat = 99K'
    ],
    [
        'id' => 2,
        'name' => 'basic',
        'value' => 'Basic = 149K'
    ],
    [
        'id' => 3,
        'name' => 'pro',
        'value' => 'Pro = 399K'
    ],
    [
        'id' => 4,
        'name' => 'advance',
        'value' => 'Advance > 600K'
    ]
];
