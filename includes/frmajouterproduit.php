<?php 
require './includes/header.php'; 

$sqlQuery = new Sql();
$tblQuery = $sqlQuery->lister("select * from produit");
?>
<!--/Table Eleves-->
<form action="index.php?page=ajouterproduit" method="post">
    <table>
        <thead>
            <tr>
                <th class="nomTable" colspan="6">Liste des produits</th>
            </tr>
            <tr>
                
            </tr>

            </div>
            <tr class="titreTable">
                <th>NOM</th>
                <th>QUALITY</th>
                <th>PRIX</th>
              
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div>
                        <input type="text" name="nom" id="nom"  />
                    </div>
                </td>
                <td>
                    <div>
                        <input type="text" name="quality" id="quality" />
                    </div>
                </td>
                <td>
                    <div>
                        <input type="text" name="prix" id="prix" />
                    </div>
                </td>
               
               

             

            </tr>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">
                    <div class="footTable">
                        <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                            <input type="reset" value="supprimer un produit" />
                            <input type="submit" value="Ajouter un produit" />
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
    <input type="hidden" name="frmAjouterproduit" />
</form>