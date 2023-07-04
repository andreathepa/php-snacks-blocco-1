<?php
    
    //SNACK 1

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

    // SNACK 2

        $flag = null;
        if(isset($_GET["age"]) && isset($_GET["user"]) && isset($_GET["email"])){

            $user = $_GET["user"];

            $email = $_GET["email"];

            $age = $_GET["age"];

            if(strlen($user) > 3 && str_contains($email, '@') && str_contains($email, '.') && is_numeric($age)){

                $flag = true;

            } else{

                $flag = false;
            } 
    };

    
    // SNACK 3

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
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
    <hr>
    <div class="container">
        <h1>Snack 2</h1>
        <div class="row">
            <div class="col-12">

                <?php if($flag !== null){ ?>
                    <h4><?php echo $flag === true ? "Accesso riuscito" : "Accesso negato"; ?></h4>
                <?php } else{?>

                <form action="index.php" method="GET">
                    <input type="text" name="user">
                    <input type="text" name="email">
                    <input type="text" name="age">
                    <input type="submit" value="send">
                    

                </form>
                <?php } ?>
                    
                
            </div>
            
        </div>
    </div>

    <hr>

    <div class="container">
        <h1>Snack 3</h1>
        <div class="row">
            <div class="col-12">

            <?php foreach($posts as $key => $post) {?>
                <h2>Posted in: <?php echo $key ?></h2>
            <?php foreach($post as $item => $result){?>
                <h4><?php echo $result['author'] ?></h4>
                <h3><?php echo $result['text'] ?></p>
                <h2><?php echo $result['title'] ?></p>
        <?php }} ?>
                
            </div>
            
        </div>
    </div>
</body>
</html>