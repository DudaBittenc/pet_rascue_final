<?php

namespace QI\PetRescue\Controller;

class Logger {
    private function __construct(){}
    public static function writeLog($log){ //sempre que tiver um erro no BD, vai ter um log que é uma excessão
        $dir_path = dirname(dirname(__DIR__)) . "/logs/"; //todos os logs do sistema serão criados nesta pasta do sistema "logs", que ficará na raiz do projeto
        if(!is_dir($dir_path)){
            mkdir($dir_path); //ou seja, se não existir esta pasta/diretório "log", então MAKE DIRetório
        }
        $file_path = $dir_path . date("Y-m-d H-i-s") . ".log"; //para salvar os logs em algum formato, neste caso, o tipo "date"
        $file = fopen($file_path, "w");
        fwrite($file, $log);
        fclose($file);
    }
}








?>