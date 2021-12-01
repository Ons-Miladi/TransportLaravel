@include('a.header')

<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
         
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7" style="margin-top: 0 !important;" >
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
         
        </div>
        
      </div>
      <div class="row mt-5">
      {{ Form::open(array('route' => 'carburant.store', 'method' => 'post')) }}

      <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Type</label>
                        <input type="text" name="type" id="input text" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Prix</label>
                        <input type="text" name="prix" id="input text" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-numero">debut</label>
                        <input type="text" name="debut" id="input text" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-numero">fin</label>
                        <input type="text" name="fin" id="input text" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Ajouter</button>
                </div>
                  




{{ Form::close() }}
                        @if (isset($error))
                       <div>{{$error}}</div>

                        @endif

<div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" >numero</th>
                    <th scope="col">type</th>
                    <th scope="col">prix</th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach($carburants as $carburant)
                 <tr>
                    
                    <td>{{$carburant->numero}}</td>
                    <td>{{ $carburant->type}}</td>
                    <td> {{ $carburant->prix}} </td>
                    
                    <td><a href="{{route('carburant.edit',$carburant->id)}}">modifier</a></td>
                     <td><a href="{{route('carburant.destroy',$carburant->id)}}">supprimer</a></td>



                    @endforeach  
            </tr>
                </tbody>
              </table>
            </div>
      
@include('a.footer')