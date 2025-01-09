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


<form id="formAdd" class="d-flex flex-column"  enctype="multipart/form-data" >
    @csrf
    
    <div class="form-row gap-3">
            <div class="form-floating col">
                <input type="text" class="form-control" id="Eidioma" name="idioma" placeholder="x" required> 
                <label class="required">Idioma<span class="required">*</span></label>
            </div>

            <div class="form-floating col">
                <select id="Electura" name="lectura" class="form-select">
                    <option value=""></option>
                    <option value="Con facilidad" >Con facilidad</option>
                    <option value="Sin facilidad" >Sin facilidad</option>
                </select>  
                <label >Lectura</label>
            </div>

            <div class="form-floating col">
                <select id="Ehabla" name="habla" class="form-select">
                    <option value=""></option>
                    <option value="Con facilidad" >Con facilidad</option>
                    <option value="Sin facilidad" >Sin facilidad</option>
                </select>                      
                <label >Habla</label>
            </div>

            <div class="form-floating col">
                <select id="Eescritura" name="escritura" class="form-select">
                    <option value=""></option>
                    <option value="Con facilidad" >Con facilidad</option>
                    <option value="Sin facilidad" >Sin facilidad</option>
                </select>                      
                <label >Escritura</label>
            </div>
            <x-select-tipo-doc id="Eidtd" name="idtd" :tdoc="$tdoc" categoria="IDI" label="Tipo Documento" />
            <x-file-upload 
                id="Earchivo" 
                name="archivo"
            />
    </div>
    <button type="submit" id="btnfam" class="btn btn-success ml-auto mr-0 mt-2"  style="margin-right: 10px;">Guardar</button>
</form>                    
    