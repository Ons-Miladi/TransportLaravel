

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
    <div class="container-fluid mt--7" style="margin-top: 0 !important;">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
         
        </div>
        
      </div>
      <div class="row mt-5">
      
      <?php echo e(Form::open(array('route' => 'chauffeur.store', 'method' => 'post'))); ?>

<?php echo csrf_field(); ?>


<div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nom</label>
                        <input type="text" name="nom" id="input text" class="form-control form-control-alternative" placeholder="">
           
                        
                      </div>
                      
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input text">Prenom</label>
                        
                        <input type="text" name="prenom" id="input text" class="form-control form-control-alternative" placeholder="">
                     
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Ajouter</button>
                </div>
                
<?php echo e(Form::close()); ?>



<?php if(isset($error)): ?>
                       <div><?php echo e($error); ?></div>

                        <?php endif; ?>


<div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">action</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                
                <?php $__currentLoopData = $chauffeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                 <td><?php echo e($chauffeur->nom); ?></td>
                 <td> <?php echo e($chauffeur->prenom); ?>  </td>
                
                   
                   
                    
                    <td><a href="<?php echo e(route('chauffeur.edit',  $chauffeur->id)); ?>">modifier</a></td>
                    <td><a 
                    href="<?php echo e(route('chauffeur.destroy',  $chauffeur->id)); ?>">supprimer</a></td>
                    

                    
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
             

              
              
           

           

            <?php echo $__env->make('a.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 




          
          <?php /**PATH C:\xampp\htdocs\proj\resources\views/chauffeur/index.blade.php ENDPATH**/ ?>