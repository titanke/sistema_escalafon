
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
            <input type="text" class="form-control" id="Edescripcion" name="descripcion" required>
            <label for="entidad"class="required">Descripción<span class="required">*</span></label>
        </div>

        <div class="form-floating">
            <input type="int" class="form-control" id="Edias_san" name="dias_san" >
            <label for="entidad">Dias Sancionados</label>
        </div>

        <x-select-tipo-doc id="Eidtd" name="idtd" :tdoc="$tdoc" categoria="SAN" label="Tipo Documento"/>
        <div class="form-floating">
            <input type="text" class="form-control" id="Enrodoc" name="nrodoc" placeholder="Ejm. 232-2023">
            <label for="entidad">Nro Documento</label>
        </div>

        <div class="form-floating">
            <input type="date" class="form-control" id="Efechadoc" name="fechadoc" >
            <label for="entidad">Fecha documento</label>
        </div>
        
        <x-file-upload id="Earchivo" name="archivo" label="Archivo"/>

    </div>
    <button type="submit" id="btnfam" class="btn btn-success ml-auto mr-0 mt-2"  style="margin-right: 10px;">Guardar</button>
</form>



