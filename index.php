<html>
  <head>
    <title>Act.15</title>
  </head>
  <body>

<?php
$helado_favorito = 'pai';   
switch ($helado_favorito) {
  case 'napolitano':
    echo "Mi helado favorito es el de napolitano!";
    break;
  case 'fresa':
    echo "Mi helado favorito es el de fresa!";
    break;
  case 'pai':
    echo "Mi helado favorito es el de pai de queso con zarzamora!";
    break;
  case 'chocolate':
    echo "Mi helado favorito es el de chocolate Oreo";
    break;
  case 'limon':
    echo "Mi helado favorito es el de limon!";
    break;
  default:
    echo "Me gustan los helados de todos los sabores!";
}
?>
  </body>
</html>