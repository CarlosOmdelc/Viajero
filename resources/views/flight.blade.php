@extends('layouts.layout')

@section('content')
<div class="container">
  <div class="col-md-4">
    <h1>Londres</h1>
  </div>
  <div class="col-md-8">
    <h1>WEATHER GOES HERE</h1>
  </div>
</div>
<div class="container">
  <div class="card-deck">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Vuelo de Ida</h4>
      </div>
      <div class="card-block">
        <form class="col-md-12">
          <div class="form-group row col-md-6">
            <label for="example-number-input" class="col-2 col-form-label">Costo</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="18550" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-6" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">Número de Vuelo</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">#</div>
              <input class="form-control" type="text" value="AA1044" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-6">
            <label for="example-text-input" class="col-2 col-form-label">Aerolínea</label>
            <div class="col-10">
              <input class="form-control" type="text" value="American Airlines" id="example-text-input">
            </div>
          </div>
          <div class="form-group row col-md-6" style="margin-left:5%">
            <label for="example-text-input" class="col-2 col-form-label">Aeropuerto</label>
            <div class="col-10">
              <input class="form-control" type="text" value="Heathrow" id="example-text-input">
            </div>
          </div>
          <!--
          <div class="form-group row">
            <label for="example-password-input" class="col-2 col-form-label">Password</label>
            <div class="col-10">
              <input class="form-control" type="password" value="hunter2" id="example-password-input">
            </div>
          </div>
          <div class="form-group row">
            <label for="example-time-input" class="col-2 col-form-label">Time</label>
            <div class="col-10">
              <input class="form-control" type="time" value="13:45:00" id="example-time-input">
            </div>
          </div>
          -->
        </form>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Vuelo de Regreso</h4>
      </div>
      <div class="card-block">
        <form class="col-md-12">
          <div class="form-group row col-md-6">
            <label for="example-number-input" class="col-2 col-form-label">Costo</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="18550" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-6" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">Número de Vuelo</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">#</div>
              <input class="form-control" type="text" value="AA1044" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-6">
            <label for="example-text-input" class="col-2 col-form-label">Aerolínea</label>
            <div class="col-10">
              <input class="form-control" type="text" value="American Airlines" id="example-text-input">
            </div>
          </div>
          <div class="form-group row col-md-6" style="margin-left:5%">
            <label for="example-text-input" class="col-2 col-form-label">Aeropuerto</label>
            <div class="col-10">
              <input class="form-control" type="text" value="Heathrow" id="example-text-input">
            </div>
          </div>
        </form>
        <!--
        <form>
          <div class="form-group has-success">
            <label class="form-control-label" for="inputSuccess1">Input with success</label>
            <input type="text" class="form-control form-control-success" id="inputSuccess1">
            <div class="form-control-feedback">Success! You've done it.</div>
            <small class="form-text text-muted">Example help text that remains unchanged.</small>
          </div>
          <div class="form-group has-warning">
            <label class="form-control-label" for="inputWarning1">Input with warning</label>
            <input type="text" class="form-control form-control-warning" id="inputWarning1">
            <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
            <small class="form-text text-muted">Example help text that remains unchanged.</small>
          </div>
          <div class="form-group has-danger">
            <label class="form-control-label" for="inputDanger1">Input with danger</label>
            <input type="text" class="form-control form-control-danger" id="inputDanger1">
            <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
            <small class="form-text text-muted">Example help text that remains unchanged.</small>
          </div>
        </form>
        -->
      </div>
    </div>
  </div>

