<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlantillaController extends Controller {

    public function getViewPlantilla() {
        return view("plantilla");
    }

    public function generatePlantilla() {
        $sede = "";
        $ipGestion3G = $_POST['ip3g'];
        $Tienda = DB::table('sedes')
                ->join('routervpns', function ($join) {
                    $join->on('routervpns.idSede', '=', 'sedes.id_sede')
                    ->where('id_sede', '=', $_POST['sede']);
                })
                ->get();
        foreach ($Tienda as $datosSede) {
            $sede = $datosSede;
            $ipNuevaDatos = substr($datosSede->redDatos, 0, -4);
            $ipNuevaVoz = substr($datosSede->redVoz, 0, -4);
        }

        PlantillaController::generarPlantilla($sede, $ipNuevaDatos, $ipNuevaVoz, $ipGestion3G);

    }

    public static function mensajePlantillaRealizada() {
        echo "Plantilla generada con éxito: </b><br>";
    }

    public static function ipGestion3GValida($ipValidar) {
        return ip2long($ipValidar) !== FALSE;
    }

    public static function generarPlantilla($datosEvaluar, $ipNewData, $ipNewVoice, $ip3g) {
        $ipOldData = "10.108.62.";
        $ipOldVoice = "10.208.62.";
        if (strcasecmp($datosEvaluar->isla, "GRAN CANARIA") == 0) {
            $plantilla = file_get_contents('./plantillas/plantillaGC.txt');
        } elseif (strcasecmp($datosEvaluar->isla, "TENERIFE") == 0 || strcasecmp($datosEvaluar["isla"], "LA PALMA") == 0) {
            $plantilla = file_get_contents('./plantillas/plantillaTNFLP.txt');
        } elseif (strcasecmp($datosEvaluar->isla, "LANZAROTE") == 0 || strcasecmp($datosEvaluar["isla"], "FUERTEVENTURA") == 0) {
            $plantilla = file_get_contents('./plantillas/plantillaLZFTV.txt');
        }
        $plantillaSede = str_replace(array($ipOldData, $ipOldVoice, '-NUMEROSEDE-', '-DIRECCIONSEDE-', '-IPGESTION3G-'), array($ipNewData, $ipNewVoice, $datosEvaluar->id_sede, $datosEvaluar->tienda, $ip3g), $plantilla);
        
        $nombre_archivo = "./plSedes/$datosEvaluar->id_sede.txt";
        if (!file_exists($nombre_archivo)) {
            if ($archivo = fopen($nombre_archivo, "x+")) {
                if (fwrite($archivo, $plantillaSede)) {
                    echo "<div class='alert alert-info'><strong> Info: </strong> Se ha creado la plantilla <strong>$datosEvaluar->id_sede.txt</strong>.<a href='$nombre_archivo' download='$datosEvaluar->id_sede'>Descargar</a></div>";
                } else {
                    echo "<div class='alert alert-danger'><strong> Error: </strong>No se pudo crear la plantilla <strong>$datosEvaluar->id_sede.txt</strong>, puede copiar el contenido y guardarlo en un fichero manualmente.</div>";
                }

                fclose($archivo);
            }
        }PlantillaController::mensajePlantillaRealizada();
    }

}
