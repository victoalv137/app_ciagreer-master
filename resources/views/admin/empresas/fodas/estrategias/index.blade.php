@extends('admin.layout')

@section('title','Listado de Factores')

@section('section')
<i class="fas fa-list-alt"></i> Factores de la Matriz Foda
@stop()

@section('section-empresa')
<i class="fas fa-building"></i> {{ $empresa->razon_Social }}
@stop()


@section('content')
<section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <a href="{{ url('/admin/empresas/'.$empresa->id.'/fodas/')}}" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Listado de Fodas
            </a>
        </div>
        <div class="col-md-3 offset-md-3">
            <a href="{{url('/admin/empresas/'.$empresa->id.'/fodas/'.$foda->id.'/factores')}}" class="btn btn-warning btn-block">
            <i class="fas fa-list"></i> Factores
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('/admin/empresas/'.$empresa->id.'/fodas/'.$foda->id.'/matrizFoda')}}" class="btn btn btn-info btn-block">
              <i class="fas fa-table"></i> Matriz Foda
            </a>
        </div>
        </div>
    </div>
</section>

<section>





        <div class="container">
          <div class="row" id="elementos">
              <div class="col-md-12">

                  <ul class="nav nav-pills" id="myTab" role="tablist">
                      <li class="nav-item " style="width: 25%">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#FO" role="tab" aria-controls="FO" aria-selected="true">Estrategias FO</a>
                      </li>
                      <li class="nav-item " style="width: 25%">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#FA" role="tab" aria-controls="FA" aria-selected="false">Estrategias FA</a>
                      </li>
                      <li class="nav-item " style="width: 25%">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#DO" role="tab" aria-controls="DO" aria-selected="false">Estrategias DO</a>
                      </li>
                      <li class="nav-item " style="width: 25%">
                          <a class="nav-link " id="contact-tab" data-toggle="tab" href="#DA" role="tab" aria-controls="DA" aria-selected="false">Estrategias DA</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="FO" role="tabpanel" aria-labelledby="home-tab">
                          <estrategias-component :ide="{{ $empresa->id }}" :idf="{{ $foda->id }}" :fdt1="{{ json_encode('F') }}" :fdt2="{{ json_encode('O') }}" >
                            </estrategias-component>
                      </div>
                      <div class="tab-pane fade" id="FA" role="tabpanel" aria-labelledby="profile-tab">
                          <estrategias-component :ide="{{ $empresa->id }}" :idf="{{ $foda->id }}" :fdt1="{{ json_encode('F') }}" :fdt2="{{ json_encode('A') }}" >
                            </estrategias-component>
                      </div>
                      <div class="tab-pane fade" id="DO" role="tabpanel" aria-labelledby="contact-tab">
                          <estrategias-component :ide="{{ $empresa->id }}" :idf="{{ $foda->id }}" :fdt1="{{ json_encode('D') }}" :fdt2="{{ json_encode('O') }}" >
                            </estrategias-component>
                      </div>
                      <div class="tab-pane fade" id="DA" role="tabpanel" aria-labelledby="contact-tab">
                          <estrategias-component :ide="{{ $empresa->id }}" :idf="{{ $foda->id }}" :fdt1="{{ json_encode('D') }}" :fdt2="{{ json_encode('A') }}" >
                            </estrategias-component>
                      </div>
                    </div>
                    





                <hr>
              </div>
          </div>
        </div>
      </section>
@stop