
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
        <div class="form-floating">
            <input type="text" class="form-control" id="Enombre_colegio" name="nombre_colegio" required>
            <label for="entidad"class="required">Nombre Colegio<span class="required">*</span></label>
        </div>

        <x-select-tipo-doc id="Eidtd" name="idtd" :tdoc="$tdoc" categoria="COL" label="Tipo Documento"/>

        <div class="form-floating">
            <input type="text" class="form-control" id="Enrodoc" name="nrodoc" placeholder="Ejm. 232-2023" required>
            <label for="entidad" class="required"><span class="required">*</span>N° Colegiatura</label>
        </div>

      
        <div class="form-floating">
            <select class="form-select" id="Eestado" name="estado" required>
                <option value=""></option>
                <option value=1>Habilitado</option>
                <option value=0>No Habilitado</option>
            </select>
            <label for="Eestado" class="required"><span class="required">*</span>Estado</label>
        </div>

        <div class="form-floating">
            <input type="date" class="form-control" id="Efechadoc" name="fechadoc" >
            <label for="entidad">Fecha documento</label>
        </div>
        
        <x-file-upload id="Earchivo" name="archivo" label="Archivo"/>
    </div>
    <button type="submit" id="btnfam" class="btn btn-success ml-auto mr-0 mt-2"  style="margin-right: 10px;">Guardar</button>
</form>



