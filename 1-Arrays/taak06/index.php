<?php
$provincies = [
    [
        'provincie' => 'Groningen',
        'hoofdstad' => 'Groningen',
        'bevolking'  => '583990',
        'inwoners_gemeente' => 'meeste inwoners in gemeente: Groningen'
    ],
    [
        'provincie' => 'Overijssel',
        'hoofdstad' => 'Zwolle',
        'bevolking'=> '1156431',
        'inwoners_gemeente' => 'meeste inwoners in gemeente: Enschede'
    ],
    [
        'provincie' => 'Noord-Holland',
        'hoofdstad' => 'Haarlem',
        'bevolking'  => '2853359',
        'inwoners_gemeente' => 'meeste inwoners in gemeente: Amsterdam'
    ],
    [
        'provincie' => 'Zuid-Holland',
        'hoofdstad' => 'Den Haag',
        'bevolking'=> '3673893',
        'inwoners_gemeente' => 'meeste inwoners in gemeente: Rotterdam'
    ]
];   
foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';
}
?>