<?php /**
 * Search Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

require_once ('./inc/manager-db.php');
require_once 'header.php'; 

if($_SESSION['Type'] == "Administrateur" ||  $_SESSION['Type'] == "Enseignant"):
?>
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1>Page Admin</h1>
    <div>
    <br> <br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UserAddModal">
  AddUser
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UserModifModal">
  ModificationUser
</button>

<!-- /* Modal Add User */ --> 

<div class="modal fade" id="UserAddModal" tabindex="-1" role="dialog" aria-labelledby="UserAddModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UserAddModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Add User
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- /* Modal Modification User */ --> 

<div class="modal fade" id="UserModifModal" tabindex="-1" role="dialog" aria-labelledby="UserModifModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UserModifModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Modif User
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
else: 
      header('Location: index.php');
endif;
?>