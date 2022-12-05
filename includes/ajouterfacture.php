<?php 
require './includes/header.php'; 

$sqlQuery = new Sql();
$tblQuery = $sqlQuery->lister("select * from facture");
?>
<!--/Table Eleves-->
<form action="index.php?page=ajouterFacture" method="post">

   
   <table>
       <tr>
           <td>
               <img src="https://monsite.com/images/logo.png" />
               <!-- utilisez un lien absolu, c'est beaucoup moins galère et cette ressource ne devrait pas bouger. Dans le cas présent ça se justifie -->
           </td>
           <td>
               <b>Facturé à :</b><br />
               $nomDuClient<br />
               $adresseDuClient
           </td>
           <td>
               <b>Détails :</b><br />
               Date de facturation : $date<br />
               Numéro de facture : $numeroDeFacture
           </td>
       </tr>
       <table>
   <thead>
   <label for="client">id_client:</label><br>

<select name="client" id="client">
    
</select>
       <tr>
       <th>
            nom
           </th>
           <th>
            Prestation
           </th>
           
           <th>
               Prix_coiffure
           </th>
          
           <th>
               Prix_produits
           </th>
          
           <th>
            Somme_facturé
           </th>
           <th>
             Date
           </th>
       </tr>
       
       </tr>
   </thead>
   <tbody>
       <!-- ici on boucle sur les lignes de notre facture -->
       <tr> <td>
           <input type="text" name="nom" id="nom"  />
           </td>
           <td>
           <input type="text" name="prestation" id="prestation"  />
           </td>
           <td>
           <input type="text" name="prix_coiffure" id="prix_coiffure"  />
           </td>
           
           <td>
           <input type="text" name="prix_produit" id="prix_produit"  />
           </td>
           <td>
           <input type="text" name="somme_facture" id="somme_facture"  />
           </td>
           <td>
           <input type="text" name="date" id="date"  />
           </td>
       </tr>
       </tr>
       <!-- fin de la boucle -->
    
</table>
   </table>
     </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    <div class="footTable">
                        <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                    
                       
                       
                            <input type="submit" value="Ajouter Facture" />
                                 <input type="reset" value="Supprimer Facture" />
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
    <input type="hidden" name="ajouterfacture" />
</form>