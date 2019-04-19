<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= form_open('horaire')?>
        <?= form_label("Jour : ", "jour");?>
        <?= form_input(
                ['name' => "jour", 
                 'id'   => "jour", 
                 'type' => "date"
                ]
            ); 
        ?>
        <br>
        <?= form_label("Heure debut :", "heureDebut"); ?>
        <?= form_input(
                ['name' => 'heureDebut',
                 'id'   => 'heureDebut',
                 'type' => 'text'
                ]
            );?>

        
    <?= form_close()?>
</body>
</html>