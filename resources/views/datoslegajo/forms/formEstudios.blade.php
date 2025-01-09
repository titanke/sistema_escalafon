<!-- resources/views/datosficha/estudios.blade.php -->
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
   

<form id="formAdd" class="d-flex flex-column  m-0"  enctype="multipart/form-data">
    <div class="d-flex flex-column gap-3">
        @csrf
        <div class="form-row gap-3">

            <div class="form-floating">
                <select id="Enivel_educacion" name="nivel_educacion" class="form-control" required>
                    <option value=""></option>
                    <option value="PRIMARIA COMPLETA" >PRIMARIA COMPLETA</option>
                    <option value="PRIMARIA INCOMPLETA" >PRIMARIA INCOMPLETA</option>
                    <option value="SECUNDARIA COMPLETA" >SECUNDARIA COMPLETA</option>
                    <option value="SECUNDARIA INCOMPLETA" >SECUNDARIA INCOMPLETA</option>
                    <option value="UNIVERSITARIO COMPLETA" >UNIVERSITARIO COMPLETA</option>
                    <option value="UNIVERSITARIO INCOMPLETA" >UNIVERSITARIO INCOMPLETA</option>
                    <option value="EGRESADO" >EGRESADO</option>
                    <option value="ESTUDIANTE" >ESTUDIANTE</option>
                    <option value="BACHILLER" >BACHILLER</option>
                    <option value="TECNICO COMPLETA">TECNICO COMPLETA</option>
                    <option value="TECNICO INCOMPLETA">TECNICO INCOMPLETA</option>
                    <option value="TITULADO" >TITULADO</option>
                    <option value="MAESTRIA COMPLETA" >MAESTRIA COMPLETA</option>
                    <option value="MAESTRIA INCOMPLETA" >MAESTRIA INCOMPLETA</option>
                    <option value="DOCTORADO COMPLETA" >DOCTORADO COMPLETA</option>
                    <option value="DOCTORADO INCOMPLETA" >DOCTORADO INCOMPLETA</option>
                </select>                           
                <label for="entidad" class="required">Educación<span class="required">*</span></label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="Ecentroestudios" name="centroestudios" placeholder="x" required>
                <label for="periodo" class="required">Centro de Estudios<span class="required">*</span></label>
            </div>

            <x-select-tipo-doc id="Eidtd" name="idtd" :tdoc="$tdoc" categoria="FOR" label="Tipo Documento"/>

            <div class="form-floating">
                <input type="date" class="form-control" id="Efecha_ini" name="fecha_ini" >
                <label for="periodo">Fecha inicio</label>
            </div>

            <div class="form-floating">
                <input type="date" class="form-control" id="Efecha_fin" name="fecha_fin" >
                <label for="periodo">Fecha fin</label>
            </div>
            <div class="form-floating especialidad-style">
                <input type="text" class="form-control" id="especialidad" name="especialidad" placeholder="Ejm. Ing Agronomica">                         
                <label for="periodo">Especialidad</label>
            </div>
            <x-file-upload id="Earchivo" name="archivo" label="Archivo"/>
        </div>

    </div>

    <button id="btnSubmit" type="submit" class="btn btn-success ml-auto mr-0"  style="margin-right: 10px;">Guardar</button>
</form>