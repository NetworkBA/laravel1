@extends ('layout.patron');
@section ('titulo','Administracion de empleados')
@section ('contenido');


<div class="righ_col" role="main">
    <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Administracion de empleados</h3>
          </div>
        </div>
    </div>
</div>

  <div class="clearfix">
  <div class="x_panel">
    <div class="x_title">
        <h2>Listado de empleado</h2>
          <div class="clearfix"></div>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">
                  <table id="datatable-keytable" class="table table-stripped tabled-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Nombre</th>
                          <th>Apellidos</th>
                          <th>Cedula</th>
                          <th>Email</th>
                          <th>Sexo</th>
                          <th>Estado Civil</th>
                          <th>Telefono</th>
                        </tr>
                      </thead>
                      <tbody>


                      @foreach($empleados as $empleado)
                      <tr>
                        _create_empleados_table
                        <td>{{$empleado->nombre}}</td>
                        <td>{{$empleado->apellido}}</td>
                        <td>{{$empleado->cedula}}</td>
                        <td>{{$empleado->email}}</td>
                        <td>{{$empleado->lugar_nacimiento}}</td>
                        <td>{{$empleado->sexo}}</td>
                        <td>{{$empleado->telefono}}</td>
                        <td>
                            <div style="display:flex;">
                                <a href={{url('empleados/'.$empleado->id.'')}}></a>
                            </div>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
  @endsection
