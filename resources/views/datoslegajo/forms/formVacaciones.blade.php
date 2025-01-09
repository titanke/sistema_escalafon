
<style>
    .required {
        color: red;
    }
    .modal-title {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        text-align: center;
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

</style>

<form id="formAdd"class="d-flex flex-column"  enctype="multipart/form-data" >
    @csrf
    <div class="form-row gap-3 ">
        <x-select-tipo-doc id="Eidtd" name="idtd" :tdoc="$tdoc" categoria="VAC" label="Tipo Documento"/>
        <div class="form-floating">
            <input type="text" class="form-control" id="Enrodoc" name="nrodoc" placeholder="Ejm. 232-2023" required>
            <label for="entidad" class="required"><span class="required">*</span>N° Documento</label>
        </div>  
        <x-file-upload id="Earchivo" name="archivo" label="Archivo"/>
  
        <div class="form-floating" id="obs_vac">
            <input type="text" class="form-control" id="Eobservaciones" name="observaciones" placeholder="obs">
            <label for="entidad">Observaciones</label>
        </div>
        <div class="form-floating" id="sus_vac">
            <select class="form-select" id="Esuspencion" name="suspencion">
                <option value="NO">NO</option>
                <option value="SI">SI</option>
            </select> 
            <label for="archivo">Suspender</label>
        </div>
        <div class="form-floating">
            <input type="number" class="form-control" id="Eperiodo" name="periodo" placeholder="periodo" onchange="validar_vlp(validacion)" required>
            <label for="entidad" class="required">Periodo<span class="required">*</span></label>
        </div>

        <div class="form-floating" >
            <select class="form-select" id="Emes" name="mes"  style="flex-grow: 1;" onchange="validar_vlp(validacion)">
                <option hidden selected></option>
            </select> 
            <label for="archivo" class="required">Mes<span class="required">*</span></label>
        </div>

        <!-- Contenedor VLP -->
        <div class="col-6 mb-1">
            <!-- Contenedor con fondo y sin padding -->
            <div class="row gx-0" style="background-color: #f5f5f5; border-radius: 5px;">
                    <div class="col ">
                    <label for="VC" class="d-block text-center">CR</label>
                        <input type="number" class="form-control form-control-sm text-center" id="CR2" readonly>
                    </div>
                    <div class="col ">
                    <label for="VC" class="d-block text-center" id="lv_vlp" >V</label>
                        <input type="number" class="form-control form-control-sm text-center" id="VC2" readonly>
                    </div>
                    <div class="col ">
                        <label for="VC" class="d-block text-center" id="ll_vlp">L</label>
                        <input type="number" class="form-control form-control-sm text-center" id="LC2" readonly>
                    </div>
                    <div class="col ">
                        <label for="VC" class="d-block text-center" id="lp_vlp" >P</label>
                        <input type="number" class="form-control form-control-sm text-center" id="PC2" readonly>
                    </div>
                    <div id="drestantes" class="col">
                        <label for="periodo">Usado</label>
                        <input type="number" class="form-control form-control-sm text-center" id="Ediasr" name="diasr" disabled>
                    </div>
                    <div id="mensaje-adelantado_vlp" class="text-left" style="display: none;">
                        * adelantado
                    </div>
            </div>
        </div>
 
        <div class="form-floating" id="desde_vlp">
            <input type="date" class="form-control" id="Efecha_ini" name="fecha_ini" placeholder="Ejm. 232-2023" onchange="validar_vlp(validacion)" required>
            <label for="entidad" class="required"><span class="required">*</span>Desde</label>
        </div>  
        <div class="form-floating" id="hasta_vlp">
            <input type="date" class="form-control" id="Efecha_fin" name="fecha_fin" placeholder="Ejm. 232-2023" onchange="validar_vlp(validacion)" required>
            <label for="entidad" class="required"><span class="required">*</span>Hasta</label>
        </div>  
        <div class="form-floating" id="dias_vlp">
            <input type="number" class="form-control" id="Edias" name="dias"  readonly>
            <label for="periodo">Dias</label>
        </div>
    </div>
    <div id="cronogramaWarning" class="alert alert-danger mt-1" style="display: none;"></div>  
    <div id="diasWarning" class="alert alert-danger" style="display: none; "></div>  
    
    <button type="submit" id="btnfam" class="btn btn-success ml-auto mr-0 mt-2"  style="margin-right: 10px;">Guardar</button>
</form>



