$(document).ready(function() {
    function llenar(tabla, num) {
        $('#' + tabla + ' tbody').empty();
        var table = $('#' + tabla + '').DataTable({
            "paging": false,
            "searching": false,
            "bInfo": false,
            "ajax": {
                "url": "../getIndicadoresData/" + num + "",
                "dataSrc": ""
            },
            "columns": [{
                "data": "zona",
                "width": "20%"
            }, {
                "data": "agencia",
                "width": "20%"
            }, {
                "data": "monto",
                "width": "20%"
            }],
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encuentra vehículo alguno con los parámetros que ha indicado",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    }
    llenar('example', 1);
    llenar('example2', 0);
});