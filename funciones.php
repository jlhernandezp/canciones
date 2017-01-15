<?php

/* 
 * Contiene las funciones del proyecto
 */
/*
 * 
 */
/**
 * 
 * @param int $error Error que se procuce al subir un archivo
 * @return string Mensaje de error
 */
function errorDeFichero($error){
            switch ($error){
                    case 0:
                        return "ENHORABUENA. Fichero subido de forma correcta. <br />";
                    case 1:
                        return "ERROR. Tamaño de fichero superior al establecido en el servidor <br />"; 
                    case 2:
                        return  "ERROR. Tamaño de fichero superior al establecido en cliente<br />"
                        ."El tamaño se estableció en el input MAX_FILE_SIZE<br/>" 
                        ."Tamaño establecido ".$_POST['MAX_FILE_SIZE']."<br/>";
              
                    case 3:
                        return "ERROR. EL fichero sólo se subió parcialmente <br/>";
            
                    case 4:
                        return "ERROR. No se subió ningún fichero <br/>";
               
                    case 6:
                        return "ERROR. No se encuentra la carpeta temporal <br/>";
                 
                    case 7:
                        return "ERROR. No se pudo escribir en disco. revisa permisos <br/>";        

                    case 8:
                        return "ERROR. Una extensión de php detuvo la subida del fichero <br/>";        

                    default:
                        return "Valor de error desconocido";
                }
            
        }
/**
 * 
 * @param string $directorio path con los ficheros a listar
 * @param int $cb null muestra un checkbox a la izquierda
 *                cualquier otro valor no lo muestra.
 * utiliza la variable $raiz con el numero de caracteres hasta el directorio raiz.
 * Realizado con explode o con substr
 */

function listaDirectorio($directorio,$cB){
   
     if (($dir=opendir($directorio))!==FALSE){
       
         $archivos=scandir($directorio);
         
         for ($i=2,$j=0;$i<count($archivos);$i++) {
                
                
            if ($cB===NULL){

                echo "<input type='checkbox' name='fichero$j' value='$directorio$archivos[$i]' / >";
                echo "$archivos[$i]<br />";
                $j++;
            } else {
               // $raiz=substr($directorio, 23); //directorio raiz del sitio. Posición relativa.
                list($d1,$d2,$d3,$d4)=explode("/",$directorio);
                $raiz="./".$d1."/".$d2."/".$d3."/";
                echo "<a href='$raiz$archivos[$i]'>$archivos[$i]</a><br />";
            }
            
         }
    
     }
    else {
           echo "Error al abrir el directorio";
        }
        
}
/**
 * 
 * @param string $nombreDeFichero nombre del fichero a mover
 * @param string $dest directorio o fichero de destino.
 * @return boolean devuelve TRUE si el fichero es movido con éxito
 *          devuelve FALSE no se ha movido el fichero.
 * 
 * Mueve un fichero a un directorio
 */
function mvFichero($source, $dest){
    //echo "copiando".$source." ".$dest."<br />";
    $exito= rename($source, $dest);
    if ($exito) {
       header('descargas.php');
    }
    return $exito;
}

    


