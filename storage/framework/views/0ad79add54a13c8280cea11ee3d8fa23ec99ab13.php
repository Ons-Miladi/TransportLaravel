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
      <?php echo e(Form::open(array('route' => 'mission.store', 'method' => 'post'))); ?>


      <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-sujet">Sujet</label>
                        <input type="text" name="sujet" id="input text" class="form-control form-control-alternative" placeholder="">
                        
                      
                        
                        
                        
                        
                        
                        
                        
                      
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
                        <input type="date" name="date_fin" id="input text" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                   

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Destination</label>
                        <input type="text" name="destination" id="input text" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Nom_accompagnant</label>
                        <input type="text" name="nom_accompagnant" id="input text" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Prenom_accompangant</label>
                        <input type="text" name="prenom_accompagnant" id="input text" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">choisir_une_voiture</label>
                        <div class="col-sm-6">
  <select name="id_voiture" id="input text" class="form-control input-sm">
  <option value=""></option>
   
  <?php $__currentLoopData = $voitures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voiture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($voiture->id); ?>"><?php echo e($voiture->matricule); ?></option>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
   </select>
</div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">choisir_un_chauffeur</label>
                        <div class="col-sm-6">
  <select name="id_chauffeur" id="input text" class="form-control input-sm"  >
  <option value=""></option>
   
  <?php $__currentLoopData = $chauffeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($chauffeur->id); ?>"><?php echo e($chauffeur->nom); ?></option>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
   </select>
</div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">numero_debut</label>
                        <div class="col-sm-6">
  <select name="id_d" id="input text" class="form-control input-sm"  >
  <option value=""></option>
   
  <?php $__currentLoopData = $carburants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carburant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($carburant->id); ?>"><?php echo e($carburant->numero); ?></option>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
   </select>
</div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">numero_fin</label>
                        <div class="col-sm-6">
  <select name="id_f" id="input text" class="form-control input-sm"  >
  <option value=""></option>
   
  <?php $__currentLoopData = $carburants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carburant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <option value="<?php echo e($carburant->id); ?>"><?php echo e($carburant->numero); ?></option>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
   </select>
</div>
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
                    <th scope="col" >sujet</th>
                    <th scope="col">date_debut</th>
                    <th scope="col">date-fin</th>
                    <th scope="col">destination</th>
                    <th scope="col">nom_accompagnant</th>
                    <th scope="col">prenom_accompagnant</th>
                    <th scope="col">matricule</th>
                    <th scope="col">nom</th>
                    <th scope="col">numero_debut</th>
                    <th scope="col">numero_fin</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                
                <?php $__currentLoopData = $missions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                 
                    
                    <td><?php echo e($mission->sujet); ?></td>
                    <td> <?php echo e($mission->date_debut); ?> </td>
                    <td> <?php echo e($mission->date_fin); ?> </td>
                    <td> <?php echo e($mission->destination); ?> </td>
                    <td> <?php echo e($mission->nom_accompagnant); ?> </td>
                    <td> <?php echo e($mission->prenom_accompagnant); ?> </td>
                     <td  > <?php echo e((\App\Voiture::find($mission->id_voiture))['matricule']); ?></td>
                  
                     <td><?php echo e((\App\Chauffeur::find($mission->id_chauffeur))['nom']); ?>  </td>
                    
                    <td><?php echo e((\App\Carburant::find($mission->id_d))['numero']); ?></td>
                    
                    <td><?php echo e((\App\Carburant::findOrFail($mission->id_f))['numero']); ?></td>
                    
                    
                    <td><a href="<?php echo e(route('mission.imprimer',$mission->id)); ?>">imprimer</a></td>
                    <td><a href="<?php echo e(route('mission.edit',$mission->id)); ?>">modifier</a></td>
                     <td><a href="<?php echo e(route('mission.destroy',$mission->id)); ?>">supprimer</a></td>
                     

                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
               
                
                
                </tbody>
              </table>
            </div>
            
<?php echo $__env->make('a.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proj\resources\views/mission/index.blade.php ENDPATH**/ ?>