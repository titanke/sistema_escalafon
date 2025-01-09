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

<form id="formAdd"  class="d-flex flex-column"  enctype="multipart/form-data">
        <div class="form-row gap-3">
            <div class="form-floating">                        
                <select id="Etipo_compensacion" name="tipo_compensacion" class="form-select" required>
                    <option value=""></option>
                    @foreach($tcomp as $t)
                    <option value="{{ $t->id }}" >{{ $t->nombre }}</option>
                    @endforeach
                </select>   
                <label for="entidad" class="required" require>Tipo de compensacion<span class="required">*</span></label>
            </div>
            <x-select-tipo-doc id="Eidtd" name="idtd" :tdoc="$tdoc" categoria="COM" label="Tipo Documento"/>

            <div class="form-floating">
                <input type="text" class="form-control" id="Enrodoc" name="nrodoc" placeholder="Ejm. 232-2023">
                <label for="entidad">Nro Documento</label>
            </div>

            <div class="form-floating">
                <input type="date" class="form-control" id="Efecha_documento" name="fecha_documento" >
                <label for="periodo">Fecha Documento</label>
            </div>

            <x-file-upload 
                id="Earchivo" 
                name="archivo"
                label="Archivo"
            />
        </div>
    
    <button type="submit" id="btnfam" class="btn btn-success ml-auto mr-0 "  style="margin-right: 10px;">Guardar</button>

</form>