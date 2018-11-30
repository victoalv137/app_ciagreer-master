<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Descargar Reporte Venta {{ $venta->codigo}} </title>
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


    <h1 style="margin:0px;text-align:left">Reporte Venta {{ $venta->codigo}}</h1>
    <h2 style="margin:0px;text-align:center">Reporte de Detalle Venta</h2>
    <style>
        table > td, table > th {
            padding: 5px;
        }
    </style>
    <div style="margin-top: 20px;">
        <table style="width:100%;border-collapse: collapse;" border="1">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Repuesto</th>
                    <th>Costo</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>           
                </tr>
            </thead>

            <tbody>
                    @foreach ($dventas as $dventa)
                        <tr>
                            <td style="text-align: center">{{ $dventa->repuesto->codigo }}</td>
                            <td style="text-align: center">{{ $dventa->repuesto->descripcion }}</td>
                            <td style="text-align: center">{{ $dventa->repuesto->costo}}</td>
                            <td style="text-align: center">{{ $dventa->cantidad}}</td>
                            <td style="text-align: center">{{ $dventa->cantidad*$dventa->repuesto->costo}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: center">total</td>
                        <td style="text-align: center">{{$sum}}</td>
                    </tr>
                    
            </tbody>        
        </table>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
