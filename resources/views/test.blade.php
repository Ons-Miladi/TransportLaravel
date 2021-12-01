<!DOCTYPE html>
<head>
<style>
table, td, th {
  border: 2px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  text-align: left;
}

</style>

</head>

<body>
<h1 style="text-align:center;" >Ordre de Mission</h1>
<div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                
                  
                   <tr> <th scope="col" >sujet</th><td>{{ $mission->sujet}}</td></tr>
                   <tr> <th scope="col">date_debut</th><td> {{ $mission->date_debut}} </td></tr>
                    <tr><th scope="col">date-fin</th> <td> {{ $mission->date_fin}} </td></tr>
                    <tr><th scope="col">destination</th><td> {{ $mission->destination}} </td></tr>
                    <tr><th scope="col">nom_accompagnant</th><td> {{ $mission->nom_accompagnant}} </td></tr>
                    <tr><th scope="col">prenom_accompagnant</th><td> {{ $mission->prenom_accompagnant}} </td></tr>
                    <tr><th scope="col">matricule</th><td  > {{\App\Voiture::findOrFail($mission->id_voiture)->matricule}}</td></tr>
                    <tr><th scope="col">nom</th><td>{{\App\Chauffeur::findOrFail($mission->id_chauffeur)->nom}}  </td></tr>
                    
                   <tr> <th scope="col">numero_debut</th><td>{{\App\Carburant::findOrFail($mission->id_d)->numero}}</td></tr>
                    <tr><th scope="col">numero_fin</th><td>{{\App\Carburant::findOrFail($mission->id_f)->numero}}</td></tr>
                    
                    
                </thead>
                
               
                
                
                </tbody>
              </table>
            </div>
            </body>
            </html>



            