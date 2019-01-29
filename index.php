<!DOCTYPE php>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="test.css"/>
        <title>Liste</title>
    </head>
    <body>
        <?php
            $students=array(
                array(
                    'id'=>1,
                    'firstname'=>'Vinh',
                    'lastname'=>'Ngo',
                    'email'=>'azer@azer.fr',
                ),
                array(
                    'id'=>2,
                    'firstname'=>'Alexis',
                    'lastname'=>'Lotis',
                    'email'=>'alex@azer.fr',
                )
            );
            echo"<h1>Students</h1>";
            foreach($students as $student){
                echo"<li>$student[firstname] $student[lastname] $student[email]</li>";
            };
        ?>
    </body>
</html>
