<form method="POST" id="formdomicilio"  enctype="multipart/form-data">
    @csrf
    <div class="d-row gap-3">
        <div class="form-floating">
            <select id="Ptipodom" name="tipodom" class="form-select">
                <option hidden selected></option>
                @foreach($dtv as $d)
                    <option value="{{ $d->nombre ?? '' }}">{{ $d->nombre }}</option>
                @endforeach
            </select>
            <label for="Ptipodom">Tipo</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" id="Pdactual" name="dactual" 
                value="{{ $dd->dactual ?? '' }}" placeholder="Domicilio">
            <label for="Pdactual">Domicilio</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" id="Pnumero" name="numero" 
                value="{{ $dd->numero ?? '' }}" placeholder="Número">
            <label for="Pnumero">Número</label>
        </div>
    </div>

    <div class="d-row gap-3">
        <div class="form-floating">
            <select id="Piddep" name="iddep" class="form-select">
                <option value=""></option>
                @foreach($dep as $departamento)
                    <option value="{{ $departamento->id  ?? '' }}"
                        {{ old('iddep', $dd->iddep ?? '' ) == $departamento->id ? 'selected' : '' }}>
                        {{ $departamento->nombre }}
                    </option>
                @endforeach
            </select>
            <label for="Piddep">Departamento</label>
        </div>

        <div class="form-floating">
            <select id="Pidpro" name="idpro" class="form-select" disabled>
                <option value=""></option>
                @foreach($pro as $provincia)
                    <option value="{{ $provincia->id ?? '' }}"
                        {{ old('iddep', $dd->idpro ?? '' ) == $provincia->id ? 'selected' : '' }}>
                        {{ $provincia->nombre }}
                    </option>
                @endforeach
            </select>
            <label for="Pidpro">Provincia</label>
        </div>

        <div class="form-floating">
            <select id="Piddis" name="iddis" class="form-select" disabled>
                <option value=""></option>
                @foreach($dis as $distrito)
                    <option value="{{ $distrito->id ?? '' }}"
                        {{ old('iddep', $dd->iddis ?? '' ) == $distrito->id ? 'selected' : '' }}>
                        {{ $distrito->nombre }}
                    </option>
                @endforeach
            </select>
            <label for="Piddis">Distrito</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" id="Preferencia" name="referencia" 
                value="{{ $dd->referencia ?? '' }}" placeholder="Referencia">
            <label for="Preferencia">Referencia</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="Pinterior" name="interior" 
                value="{{ $dd->interior ?? ''}}" placeholder="Interior">
            <label for="Pinterior">Interior</label>
        </div>
    </div>
</form>
