
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cotizacion</title>
       
    
        <style>
            td{
                font-size: 12px;
            }  

            
            @media print {
                @page {
                    margin: 0;
                }

                
            }
        </style>
    </head>
    <body>
        <div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin:20px;font-size:12px;">
            <div>
            <img src="{{ asset('images/logotipo.png') }}" alt="Alternate Text" style="height:60px;" />
            </div>
    
            <h3 style="text-align: center">COTIZACION: {{ $cotizacion->codigo }}</h3>
            <p style="text-align: right">{{ $cotizacion->created_at }}</p>
            <table style="font-weight: bold;font-size:12px;">
                <tr>
                    <td>Señores:</td>
                    <td id="lblCliente">{{ $cliente->nombreComercial }}</td>
                </tr>
                <tr>
                    <td>Atencion: </td>
                    <td>Alvarado Moreno , Victor Antonio</td>
                </tr>
                <tr>
                    <td>Referencia: </td>
                    <td>Alquiler de {{ $producto->nombreComercial }}</td>
                </tr>
            </table>
            <p>De mi especial consideracion</p>
            <p style="text-align: center">Tengo el honor de saludarlo y a la vez hacerle llegar la cotizcion requerida</p>
            <br />
            <style>
                table p {
                    margin: 2px;
                }
            </style>
            <table border="1" style="border-collapse: collapse; width: 100%">
                <thead>
                    <tr>
                        <th style="padding: 10px;">ITEM</th>
                        <th style="padding: 10px;">CANTIDAD</th>
                        <th style="padding: 10px;">DESCRIPCION</th>
                        <th style="padding: 10px;">COSTO UNITARIO</th>
                        <th style="padding: 10px;">COSTO TOTAL MENSUAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="3" style="text-align: center">1</td>
                        <td rowspan="3" style="text-align: center">1</td>
                        <td>
                            <u><b>Alquiler de Ventilador</b></u>
                            <p>Marca {{ $ventilador->marca }}, Modelo {{ $ventilador->modelo}}</p>
                        </td>
                        <td rowspan="3" style="text-align: center">{{$ventilador->producto->costo}}</td>
                        <td rowspan="3" style="text-align: center">{{$ventilador->producto->costo}}</td>
                    </tr>
                    <tr>
                        <td>
                            <u><b>Caracteristicas Técnicas</b></u>
                            <p>Maximo Caudal: Caudal 90 l/s</p>
                            <p>Máxima Altura Dinámica Total: 90 m</p>
                            <p>Máximo Diámetro de Sólidos: 12 mm</p>
                            <p>Velocidad: 3500 rpm</p>
                            <p>Energía: 460. Arranque: Directo</p>
                            <p>Corriente Nominal: 65 A</p>
                            <p>Potencia Nominal: 15 HP./p>
                            <p>Potencia Máxima Absorbida: 64 HP.</p>
                            <p>Cable: SUBCAB 4G10 mm2
    </p>
                            <p>Dimensiones (AnxAlto): 510 1360 mm</p>
                            <p>Peso: 285 Kg</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>A. Los precios NO Incluyen IGV.</p>
                            <p>B. Los equipos se entregaran totalmente operativos y con protocolo de pruebas.</p>
                            <p>C. Los equipos solo serán entregados previa emisión de orden de compra u orden de servicios a la firma del contrato</p>
                            <p>D. Los equipos serán instalados  en obra </p>
                            <p>F. El CLIENTE, se compromete a devolver EL EQUIPO en las mismas condiciones entregadas, esto es, con su respectivo tablero eléctrico, descarga y la cantidad de cable en buen estado, caso contrario se cobrará la reposición de lo faltante a valor nuevo, en la facturación inmediata que corresponda.</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td>TOTAL</td>
                        <td>$ 870 (incluye precio tablero)</td>
                    </tr>
                </tbody>
            </table>
    
            <table style="margin: 20px auto">
                <tr>
                    <td><b>PAGO: </b></td>
                    <td>30 dias después de recibir la factura</td>
                </tr>
                <tr>
                    <td><b>VALIDEZ DE LA OFERTA: </b></td>
                    <td>10 dias</td>
                </tr>
            </table>
    
            <p>Esperando ser favorecidos y atenderles con la garantía que nos caracteriza nos despedimos de usted.</p>
            <p>Atentamente,</p>
    
            <p style="margin: 2px;text-align:center"><u>JHONY RODRIGUEZ MURRUGARRA</u></p>
            <p style="margin: 2px;text-align:center"><b>GERENTE GENERAL</b></p>
        </div>
    </body>
    
    <script>
        window.print();
    </script>
    </html>
    
    