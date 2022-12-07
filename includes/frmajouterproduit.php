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
                <th>TYPE</th>
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
                        <input type="text" name="type" id="Type" />
                    </div>
                </td>
                <td>
                    <div>
                        <input type="text" name="prix" id="prix" />
                    </div>
                </td>