<style>
    .form-floating{
        flex:1;
        min-width: 200px;
    }        
    .form-group {
        flex:1;
        min-width: 200px;
        margin: 0;
    }
</style>

<div class="d-flex flex-column gap-4">
    <div class="form-row gap-4">

        <div class="col">
            <label for="Ecargo"class="required">Cargo<span class="required">*</span></label>
            <select name="id_cargo" id="Eid_cargo" class="form-select" >
            </select>
        </div>
        <div class="col ini_vinculo">
            <label for="Ecargo"class="required">Unidad Organica<span class="required">*</span></label>
            <select name="id_unidad_organica" id="Eid_unidad_organica" class="form-select" >
            </select>
        </div>
        <div class="col ini_vinculo">
            <label class="required" >Dependencia<span class="required">*</span></label>
            <select name="id_depens" id="Eid_depens" class="form-select">
            </select>
        </div>
    </div>

    <div class="form-row gap-4">
        <div class="d-flex flex-column gap-4 col border rounded p-3">
            <legend class="text-center text-left" style="font-size: 0.8rem;">Ingreso</legend>
            <div class="form-row gap-4">
                <div class="form-floating">
                    <input type="date" class="form-control" id="Efecha_ini" name="fecha_ini" required>
                    <label for="Efecha_ini">Fecha Inicio<span class="required">*</span></label>
                </div>
            
                <div class="form-floating">
                    <select id="Eid_regimen" name="id_regimen" class="form-select">
                        <option value=""></option>
                        @foreach($reg as $regbd)
                            <option value="{{ $regbd->id ?? '' }}">{{ $regbd->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="Eid_regimen">Régimen</label>
                </div>

                <x-select-tipo-doc id="Eid_tipo_documento" name="id_tipo_documento" :tdoc="$tdoc" categoria="VIN" label="Tipo Documento"/>
                
                <div class="form-floating">
                    <select id="Eid_condicion_laboral" name="id_condicion_laboral" class="form-select">
                        <option value=""></option>
                        @foreach($conlab as $conlab)
                            <option value="{{ $conlab->id ?? '' }}">{{ $conlab->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="id_condicion_laboral">Condicion Laboral</label>
                </div>
            </div>

            <div class="form-row gap-4">

                <div class="ini_vinculo col">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="Enro_doc" name="nro_doc" placeholder="Ejm. 232-2023">
                        <label for="Enro_doc">Nro Documento</label>
                    </div>
                </div>
                <x-file-upload 
                    id="Earchivo1" 
                    name="archivo"
                    label="Vinculo"
                />     
            </div>
        </div>

        <div class="d-flex flex-column gap-4 col border rounded p-3">
            <legend class="text-center text-left" style="font-size: 0.8rem;">Cese</legend>
            <div class="form-row gap-4">
                <div class="form-floating">
                    <input type="date" class="form-control" id="Efecha_fin" name="fecha_fin">
                    <label for="Efecha_fin">Fecha Fin</label>
                </div>
                <div class="form-floating">
                    <select id="Eid_motivo_fin_vinculo" name="id_motivo_fin_vinculo" class="form-select">
                        <option value=""></option>
                        @foreach($vin_fin as $vin_fin)
                            <option value="{{ $vin_fin->id ?? '' }}">{{ $vin_fin->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="Eid_motivo_fin_vinculo">Motivo de Cese</label>
                </div>
                <x-select-tipo-doc id="Eid_tipo_documento_fin" name="id_tipo_documento_fin" :tdoc="$tdoc" categoria="DES" label="Tipo Documento"/>
            </div>

            <div class="form-row gap-4">
                <div class="form-floating">
                    <input type="text" class="form-control" id="Enro_doc_fin" name="nro_doc_fin" placeholder="Ejm. 232-2023">
                    <label for="Enro_doc_fin">Nro Documento</label>
                </div>
               
                <div class="form-group">
                    <x-file-upload id="Earchivo_cese" name="archivo_cese" label="Vinculo"/>
                    <input type="hidden" class="form-control nro_folios" name="nro_folios2">
                </div>
          
            </div>
        </div>
    </div>
</div>

