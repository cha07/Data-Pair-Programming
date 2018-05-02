<?php 

 $datas = [
    "students" => [
        [
            "firstname" => "DURON",
            "lastname" => "Stacy",
            "address" => [
                "street" => "rue de l'ACS",
                "numero" => "12",
                "zipcode" => 39000,
                "city" => "Lons-le-Saunier",
                "country" => "France"
            ]
        ],
        [
            "firstname" => "SAULEY",
            "lastname" => "Pierre",
            "address" => [
                "street" => "rue de fedora",
                "zipcode" => 39100,
                "city" => "Dole",
                "country" => "France"
            ]
        ],
        [
            "firstname" => "CARREY",
            "lastname" => "Raphaël",
            "address" => [
                "street" => "boulevard de l'ES6",
                "numero" => "42",
                "zipcode" => 39100,
                "city" => "Dole",
                "country" => "France"
            ]
        ]
    ],
    "coachs" => [
        [
            "firstname" => "LOUIS",
            "lastname" => "Morgane",
            "skills" => [
                "design", "wireframing", "frontend", "photoshop"
            ],
            "birthdate" => new DateTime('1990-10-10')
        ],
        [
            "firstname" => "TOURNIER",
            "lastname" => "Anthony",
            "skills" => [
                "pas design", "php", "backend", "linux"
            ],
            "birthdate" => new DateTime('1990-10-20')
        ]
    ]
];



      
      
      //echo $datas['students']; //['firstname'];
        echo '<br>';
        echo "<table>";

        foreach ( $datas['students'] as $student) {
            echo '<tr>
                    <td>'.$student['firstname'].'</td>
                    <td>'.$student['lastname'].'</td>
                    <td>'.$student['address']['street'].'</td>
    ';
    if(isset($student['address']['numero'])){
            echo '  <td>'.$student['address']['numero'].'</td>';
        }  
            echo '  <td>'.$student['address']['zipcode'].'</td>
                    <td>'.$student['address']['city'].'</td>
                    <td>'.$student['address']['country'].'</td>';
        }
            echo '</table>';

            echo '<br>';


    $stud = $datas['students'];
    $nbStudents =  count($stud);
    
    
            echo "<table>";
    $i=0;
        
    while ($i < $nbStudents) {
        //echo $datas[$i]['firstname'].'<br>';
        echo '<tr>
                    <td>'.$stud[$i]['firstname'].'</td>
                    <td>'.$stud[$i]['lastname'].'</td>
                    <td>'.$stud[$i]['address']['street'].'</td>
    ';
    if(isset($stud[$i]['address']['numero'])){
            echo '  <td>'.$stud[$i]['address']['numero'] .'</td>';
            }  
            echo ' <td>'.$stud[$i]['address']['zipcode'].'</td>
                    <td>'. $stud[$i]['address']['city'].'</td>
                    <td>'. $stud[$i]['address']['country'].'</td>';

       
        $i++;
    }
    echo'</table>';
    echo '<br>';
    echo"<table>";

    for($j=0;$j<$nbStudents;$j++){
        echo '<tr>
                    <td>'.$stud[$j]['firstname'].'</td>
                    <td>'.$stud[$j]['lastname'].'</td>
                    <td>'.$stud[$j]['address']['street'].'</td>
    ';
    if(isset($stud[$j]['address']['numero'])){
            echo '  <td>'.$stud[$j]['address']['numero'] .'</td>';
            }  
            echo ' <td>'.$stud[$j]['address']['zipcode'].'</td>
                    <td>'. $stud[$j]['address']['city'].'</td>
                    <td>'. $stud[$j]['address']['country'].'</td>';
    } 
      
    echo "</table>";
    echo '<br>';

    echo '<hr>';
    echo '<table>';
    foreach ($datas['coachs'] as $coach) {

        $birthdate=$coach['birthdate']->format('d-m-Y');
        echo '<tr>
        <td>'.$coach['firstname'].'</td>
        <td>'.$coach['lastname'].'</td>
        <td>'.implode("</td><td>",$coach['skills']).'</td>
        
        <td>'.$birthdate.'</td>
        ';
        
    }

    echo '</table>';
    echo '<br>';


    $chief=$datas['coachs'];
    $nbCoachs=count($chief);
    //echo $nbCoachs;
    $k=0;

    echo '<table>';

    while($k<$nbCoachs){

        echo '<tr>
        <td>'.$chief[$k]['firstname'].'</td>
        <td>'.$chief[$k]['lastname'].'</td>
        <td>'.$chief[$k]['skills'][0].'</td>
        <td>'.$chief[$k]['skills'][1].'</td>
        <td>'.$chief[$k]['skills'][2].'</td>
        <td>'.$chief[$k]['skills'][3].'</td>
        <td>'.$chief[$k]['birthdate']->format('d-m-Y').'</td>
        ';
        $k++;

    }
    echo '</table>';
    echo '<br>';
    echo '<table>';

    for ($f=0; $f <$nbCoachs ; $f++) { 
        echo '<tr>
        <td>'.$chief[$f]['firstname'].'</td>
        <td>'.$chief[$f]['lastname'].'</td>
        <td>'.$chief[$f]['skills'][0].'</td>
        <td>'.$chief[$f]['skills'][1].'</td>
        <td>'.$chief[$f]['skills'][2].'</td>
        <td>'.$chief[$f]['skills'][3].'</td>
        <td>'.$chief[$f]['birthdate']->format('d-m-Y').'</td>
        ';
        
    }
    echo '</table>';

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <title>Document</title>
        <style>td{
            width:100px;
        }</style>
    </head>
    <body>
    
        <?php
        
        ?>
    </body>
    </html>