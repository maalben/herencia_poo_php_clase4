<?php 
if(isset($_POST["btncalcular"])){

    require_once 'Kilometros.php';
    require_once 'Metros.php';
    require_once 'Centimetros.php';
    require_once 'Milimetros.php';

    $kilometros = new Kilometros();
    $metros = new Metros();
    $centimetros = new Centimetros();
    $milimetros = new Milimetros();

    $valor = $_POST["txtvalor"];

    $tipomedida = $_POST["selmedidas"];
    $opcion = $_POST["medidas"];

    switch($opcion){

        case "kilometros":
            $kilometros->setValor($valor);
            switch($tipomedida){
                
                case "metros":
                    echo "La conversión de metros a Kilometros es " . $kilometros->calcularMetrosAKilometros();
                break;

               case "centi":
                    echo "La conversión de centimetros a Kilometros es " . $kilometros->calcularCentimetrosAKilometros();
                break;

               case "mili":
                    echo "La conversión de milimetros a Kilometros es " . $kilometros->calcularMilimetrosAKilometros();
                break;

                default:
                    echo "Imposible calcular";

            }

        break;

        case "metros":  //unidad de destino
            $metros->setValor($valor);

            switch($tipomedida){  //unidad de origen
                
                case "kilo":
                    echo "La conversión de kilometros a metros es " . $metros->calcularKilometrosAMetros();
                break;

               case "centi":
                    echo "La conversión de centimetros a metros es " . $metros->calcularCentimetrosAMetros();
                break;

               case "mili":
                    echo "La conversión de milimetros a metros es " . $metros->calcularMilimetrosAMetros();
                break;
        
                default:
                    echo "Imposible calcular";
            }

        break;

            case "centimetros":  //unidad de destino

                $centimetros->setValor($valor);

                switch($tipomedida){  //unidad de origen
                    
                    case "kilo":
                        echo "La conversión de kilometros a centimetros es " . $centimetros->calcularKilometrosACentimetros();
                    break;
    
                   case "metros":
                        echo "La conversión de metros a centimetros es " . $centimetros->calcularMetrosACentimetros();
                    break;
    
                   case "mili":
                        echo "La conversión de milimetros a centimetros es " . $centimetros->calcularMilimetrosACentimetros();
                    break;
            
                    default:
                        echo "Imposible calcular";
                }

            break;


            case "milimetros":  //unidad de destino

                $milimetros->setValor($valor);

                switch($tipomedida){  //unidad de origen
                    
                    case "kilo":
                        echo "La conversión de kilometros a milimetros es " . $milimetros->calcularKilometrosAMilimetros();
                    break;
    
                   case "metros":
                        echo "La conversión de metros a milimetros es " . $milimetros->calcularMetrosAMilimetros();
                    break;
    
                   case "centi":
                        echo "La conversión de centimetros a milimetros es " . $milimetros->calcularCentimetrosAMilimetros();
                    break;
            
                    default:
                        echo "Imposible calcular";
                }

            break;

        

        default:
        echo "Opción incorrecta";

    }



}else{
    echo "Acceso no permitido.";
}


?>