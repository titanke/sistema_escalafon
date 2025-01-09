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
    .form-group {
        flex:1;
        min-width: 200px;
        margin: 0;
    }
    .form-floating{
        margin-bottom: 24px;
    }

</style>

<form id="formAdd" class="d-flex flex-column"  enctype="multipart/form-data" >
    <input type="hidden" class="form-control" id="personal_id" name="personal_id" value="{{$dp->id_personal ?? ''}}"/>
    @csrf
    
    <div class="form-row gap-3">
           <div class="form-floating">
                <select id="Etipo_entidad" name="tipo_entidad" class="form-select" required>
                    <option value=""></option>
                    <option value="PUBLICA" >PUBLICA</option>
                    <option value="PRIVADA" >PRIVADA</option>
                </select> 
                <label for="entidad" class="required">Tipo de Entidad<span class="required">*</span></label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="Eentidad" name="entidad" required placeholder="x">
                <label for="update_entidad" class="required">Entidad<span class="required">*</span></label>
            </div>
            <div class="form-floating ">
                <input type="text" class="form-control" id="Ecargo" name="cargo" required placeholder="x">
                <label for="update_periodo" class="required">Cargo<span class="required">*</span></label>
            </div>
            <div class="form-floating ">
                <input type="date" class="form-control" id="Efecha_ini" name="fecha_ini" placeholder="x">
                <label for="periodo">Desde</label>
            </div>
            <div class="form-floating ">
                <input type="date" class="form-control" id="Efecha_fin" name="fecha_fin" placeholder="x">
                <label for="periodo">Hasta</label>
            </div>
            <x-select-tipo-doc id="Eidtd" name="idtd" :tdoc="$tdoc" categoria="EXP" label="Tipo Documento"/>
            <div class="form-group">
                <x-file-upload 
                    id="Earchivo" 
                    name="archivo"
                />
            </div>
    </div>

    <button type="submit" class="btn btn-success ml-auto mr-0"  style="margin-right: 10px;">Guardar</button>
</form>