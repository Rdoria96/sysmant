@extends('layouts.app')

@section('content')
    <section class="section">

        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">

          <div class="row">
            @can('crear-rol')



            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <a href="usuarios"> <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="client">Usuarios</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endcan




            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
               <a href="solicitudes"> <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Solicitudes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" ></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @can('crear-rol')
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
               <a href="roles"> <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Roles</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="prdo"></div>
                        </div>

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-key fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>
            @endcan
            @can('crear-rol')
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
               <a href="tecnicos"> <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tecnicos</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="ped"></div>
                    </div>
                    <div class="col-auto">
                      <i class="fab fa-black-tie fa-2x text-gray-300"></i>
                    </div>
                  </div>
                  <a>
                </div>

              </div>
            </div>
            @endcan
          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

