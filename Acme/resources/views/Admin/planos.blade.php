@extends('admin.layouts.main')
@section('content')

          <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       
                        <div class="d-flex justify-content-between mt-4">
  <h1>Planos</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Plano
</button>
</div>


@if($errors->any())
<div class="alert alert-danger mt-2">
  <ul>
    @foreach($errors->all() as $error)
       <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
@if(session('success'))
<div class="alert alert-success mt-2">
  {{session('success')}}
</div>
@endif
                        <div class="row">
                            <div class="col-xl-12">

                            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">id</th>
                            <th>nombre</th>
                            <th>zona_id</th>
                            <th>img</th>
                            <th class="text-right">tipo_de_acceso</th>
                            <th class="text-right">fecha_actualizacion_anterior</th>
                            <th class="text-right">fecha_actualizacion</th>
                            <th class="text-right">contraseña</th>
                            <th class="text-right">proyecto_id</th>
                        </tr>
                    </thead>
                    <tbody>
                          @foreach ($flats as $Plano)
                        <tr>
                            <td class="text-center">{{$Plano->id}}</td>
                            <td>{{$Plano->nombre}}</td>
                            <td>{{$Plano->zona_id}}</td>
                            <td>{{$Plano->img}}</td>
                            <td class="text-right">{{$Plano->tipo_de_acceso}}</td>
                            <td class="text-right">{{$Plano->fecha_actualizacion_anterior}}</td>
                            <td class="text-right">{{$Plano->fecha_actualizacion}}</td>
                            <td class="text-right">{{$Plano->contraseña}}</td>
                            <td class="text-right">{{$Plano->proyecto_id}}</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
</svg>
                            </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
</svg>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
                </div>    



                            </div>
                            

                        </div>
                    </div>
                </main>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar un plano</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/dashboard/Planos" method="POST">
                @csrf
      <div class="modal-body">
        

      <div class="form-group">
        <label for="nombre">Nombre del cliente</label>
            <input value="{{old('nombre')}}" type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Ubicacion">
</div>
<div class="form-group">
    <label for="select">Zona</label>
<select class="form-select" aria-label="Default select example" id="select" name="zona">
    <option value="" selected disabled>Selecciona una zona</option>
    @foreach($zona as $zonas)
        <option value="{{$zonas->id}}">{{$zonas->nombre}}</option>
    @endforeach
</select>
        </div>
          <div class="form-group">
            <label for="location">contraseña</label>
            <input value="{{old('contraseña')}}" type="password" class="form-control" id="contraseña" name="contraseña" aria-describedby="Ubicacion">
          </div>
          <div class="form-group">
            <label for="select">Proyecto</label>
            <select class="form-select" aria-label="Default select example" id="select" name="proyecto_id">
    <option value="" selected disabled>Selecciona un proyecto</option>
    @foreach($pedidos as $pedido)
        <option value="{{$pedido->id}}">{{$pedido->nombre}}</option>
    @endforeach
</select>
          </div>
          



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-dark">Agregar Plano</button>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection
@section('scripts')
@endsection