<!-- Snack 1:
## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = [
    [
        'Olimpia Milano' => 'Cantù',
        55 => 60,
    ],
    [
        'GeVi Napoli Basket' => 'Carpegna Prosciutto Pesaro',
        98 => 87,
    ],
    [
        'Germani Brescia' => 'Happy Casa Brindisi',
        75 => 69,
    ],
    [
        'Bertram Yachts Derthona Tortona' => 'EA7 Emporio Armani Milano',
        75 => 77,
    ],
    [
        'Banco di Sardegna Sassari' => 'UNAHOTELS Reggio Emilia',
        89 => 77,
    ],
];

foreach ($matches as $match) {
    foreach ($match as $key => $value) {
        echo $key . ' - ' . ' | ' . $value;
    };
};