<!-- AQUI VAN LOS OTROS GASTOS -->
  <div class="card-deck">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Transporte</h4>
      </div>
      <div class="card-block">
        <form class="col-md-12">
          <div class="form-group row col-md-4">
            <label for="example-text-input" class="col-2 col-form-label">Tipo</label>
            <div class="col-10">
              <input class="form-control" type="text" value="Subterraneo" id="example-text-input">
            </div>
          </div>
          <div class="form-group row col-md-4" style="margin-left:5%">
            <label for="example-text-input" class="col-2 col-form-label">Tipo</label>
            <div class="col-10">
              <input class="form-control" type="text" value="Tren" id="example-text-input">
            </div>
          </div>
          <div class="form-group row col-md-4" style="margin-left:5%">
            <label for="example-text-input" class="col-2 col-form-label">Tipo</label>
            <div class="col-10">
              <input class="form-control" type="text" value="Camión" id="example-text-input">
            </div>
          </div>

          <!-- SEGUNDA FILA -->

          <div class="form-group row col-md-4">
            <label for="example-number-input" class="col-2 col-form-label">Costo</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="50" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-4" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">Costo</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="100" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-4" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">Costo</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="5" id="example-number-input">
            </div>
          </div>

          <!-- TERCERA FILA -->
          <div class="form-group row col-md-12">
            <label for="example-number-input" class="col-2 col-form-label">Notas</label>
            <div class="col-md-12 input-group">
              <textarea class="form-control" type="text" id="example-number-input" rows="3">Usar Oyster card porque me ahorra un 10%</textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Comida</h4>
      </div>
      <div class="card-block">
        <div class="col-md-12" style="margin-bottom:3%">
          <p><b>*Para una mejor estimación, porfavor pon los precios por día</b></p>
          <p><b>*Se sugiere comprar ingredientes en supermercados</b></p>
        </div>
        <form class="col-md-12">
          <div class="form-group row col-md-4">
            <label for="example-number-input" class="col-2 col-form-label">Desayuno</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="100" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-4" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">Comida</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="100" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-4" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">Cena</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="100" id="example-number-input">
            </div>
          </div>

          <!-- SEGUNDA FILA -->

          <div class="form-group row col-md-12">
            <label for="example-number-input" class="col-2 col-form-label">Notas</label>
            <div class="col-md-12 input-group">
              <textarea class="form-control" type="text" id="example-number-input" rows="3">Preferentemente no ir a restaurantes</textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- AQUI VIENEN LOS GASTOS DE ESTADIA Y VISITAS -->

  <div class="card-deck">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Itinerario / Visitas</h4>
      </div>
      <div class="card-block">
        <form class="col-md-12">
          <div class="form-group row col-md-6">
            <label for="example-text-input" class="col-2 col-form-label">Lugar</label>
            <div class="col-10">
              <input class="form-control" type="text" value="Elizabeth Tower" id="example-text-input">
            </div>
          </div>
          <div class="form-group row col-md-6" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">Costo</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="0" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-6">
            <label for="example-number-input" class="col-2 col-form-label">De</label>
            <div class="col-10 input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
              <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
            </div>
          </div>
          <div class="form-group row col-md-6" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">A</label>
            <div class="col-10 input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
              <input class="form-control" type="date" value="" id="example-date-input">
            </div>
          </div>
          <div class="form-group row col-md-6">
            <label for="example-number-input" class="col-2 col-form-label">De</label>
            <div class="col-10 input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div>
              <input class="form-control" type="time" value="13:45:00" id="example-time-input">
            </div>
          </div>
          <div class="form-group row col-md-6" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">A</label>
            <div class="col-10 input-group">
              <div class="input-group-addon"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div>
              <input class="form-control" type="time" value="13:45:00" id="example-time-input">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Estadía</h4>
      </div>
      <div class="card-block">
        <form class="col-md-12">
          <div class="form-group row col-md-4">
            <label for="example-text-input" class="col-2 col-form-label">Lugar</label>
            <div class="col-10">
              <input class="form-control" type="text" value="Happy Hostel" id="example-text-input">
            </div>
          </div>
          <div class="form-group row col-md-4" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">Número de Noches</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">#</div>
              <input class="form-control" type="text" value="4" id="example-number-input">
            </div>
          </div>
          <div class="form-group row col-md-4" style="margin-left:5%">
            <label for="example-number-input" class="col-2 col-form-label">Costo</label>
            <div class="col-10 input-group">
              <div class="input-group-addon">$</div>
              <input class="form-control" type="number" value="60" id="example-number-input">
            </div>
          </div>

          <!-- SEGUNDA FILA -->

          <div class="form-group row col-md-12">
            <label for="example-number-input" class="col-2 col-form-label">Notas</label>
            <div class="col-md-12 input-group">
              <textarea class="form-control" type="text" id="example-number-input" rows="3">Incluye café gratis en la mañana</textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--
  <form class="col-md-12">
    <button type="submit" class="btn btn-default" style="float:right">Next</button>
  </form>
  -->
</div>
@endsection
