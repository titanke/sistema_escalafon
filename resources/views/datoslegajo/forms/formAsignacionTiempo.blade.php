<!-- resources/views/datosficha/condicionlab.blade.php -->
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

<form id="formAdd" class="d-flex flex-column"  enctype="multipart/form-data">
    @csrf
    <div class="form-row gap-3">

        <div class="form-floating">                        
            <input type="text" class="form-control" id="Edescripcion" name="descripcion" >
            <label for="entidad">Descripcion</label>
        </div>

        <div class="form-floating">
            <input type="date" class="form-control" id="Efecha_ini" name="fecha_ini" required>
            <label for="periodo" class="required">Fecha Inicio<span class="required">*</span></label>
        </div>

        <div class="form-floating" >
            <input type="date" class="form-control" id="Efecha_fin" name="fecha_fin" required>
            <label for="periodo" class="required">Fecha fin<span class="required">*</span></label>
        </div>
        <x-select-tipo-doc id="Eidtd" name="idtd" :tdoc="$tdoc" categoria="AST" label="Tipo Documento"/>

        <div class="form-floating">
            <input type="text" class="form-control" id="Enrodoc" name="nrodoc" placeholder="Ejm. 232-2023">
            <label for="entidad">Nro Documento</label>
        </div>

        <div class="form-floating">
            <input type="date" class="form-control" id="Efecha_doc" name="fecha_doc" >
            <label for="periodo">Fecha Documento</label>
        </div>

        <x-file-upload id="Earchivo" name="archivo" label="Archivo"/>
    </div>
    <button type="submit"  class="btn btn-success ml-auto mr-0"  style="margin-right: 10px;">Guardar</button>

</form>