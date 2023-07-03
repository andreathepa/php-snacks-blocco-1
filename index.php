<?php
    
    $lba = [
        [
            'teams'  => 'Brindisi - Trieste',
            'result' => '90-40'
        ],
        [
            'teams'  => 'Olimpia - Milano',
            'result' => '80-50'
        ],
        [
            'teams'  => 'Sassari - Pesaro',
            'result' => '75-49'
        ],
        [
            'teams'  => 'Tortona - Reggiana',
            'result' => '56-89'
        ],
        [
            'teams'  => 'Trento - Scafati',
            'result' => '97-48'
        ],
        [
            'teams'  => 'Brescia - Venezia',
            'result' => '52-78'
        ]        
        ];

    $basket = [
        [
            'home'      => 'Brindisi',
            'guest'     => 'Trieste',
            'result'    => '85-40'
        ],
        [
            'home'      => 'Olimpia',
            'guest'     => 'Milano',
            'result'    => '90-105'
        ],
        [
            'home'      => 'Sassari',
            'guest'     => 'Pesaro',
            'result'    => '90-85'
        ],
        [
            'home'      => 'Tortona',
            'guest'     => 'Reggiana',
            'result'    => '59-70'
        ],
        ];


       


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>snack php</title>
</head>
<body>
    <div class="container">
        <h1>Snack 1</h1>
        <div class="row">
            <div class="col-12">
                <h3>Array prova 1</h3>

                <ul class="list-unstyled">
                    <?php foreach($lba as $game) { ?>
                        <li>
                            <?php echo ($game['teams']." ".$game['result']); ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-12">
                <h3>Array prova 2</h3>

                <ul class="list-unstyled">
                    <?php foreach($basket as $data) { ?>
                        <li>
                            <?php echo ($data['home']." - ".$data['guest'].": ".$data['result']); ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>