<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Descargar Reporte Capacitacion {{ $capacitacion->codigo}} </title>
    <meta charset="UTF-8">

    <style>
        td {
            font-size: 12px;
        }
        @media print {
            @page {
                margin: 0;
            } 
        }
    </style>
</head>
<body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin:20px;font-size:12px;">
    <div>
        <img src="{{ asset('images/logotipo.png') }}" alt="Alternate Text" style="height:60px;" />
    </div>


    <h1 style="margin:0px;text-align:left">Reporte Capacitacion {{ $capacitacion->codigo}}</h1>
    <h1 style="margin:0px;text-align:left">Tema Capacitacion : {{ $capacitacion->tema}}</h1>
    <h2 style="margin:0px;text-align:center">Asistentes Capacitacion</h2>
    <style>
        table > td, table > th {
            padding: 5px;
        }
    </style>
    <div style="margin-top: 20px;">
        <table style="width:100%;border-collapse: collapse;" border="1">
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>DNI</th>
                    <th>Area</th>                    
                </tr>
            </thead>

            <tbody>
                    @foreach ($capacitacion->empleados as $empleadosC)
                        <tr>
                            <td style="text-align: center">{{ $empleadosC->nombres.' '.$empleadosC->apellidos }}</td>
                            <td style="text-align: center">{{ $empleadosC->dni }}</td>
                            <td style="text-align: center">{{ $empleadosC->area->nombre}}</td>                          
                        </tr>
                    @endforeach                  
            </tbody>        
        </table>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
