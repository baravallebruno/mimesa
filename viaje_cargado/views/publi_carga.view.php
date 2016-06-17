<section id="cont_admin" class="col-xs-9">
    <h3>Publicar carga</h3>
    <hr>
    <h4>Origen</h4>
                
        <label for="pais_orig">Pais</label>
            <select name="pais_orig" id="pais_orig" class="form-basic">
                <option value="">Pais</option>
                <option value="">Argentina</option>
                <option value="">Uruguay</option>
                <option value="">Brasil</option>
                <option value="">Chile</option>
                <option value="">Paraguay</option>
                <option value="">Bolivia</option>
            </select>
            <div class="col-xs-6">
                <label for="ciudad_orig">Ciudad</label>
                <input class="form-basic" type="text" id="ciudad_orig" name="ciudad_orig" value="Rosario">
            </div>
            <div class="col-xs-6">
                <label for="prov_orig">Provincia</label>
                <input class="form-basic" type="text" id="prov_orig" name="prov_orig" value="Santa Fe">
            </div>

    <h4>Destino</h4>

        <label for="pais_orig">Pais</label>
            <select name="pais_orig" id="pais_orig" class="form-basic">
                <option value="">Pais</option>
                <option value="">Argentina</option>
                <option value="">Uruguay</option>
                <option value="">Brasil</option>
                <option value="">Chile</option>
                <option value="">Paraguay</option>
                <option value="">Bolivia</option>
            </select>
            <div class="col-xs-6">
                <label for="ciudad_orig">Ciudad</label>
                <input class="form-basic" type="text" id="ciudad_orig" name="ciudad_orig" value="Rosario">
            </div>
            <div class="col-xs-6">
                <label for="prov_orig">Provincia</label>
                <input class="form-basic" type="text" id="prov_orig" name="prov_orig" value="Santa Fe">
            </div>
            
    <h4>Descripción de la carga</h4>
        
        <label for="desc">Detalle</label>
        <input class="form-basic" type="text" id="desc" name="desc" value="Hugo">
        <label for="tipo">Tipo de viaje</label>
        <input class="form-basic" type="text" id="tipo" name="tipo" value="Hugo"> 
        <div class="col-xs-12">
             <div class="col-xs-6">
             <label for="fecha_nac">Tipo de camión</label>
                <select name="tipo-camion" id="tipo-camion" class="form-basic">
                    <option value="">Flete chico</option>
                    <option value="">Chasis y acoplado</option>
                    <option value="">Semirremolque con lona</option>
                    <option value="">Cisterna</option>
                    <option value="">Batea</option>
                </select>
            </div>
            <div class="col-xs-6">
                <label for="documentacion">Documentación requerida</label>
                <input class="form-basic" type="text" id="documentacion" name="documentacion" value="Santa Fe">
            </div>
        </div>

    <h4>Tarifa</h4>
        <div class="col-xs-12">
            <div class="col-xs-6">
                <label for="tarifa">Tarifa ofrecida</label>
                <input class="form-basic" type="text" id="tarifa" name="tarifa" value="Santa Fe">
            </div>
            <div class="col-xs-6">
                <label for="iva">¿incluye IVA?</label>
                <label class="radio-bt"><input type="radio" name="incluye_iva">SI</label>
                <label class="radio-bt"><input type="radio" name="incluye_iva">NO</label>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-6">
                <label for="pago">Fomra de pago</label>
                <input class="form-basic" type="text" id="pago" name="pago" value="Santa Fe">
            </div>
            <div class="col-xs-6">
                <label for="iva">¿solicitas comision?</label>
                <div class="col-xs-8">
                    <label class="radio-bt"><input type="radio" name="solicita_comision">SI</label>
                    <label class="radio-bt"><input type="radio" name="solicita_comision">NO</label>
                </div>
                <div class="col-xs-4">
                    <input class="form-basic" type="text" id="monto" name="monto" placeholder="Monto">
                </div>      
            </div>
        </div>
        
        <button class="btn bt-rojo pull-right" id="foto" type="button">Publicar esta carga</button>
</section>