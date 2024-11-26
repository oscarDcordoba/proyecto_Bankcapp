@extends('layouts.admin')

@section('content')
<div id="transfer-screen" class="app-container">
    <h1>Extractos</h1>
    <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">fecha</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tipo de cuenta</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">saldo</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">credito</font></font></th>
                    <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">descripcion</font></font></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img class="img-circle img-size-32 mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      -/-/-/
                    </font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">debito</font></font></td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        $30000000
                      </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
                    </font></font></td>
                    <td>
                      <a href="#" class="text-muted">
                        <i> debito</i>
                        <td>
                      <img  class="img-circle img-size-32 mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      pago de caja menor
                    </font></font></td>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img  class="img-circle img-size-32 mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      -/-/-/
                    </font></font></td>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">debito</font></font></td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        $30000000
                      </font></font></small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
                    </font></font></td>
                    <td>
                      <a href="#" class="text-muted">
                        <i> $0</i>
                        <td>
                      <img  class="img-circle img-size-32 mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      retiro de cajero automatico
                    </font></font></td>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              
            </div>
                <a href="{{url('admin/menu_cliente/index')}}">
                    <button class="btn btn-primary" type="button">Volver</button>
                </a>
@endsection