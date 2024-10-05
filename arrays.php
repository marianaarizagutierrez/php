<?php 

$estudiantes=('carlos', 'jose', 'maria', 'luis');
echo"<pre>";
//var_dump($estudiantes); 
print_r($estudiantes);
echo"</pre>";
echo $estudiantes[2];


$aprendiz = [
  'nombre' => 'mariana',
  'apellido' => 'ariza',
  'edad' => 17,
  'deudas' =>'3.700.00'

];
echo "<pre>";
print_r($aprendiz);
echo "<pre>";

$tutor=[
  'nombre' => 'mariana',
  'apellido' => 'ariza',
  'edad' => 17
  'direccion' => [
    'ciudad' => 'bucaramanga',
    'barrio' => 'poblado',
    'nomenclatura' => 'calle 41 #22-53',
    'zipcode' =>66525
  
  ],
  'habilidades'=>[
    'git', 'html', 'css', 'js', 'php', 'python', 'sql'
  ],
 
]
echo "<pre>";
print_r($tutor);
echo "<pre>";

echo "<pre>";
print_r($tutor['direccion']['nomenclatura']);
echo "<pre>";

echo "<pre>";
print_r($tutor['habilidades']);
echo "<pre>";

$tutor['direccion']['departamento']='santander'

array_slice($tutor['habilidades'], 4, 2);
echo count($tutor['habilidades']);
?>