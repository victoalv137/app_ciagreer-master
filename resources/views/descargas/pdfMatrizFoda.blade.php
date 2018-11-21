

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/all.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="css/all.css"> --}}
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    {{-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

  </head>

<body>

{{-- <div class="pdf-view">
  <div class="p-0 " style="width: 32.5%;">
  </div>
  <div class="p-0" style="background-color: #eee; width: 32.5%; float:right; ">
    @php 
        $factores = $foda->factores->where('tipo_Factor','O');
    @endphp
    @foreach ($factores as $factor)
    <p class="card-text ">{{ $factor->factor_Cod .' : '.$factor->descripcion}}
    </p>
    @endforeach
  </div>
  <div class="p-0 " style="background-color: #eee; width: 32.5%; float:right; min-height:300px">
    @php 
        $factores = $foda->factores->where('tipo_Factor','A');
    @endphp
    @foreach ($factores as $factor)
    <p class="card-text m-0">{{ $factor->factor_Cod .' : '.$factor->descripcion}}</p>
    @endforeach
  </div>
</div>   --}}
 
<table class="table">
      
    <tbody>
      <tr>
        <th scope="col">#</th>
        <th scope="col">
              <h6>Oportunidades</h6>
              @php 
                $factores = $foda->factores->where('tipo_Factor','O');
              @endphp
              @foreach ($factores as $factor)
                <p class="card-text m-0">{{ $factor->factor_Cod .' : '.$factor->descripcion}}
                </p>
              @endforeach
            
        </th>
        <th scope="col">
            <h6>Amenazas</h6>
              @php 
                $factores = $foda->factores->where('tipo_Factor','A');
              @endphp
              @foreach ($factores as $factor)
                <p class="card-text m-0">{{ $factor->factor_Cod .' : '.$factor->descripcion}}
                </p>
              @endforeach
           
        </th>
      </tr>
      <tr>
        <th scope="row">
            <h6>Fortalezas</h6>
            @php 
              $factores = $foda->factores->where('tipo_Factor','F');
            @endphp
            @foreach ($factores as $factor)
              <p class="card-text m-0">{{ $factor->factor_Cod .' : '.$factor->descripcion}}
              </p>
            @endforeach
        </th>
        <td>Jacob</td>
        <td>Thornton</td>
      </tr>
      <tr>
          <th scope="row">
              <h6>Debilidades</h6>
              @php 
                $factores = $foda->factores->where('tipo_Factor','D');
              @endphp
              @foreach ($factores as $factor)
                <p class="card-text m-0">{{ $factor->factor_Cod .' : '.$factor->descripcion}}
                </p>
              @endforeach
            
          </th>
          <td>Jacob</td>
          <td>Thornton</td>
        </tr>
    </tbody>
  </table>
</body>
</html>