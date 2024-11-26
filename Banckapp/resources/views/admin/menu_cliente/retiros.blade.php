@extends('layouts.admin')

@section('content')
<div class="row">
        <h1>Retiros</h1>
        <hr>
    <div>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">numero de cuenta</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required>
                <div class="valid-feedback">
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">monto a retirar</label>
                <input type="text" class="form-control" id="validationCustom02" value="" required>
                <div class="valid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">monto disponible</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom05" class="form-label">credito disponible</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                Please provide a valid zip.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
                </div>
            </div>
            
           
        </form>
        <div class="col-12">
               
               <form method="GET" action="{{ route('menu_cliente.index') }}">
               <button class="btn btn-primary" type="submit">confirmar</button>
                   <button class="btn btn-primary" type="submit">Volver</button>
               </form>
           </div>
    </div>

@endsection