<?php

$arr=[2, 24, 80, 5, 7, 20 ,32 ,45 ,67];


function recibir($arr){
    foreach($arr as $arreglo){
        
        print_r($arreglo);
        echo"\n";

}

}
echo"\n";
echo"\n";
echo recibir($arr);
echo"\n";
echo"\n";

function ascendente($arr){
    sort($arr);
    print_r($arr);
}
echo"\n";
echo"\n";
echo ascendente($arr);
echo"\n";
echo"\n";

function descendente($arr){
    rsort($arr);
    print_r($arr);
}
echo"\n";
echo"\n";
echo descendente($arr);
echo"\n";
echo"\n";

function busqueda($arr){
    $numerox = 100;
if (in_array($numerox, $arr)){
    echo "El numero existe dentro de array";
}
else {
    echo "El numero no existe dentro del array";
}
        
}

echo busqueda($arr);


$arrayasociativo=['Nombre'=>'Seiya', 'Apellidos'=>'Okido', 'Ciudad'=>'Japon','ID usuario'=>6809];

function mostrar($arrayasociativo){
    foreach($arrayasociativo as $clave=>$valor){
        echo $clave.":".$valor."\n";
    }

}
echo"\n";
echo"\n";
echo mostrar($arrayasociativo);




?>