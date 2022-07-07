@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" />


    @include('flash-message')
    <div class="row">
        <table id="table_api" class="table dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NoPrescripcion</th>
                    <th scope="col">TipoTec</th>
                    <th scope="col">ConTec</th>
                    <th scope="col">NoEntrega</th>
                    <th scope="col">FecDireccionamiento</th>
                    <th scope="col">EstDireccionamiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fields as $field)
                    <tr>

                        <th scope="row">{{ $field['ID'] }}</th>
                        <th scope="row">{{ $field['NoPrescripcion'] }}</th>
                        <th scope="row">{{ $field['TipoTec'] }}</th>
                        <th scope="row">{{ $field['ConTec'] }}</th>
                        <th scope="row">{{ $field['NoEntrega'] }}</th>
                        <th scope="row">{{ $field['FecDireccionamiento'] }}</th>
                        <th scope="row">{{ $field['EstDireccionamiento'] }}</th>


                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function() {

            $('#table_api').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "processing": true,
                "info": true,
                "stateSave": true,
                "order": [
                    [1, "asc"]
                ],
                "language": {
                    "search": "Buscar:",
                    "lengthMenu": "Mostrar _MENU_ usuarios por página",
                    "zeroRecords": "No se encontro nada, lo siento",
                    "info": "Mostrando página  _PAGE_ de _PAGES_",
                    "infoEmpty": "Sin información disponible",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente",
                    },
                }
            });

        });
    </script>
@endsection
