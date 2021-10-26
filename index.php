<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //comentario
    #comentario
    echo "hola mundo";
    echo "<h1>hola mundo</h1>";
    $nombre = "christian";
    echo "Mi nombres es " . $nombre;
    echo "<br/>-------------------<br/>";

    #tipo de datos
    #Integer float String Boolean array Object
    #varibles constantes
    define("PI", 3.1416) ;
    echo "El valos de PI es " . PI . "<br/>";
    echo "6+4= ". (6+4) . "<br/>";
    echo "6-4= ". (6-4) . "<br/>";
    echo "6*4= ".(6*4) . "<br/>";
    echo "6/4= ".(6/4) . "<br/>";
    echo "6%4= ".(6%4) . "<br/>";
    echo "<br/>-------------------<br/>";

    $miNumero = 6;
    #referencia a determinado valor
    $refNumero = &$miNumero;    
    $miNumero = 20;

    
    echo $refNumero;
    echo "<br/>-------------------<br/>";
    #condicionales
    # == y tbn === (comparacion estricta, ejm el tipo de dato)
    $miEdad = 20;
    if($miEdad === 30){
        echo "mi edad es mayor a 10";
    }else if($miEdad===20){
        echo "tu edad es 20";
    }    
    else{
        echo "no puedo adivinar tu edad";
    }
    echo "<br/>-------------------<br/>";
    if(($miEdad===20) &&($miEdad<25)){
        echo "tu edad es 20";
    }
    echo "<br/>-------------------<br/>";
    if(($miEdad===20) ||($miEdad<35)){
        echo "tu edad es menor que 35";
    }
    echo "<br/>-------------------<br/>";
    #Operador ternario ?
    $miNumero = 20;
    $resultado = ($miNumero<40)? "Tu numero es menor a 40": "tu numero no es mayor a 40";
    echo $resultado;
    echo "<br/>-------------------<br/>";
    $usuario = "Henry";
    switch($usuario){
        case "Luis":
            echo "Hola Luis"; break;
        case "Henry":
            echo "Hola Henry"; break;
        default:
            echo "No puedo adivinar tu nombre";
    }
    echo "<br/>-------------------<br/>";
    $miNumeor = 0;
    while($miNumeor < 10){
        echo $miNumeor . "<br/>";
        $miNumeor++;
    }
    echo "<br/>-------------------<br/>";
    for($num = 1; $num<=10; $num++){
        echo $num . "<br/>";
    }
    echo "<br/>-------------------<br/>";
    
    #arreglo
    $personas = array("Henry", "Luis ", "Carmen");
    #imprimir indice de cada elemento de un arreglo 
    print_r($personas);
    #cantidad de elementos en un arreglo
    echo count ($personas);
    echo "<br/>-------------------<br/>";
    foreach($personas as $persona){
        echo $persona . "<br/>";
    }
    echo "<br/>-------------------<br/>";
    $personas = array("Luis"=>20, "Beto"=> 30, "Carmen"=>25);
    foreach($personas as $key =>$val){
        echo $key ." tiene " . $val . "<br/>";
    }
    echo "<br/>-------------------<br/>";
    $cadena = "  mis mensajes  ";
    #"incluye espacios"
    echo strlen($cadena);
    #"no incluye espacios"
    echo strlen(ltrim($cadena));
    echo strlen(rtrim($cadena));
    echo strlen(trim($cadena));
    echo "<br/>-------------------<br/>";

    echo strtoupper($cadena)."<br>";
    echo strtolower($cadena)."<br>";

    #function
    function myFunction() {
        return "hola";
    }
    echo "Mensaje" . myFunction();
    echo "<br/>-------------------<br/>";

    function suma($a, $b){
        return $a+$b;
    }

    echo " La suma de 6 y 4 es " . suma(6,4);


    ?>
    

</body>
</html>
