 <?php

    if(isset($_POST['output']))
     {   

    $text = $_POST['fileval'];
    print ($text);

    $filename = 'schematic.json';
    $string = $text;

    $fp = fopen($filename, "w");
    fwrite($fp, $string);
    fclose($fp);

    header('Content-disposition: attachment; filename=schematic.json');
    header('Content-type: application/json');
    readfile('schematic.json');
    die; //modified code 
     }
    ?>
