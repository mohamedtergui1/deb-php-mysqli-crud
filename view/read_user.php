
<?php   
   $title="User Details";?>

<?php  ob_start();  ?>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b><?= $title ?></b></h2>
                    </div>
                     
                </div>
            </div>
<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
               
<tbody>


 <tr>
    <th>First Name</th>
    <td><?= $result->getFname() ?></td>
    <th>Last Name</th>
    <td><?= $result->getLname() ?></td>
  </tr>
  <tr>
    <th>Email</th>
    <td><?=$result->getEmail()?></td>
    <th>Mobile Number</th>
    <td><?= $result->getMobileNumber()?></td>
  </tr>
  <tr>
    <th>Address</th>
    <td><?=$result->getAddress()?></td>
    <th>Creation Date</th>
    <td><?=$result->getAddress()?></td>
  </tr>
  <tr>
    <th>City</th>
    <td><?=$result->getVilleId()?></td>
  </tr>
   
</tbody>
</table>
       
        </div>
    </div>
</div>   



<?php $body=ob_get_clean(); ?>