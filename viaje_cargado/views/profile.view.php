<section id="cont_admin" class="col-xs-9">
    <h3>Datos de mi cuenta</h3>
    <hr>
        <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="profile" id="profile">
        <input type="hidden" value="<?php echo $id_usuario; ?>" name="id">
        <label for="usuario">Usuario</label>
        <input class="form-basic" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>">
        <label for="email">E-mail</label>
        <input class="form-basic" type="email" id="email" name="email" value="<?php echo $email; ?>">
        <label for="foto">Foto perfil</label>
        <input type="file" class="inputfile" name="file" id="file"></input>
        <label for="file" class="btn bt-rojo" id="boton">Subir/Cambiar Foto</label>
        <input type="hidden" name="thumb-guardada" value="<?php echo $thumb; ?>">

    <h3>Datos personales</h3>
    <hr>
        <label for="nombre">Nombre</label>
        <input class="form-basic" type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
        <label for="apellido">Apellido</label>
        <input class="form-basic" type="text" id="apellido" name="apellido" value="<?php echo $apellido; ?>">
       <!-- <label for="fecha_nac">Fecha de nacimiento</label>
        <div class="col-xs-12">
            <div class="col-xs-4">
                <select name="dia[]" id="dia" class="form-basic">
                    <option value="">Día</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                    <option value="">8</option>
                    <option value="">9</option>
                    <option value="">10</option>
                    <option value="">11</option>
                    <option value="">12</option>
                    <option value="">13</option>
                    <option value="">14</option>
                    <option value="">15</option>
                    <option value="">16</option>
                    <option value="">17</option>
                    <option value="">18</option>
                    <option value="">19</option>
                    <option value="">20</option>
                    <option value="">21</option>
                    <option value="">22</option>
                    <option value="">23</option>
                    <option value="">24</option>
                    <option value="">25</option>
                    <option value="">26</option>
                    <option value="">27</option>
                    <option value="">28</option>
                    <option value="">29</option>
                    <option value="">30</option>
                    <option value="">31</option>
                </select>
            </div>
            <div class="col-xs-4">
                <select name="mes" id="mes" class="form-basic col-xs-4">
                    <option value="">Mes</option>
                    <option value="">Enero</option>
                    <option value="">Febrero</option>
                    <option value="">Marzo</option>
                    <option value="">Abril</option>
                    <option value="">Mayo</option>
                    <option value="">Junio</option>
                    <option value="">Julio</option>
                    <option value="">Agosto</option>
                    <option value="">Septiembre</option>
                    <option value="">Octubre</option>
                    <option value="">Noviembre</option>
                    <option value="">Diciembre</option>  
                </select>
            </div>
            <div class="col-xs-4">
                <select name="año" id="año" class="form-basic col-xs-4">
                    <option value="">Año</option>
                    <option value="">1960</option>
                    <option value="">1961</option>
                    <option value="">1962</option>
                    <option value="">1963</option>
                    <option value="">1964</option> 
                </select>
            </div>
        </div> -->

        <label for="empresa">Empresa</label>
        <input class="form-basic" type="text" id="empresa" name="empresa" value="<?php echo $empresa; ?>">
        <label for="direccion">Dirección</label>
        <input class="form-basic" type="text" id="direccion" name="direccion" value="<?php echo $direccion; ?>">
        <div class="form-group col-xs-6">
            <label for="ciudad">Ciudad</label>
            <input class="form-basic" type="text" id="ciudad" name="ciudad" value="<?php echo $ciudad; ?>">
        </div>
        <div class="form-group col-xs-6">
            <label for="provincia">Provincia</label>
            <input class="form-basic" type="text" id="provincia" name="provincia" value="<?php echo $provincia; ?>">
        </div>
        <label for="pais">Pais</label>
        <input class="form-basic" type="text" id="pais" name="pais" value="<?php echo $pais; ?>">

    <h3>Datos de contacto</h3>
    <hr>
        <label for="fijo">Telefono fijo</label>
        <input class="form-basic" type="text" id="fijo" name="fijo" value="<?php echo $tel_fijo; ?>">
        <label for="movil">Telefono móvil</label>
        <input class="form-basic" type="text" id="movil" name="movil" value="<?php echo $tel_movil; ?>">
        <label for="web">Sitio web</label>
        <input class="form-basic" type="text" id="web" name="web" value="<?php echo $web; ?>">

        <button class="btn bt-rojo pull-right" id="foto" type="submit" onclick="profile.submit()">Actualizar mis datos</button>
        </form>
</section>