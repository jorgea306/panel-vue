@extends('panel.plantilla')

@section('section_admin')

<!-- encabezado y subtitulo -->
<h1 class="h3 mb-2 text-gray-800">Usuarios</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information
  about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables
    documentation</a>.</p>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
              </div>
              <div class="col">
                <div class="progress progress-sm mr-2">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- Content Row -->

<!-- Illustrations -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
  </div>
  <div class="card-body">
    <div class="text-center">
      <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
    </div>
    <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow"
        href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use
      completely free and without attribution!</p>
    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
  </div>
</div>

<!-- Approach -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
  </div>
  <div class="card-body">
    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page
      performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
    <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially
      the utility classes.</p>
  </div>
</div>

@endsection
