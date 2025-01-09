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
    <div class="form-row gap-3 ">
    
            <div class="form-floating">
                <input type="text" class="form-control" id="Enombre" name="nombre" placeholder="Ejm. CURSOS, DIPLOMADOS, OTROS" required> 
                <label  class="required">Denominación<span class="required">*</span></label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="Ecentroestudios" name="centroestudios" placeholder="x" > 
                <label >Centro de Estudios</label>
            </div>
            <div class="form-floating">
                <input type="date" class="form-control" id="Efecha_ini" name="fecha_ini" >
                <label for="periodo">Fecha inicio</label>
            </div>
            <div class="form-floating">
                <input type="date" class="form-control" id="Efecha_fin" name="fecha_fin" >
                <label for="periodo">Fecha fin</label>
            </div>
            <div class="form-floating">
                <input type="number" class="form-control" id="Ehoras" name="horas" placeholder="x"> 
                <label >Horas</label>
            </div>  
            <x-select-tipo-doc id="Eidtd" name="idtd" :tdoc="$tdoc" categoria="ESC" label="Tipo Documento" />
            <x-file-upload id="Earchivo" name="archivo" label="Archivo"/>

    </div>
    <button type="submit" id="btnfam" class="btn btn-success ml-auto mr-0 "  style="margin-right: 10px;">Guardar</button>
</form>