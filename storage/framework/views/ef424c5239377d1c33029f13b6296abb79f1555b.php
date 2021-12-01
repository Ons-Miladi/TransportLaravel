<?php echo $__env->make('a.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
      <?php echo Form::model($mission, ['method' => 'PATCH','route' => ['mission.update',$mission->id]]); ?>



      <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-sujet">Sujet</label>
                        <input type="text" name="sujet"id="input-sujet" class="form-control form-control-alternative" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-Date_debut">Date_debut</label>
                        <input type="date" name="date_debut" id="input text" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Date_fin</label>
                        <input type="date" name="date_fin" id="input Date_fin" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Destination</label>
                        <input type="text" name="destination" id="input Destination" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Nom_accompagnant</label>
                        <input type="text" name="nom_accompagnant" id="input Nom_accompangnant" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Prenom_accompangant</label>
                        <input type="text" name="prenom_accompagnant" id="input Prenom_accompangant" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">id_voiture</label>
                        <input type="text" name="id_voiture" id="input id_voiture" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">id_chauffeur</label>
                        <input type="text" name="id_chauffeur" id="input id_chauffeur" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">id_d</label>
                        <input type="text" name="id_d" id="input id_d" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">id_f</label>
                        <input type="text" name="id_f" id="input id_f" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>

                  <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Modifier</button>
                </div>
                  

            </div>

            <?php echo e(Form::close()); ?>

<?php if(isset($error)): ?>
                       <div><?php echo e($error); ?></div>

                        <?php endif; ?>
      
<?php echo $__env->make('a.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proj\resources\views/mission/edit.blade.php ENDPATH**/ ?>