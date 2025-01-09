@extends('layouts.app')

@section('content')
<style>

</style>
<div class="container">
    <div class="row">
        <!-- Primera columna (3/12) -->
        <div class="col-md-3">
            <!-- Tarjeta: Total Personal -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                    <h6 class="m-0 font-weight-bold text-primary">Total Personal Registrado</h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h4 class="card-title">{{ $totalPersonal }}</h4>
                </div>
            </div>
            <!-- Tarjeta: Diagrama Circular Regímenes -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 text-center">
                    <h6 class="m-0 font-weight-bold text-primary">Condicion del Personal</h6>
                </div>
                <div class="card-body">
                    <canvas id="regimenChart"></canvas>
                </div>
            </div>
   
 
        </div>

        <!-- Segunda columna (9/12) -->
        <div class="col-md-9">
            <!-- Filas internas para tablas -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Tabla: Pronto a Salir de Vacaciones -->
                    <div class="card shadow ">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">Pronto a Salir de Vacaciones</h6>
                        </div>
                        <div class="card-body">
                            <table id="vac-table" class="display nowrap" style="width:100%"></table>
                         
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">Pronto a Cesar (70 años)</h6>
                        </div>
                        <div class="card-body">
                            <table id="CeseTable" class="table table-bordered">
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- Tabla: Pronto a Cumplir 30 Años -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">Pronto a Cumplir 25 Años de Servicio</h6>
                        </div>
                        <div class="card-body">
                            <table id="cumplir25Table" class="table table-bordered">
                               
                             
                            </table>
                        </div>
                    </div>
            
                </div>
                <!-- Tabla: Pronto a Cumplir 30 Años -->
                <div class="col-md-6">
                    <!-- Tabla: Pronto a Cumplir 30 Años -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                            <h6 class="m-0 font-weight-bold text-primary">Pronto a Cumplir 30 Años de Servicio</h6>
                        </div>
                        <div class="card-body">
                            <table id="cumplir30Table" class="table table-bordered">
                               
                            </table>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
    


</div>

@endsection


@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

var tablacampos = $('#vac-table').DataTable({
    processing: true,
    serverSide: true,
    paging: false,         
    searching: false,     
    info: false,           
    lengthChange: false,   
    scrollX: true,
    scrollY: '250px',             
    autoWidth: false,      
    language: {
        search: "Buscar",
        zeroRecords: "No se encontraron resultados",
        info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
        lengthMenu: "Mostrar _MENU_ entradas por página",
        emptyTable: "No se encontraron datos cercanos a la fecha", 
        infoEmpty: "Mostrando 0 de 0 of 0 entradas",
        loadingRecords: "Cargando...",
    },
    ajax: 'mostrara_vac_rec',
    columns: [
        { data: 'nombre_completo', name: 'nombre_completo' },
        { data: 'fecha_inicio', name: 'fecha_inicio', render: function(data, type, row) {
                return formatDate(data);
        }},
        //{ data: 'regimen', name: 'regimen' },
    ],
    ordering: false 

    
});
$('#vac-table thead').css({ position: 'absolute', top: '-9999px', left: '-9999px' });
var tablacampos2= $('#cumplir30Table').DataTable({
        processing: true,
        serverSide: true,
        paging: false,         
        searching: false,     
        info: false,           
        lengthChange: false,   
        scrollX: true,
        scrollY: '250px',             
        autoWidth: false,    
        language: {
            search: "Buscar",
            zeroRecords: "No se encontraron resultados",
            info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            lengthMenu: "Mostrar _MENU_ entradas por página",
            emptyTable: "No se encontraron datos cercanos a la fecha", 
            infoEmpty: "Mostrando 0 de 0 of 0 entradas",
            loadingRecords: "Cargando...",
        },
        ajax: {
        url: 'repotiempo',
        data: function(d) {
            d.fecha = 30; 
        }
    },       
        columns: [
            { data: 'personal', name: 'personal', orderable: false},
            { data: 'fecha_30_vinculo', name: 'fecha_30_vinculo', orderable: false, render: function(data, type, row) {
                return formatDate(data);
        }},

        ],
        ordering: false 

    });
    var tablacampos2= $('#cumplir25Table').DataTable({
        processing: true,
        serverSide: true,
        paging: false,         
        searching: false,     
        info: false,           
        lengthChange: false,   
        scrollX: true,
        scrollY: '250px',             
        autoWidth: false,     
        language: {
            search: "Buscar",
            zeroRecords: "No se encontraron resultados",
            info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            lengthMenu: "Mostrar _MENU_ entradas por página",
            emptyTable: "No se encontraron datos cercanos a la fecha", 
            infoEmpty: "Mostrando 0 de 0 of 0 entradas",
            loadingRecords: "Cargando...",
        },
        ajax: {
        url: 'repotiempo',
        data: function(d) {
            d.fecha = 25; 
        }
    },        
    columns: [
            { data: 'personal', name: 'personal', orderable: false},
            { data: 'fecha_25_vinculo', name: 'fecha_25_vinculo', orderable: false, render: function(data, type, row) {
                return formatDate(data);
        }},

        ],
        ordering: false 

    });
    var tablacampos2= $('#CeseTable').DataTable({
        processing: true,
        serverSide: true,
        paging: false,         
        searching: false,     
        info: false,           
        lengthChange: false,   
        scrollX: true,
        scrollY: '250px',             
        autoWidth: false,        
        ajax: 'repotiempo',
        language: {
            search: "Buscar",
            zeroRecords: "No se encontraron resultados",
            info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            lengthMenu: "Mostrar _MENU_ entradas por página",
            emptyTable: "No se encontraron datos cercanos a la fecha", 
            infoEmpty: "Mostrando 0 de 0 of 0 entradas",
            loadingRecords: "Cargando...",
        },
        columns: [
            { data: 'personal', name: 'personal', orderable: false},
            { data: 'fecha_70', name: 'fecha_70', orderable: false,
                render: function(data, type, row) {
                // Devuelve el dato sin formatear para ordenar y procesa solo la visualización
                return type === 'display' ? formatDate(data) : data;
            }
            },

        ],
        order: [[1, 'asc']] // Ordena por la columna de fecha (índice 1)

    });




    document.addEventListener('DOMContentLoaded', function() {
    // Obtener datos del backend directamente pasados a la vista
    const regimenData = JSON.parse(@json($regimenData));
    const activoInactivoData = JSON.parse(@json($activoInactivoData));

    // Crear gráfico de régimen
    const ctxRegimen = document.getElementById('regimenChart').getContext('2d');
    new Chart(ctxRegimen, {
        type: 'pie',
        data: regimenData
    });
});



</script>
@endpush


