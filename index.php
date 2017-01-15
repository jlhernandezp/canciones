<!DOCTYPE html>
<!--
Descarga de ficheros
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Descarga de ficheros
        </title>
        <?php
            
        // put your code here
        ?>
    </head>
    <body>
        <div>
            <h1>DESCARGA DE FICHEROS</h1>
        </div>
        <div>
            <p>
            <form action="descargas.php" method="POST" enctype="multipart/form-data">
                <fieldset class="formulariobase">
                    <legend>Datos de usuario</legend>
                    <p>
                        <label>Usuario 
                            <input type="text" name="usuario" />
                        </label>
                        <label>Password
                            <input type="password" name="passw"/>
                        </label>
                    </p>
                    
                    <h2>Selecciona fichero</h2>
                    <p>
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
                        <input type="hidden" name="MIN_FILE_SIZE" value="10000"/>
                        
                        <input type="file" name="fichero" m/><br/>
                        
                        <input type="submit"name="subir" value="Acceder" />
                    </p>
                </fieldset>
                </form>
            </p>
        </div>
            
    </body>
</html>
