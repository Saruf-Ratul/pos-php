<?php 
   require_once "helper.php";
   
    ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
   <head>
      <?php include_once ("Includes/MetaTag.php");?>
      <title>::POS:: Users </title>
      <!--    GENERAL SCRIPT-->
      <?php include_once ("Includes/HeaderGeneralScript.php");?>
      <!-- sidebar -->
      <?php include_once ("Includes/SideBar.php")?>
      <!-- main body area -->
      <div class="main px-lg-4 px-md-4">
         <!-- Body: Header -->
         <?php include_once ("Includes/HeaderNavBar.php")?>
         <!-- Body: Body -->       
         <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
               <div class="row align-items-center">
                  <div class="border-0 mb-4">
                     <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">User Information</h3>
                        <div class="col-auto d-flex w-sm-100">
                           <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#addUserModalForm"><i class="icofont-plus-circle me-2 fs-6"></i>Add User</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Row end  -->
               <div class="row clearfix g-3">
                  <div class="col-sm-12">
                     <div class="card mb-3">
                        <div class="card-body">
                           <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                              <thead>
                                 <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                   
                                    <th>e-Mail</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    $AllUsers = $Controller->getUsers();
                                    if ($AllUsers !="") {
                                        $cnt =0;
                                        foreach ($AllUsers as $user) {
                                            $cnt++;?>
                                 <tr>
                                    <td><strong><?php echo $cnt; ?></strong></td>
                                    <td><?php echo $user->full_name;?> </td>
                                    <td>
                                       <span class="fw-bold ms-1"><?php echo $user->username;?></span>
                                    </td>
                                    <td><?php echo $user->email;?></td>
                                    <td>
                                    <?php 
                                    
                                    echo  match ($user->userType) {
                                        'Administrator' => '<span class="badge bg-success">'.$user->userType.'</span>',
                                        'Admin' => '<span class="badge bg-primary">'.$user->userType.'</span>',
                                        default => '<span class="badge bg-warning">'.$user->userType.'</span>',
                                     }
                                     ?> 
                                    </td>
                                    <td>
                                       <?php if ($user->userType !=="Administrator"): ?>
                                          <div class="btn-group" role="group" aria-label="Basic outlined example">
                                          <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                          <?php if ($user->status == 1): ?>
                                              <button type="button" data-id="<?php echo $user->id;?>" data-action="suspend_user" class="btn btn-outline-secondary deleterow" title="Click to Suspend User"><i class="icofont-ui-cut text-danger"></i></button>
                                           <?php else: ?>
                                             <button type="button" data-id="<?php echo $user->id;?>" data-action="suspend_user" class="btn btn-outline-secondary deleterow" title="Click to Suspend User"><i class="icofont-ui-cut text-danger"></i></button>
                                          <?php endif ?>
                                          
                                       </div>
                                       <?php endif ?>
                                       
                                    </td>
                                 </tr>
                                 <?php
                                    }
                                    }
                                    
                                     ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Row End -->
            </div>
         </div>
         <!-- Modal Custom Settings-->
         <!-- Add Expence-->
         <div class="modal fade" id="addUserModalForm" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title  fw-bold" id="expaddLabel">Create User Account</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <div class="deadline-form">
                        <form id="addUserForm" autocomplete="off">
                           <div class="row g-3 mb-3">
                              <div class="col-sm-12">
                                 <label for="name" class="form-label">Fullname</label>
                                 <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter name..." name="fullname">
                              </div>
                              
                           </div>
                           <div class="row g-3 mb-3">
                              <div class="col-sm-12">
                                 <label for="username" class="form-label">Username</label>
                                 <input type="text" class="form-control form-control-lg" id="abc11" placeholder="Enter Username" name="username">
                              </div>
                              <div class="col-sm-12">
                                 <label for="abc11" class="form-label">e-Mail</label>
                                 <input type="text" class="form-control form-control-lg" id="abc11" placeholder="Enter e-mail..." name="email">
                              </div>
                               <div class="col-sm-12">
                                 <label for="password" class="form-label"> Password</label>
                                 <input type="password" class="form-control form-control-lg generatedPassword" placeholder="Click Generate to create Secure Password" name="password" id="generatedPassword">
                              </div> 
                           </div>
                           <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                  <button id="button_gen" type="button" class="btn btn-dark btn-fw">Generate Secure Password</button>
                              </div>
                             <div class="col-sm-6">
                              <label for="chkShowPassword">
                <input id="chkShowPassword" type="checkbox" />
                Show password</label>
                                 <!-- <button type="button" id="show_hideBtn" class="btn btn-warning">Show</button> -->
                              </div>
                           </div>
                           
                           <div class="row g-3 mb-3">
                              <div class="col-sm-12">
                                 <label class="form-label">&nbsp;</label>
                                  <select class="form-select form-control" name="userRole">
                                           <option selected value="">Choose User Role..</option>
                                           <option value="Admin">Admin</option>
                                            <option value="Cashier">Cashier</option>
                                       </select>
                              </div>
                           </div>
                           <input type="hidden" name="kme_user" value="kme">
                           <input type="hidden" name="action" value="create_new_user">
                           <div class="modal-footer">
                              <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Dismiss</button>
                              <button type="submit" class="btn btn-primary loading">Create</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Edit Expence-->
         
      </div>
      </div>
      <!-- Jquery Core Js -->
      <?php include_once ("Includes/FooterGeneralScript.php");?>
      <!-- Jquery Page Js -->
      <script>
         // project data table
         $(document).ready(function() {
         
            /*Password Generator*/
         var password= $(".generatedPassword");
         $("#button_gen").on("click",genPassword);

   function genPassword() {
    var chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var passwordLength = 15;
    var password = "";
   for (var i = 0; i <= passwordLength; i++) {
   var randomNumber = Math.floor(Math.random() * chars.length);
   password += chars.substring(randomNumber, randomNumber +1);
  }
       $(".generatedPassword").val(password);
 }
            /*Ends Here*/
             $('#myProjectTable')
             .addClass( 'nowrap' )
             .dataTable( {
                 responsive: true,
                 columnDefs: [
                     { targets: [-1, -3], className: 'dt-body-right' }
                 ]
             });
             $('.deleterow').on('click',function(){
             var tablename = $(this).closest('table').DataTable();  
             tablename
                     .row( $(this)
                     .parents('tr') )
                     .remove()
                     .draw();
             } );
         
             //
               $("#addUserForm").on("submit",function(e){
         e.preventDefault();
         $(".loading").html('<img src="../assets/loaders/tail-spin.svg" width="25">Loading...').attr("disabled", "disabled");
         const formData = $(this).serialize();
         $.post("../app/View",formData,function(data){
            setTimeout(function(){
                $(".loading").html("Submit").attr("disabled", false);
                $("#server-response").html(data);
            },1500)
         
         })
         })
         });
      </script>

      <script type="text/javascript">
    $(function () {
        $("#chkShowPassword").bind("click", function () {
            var txtPassword = $("#generatedPassword");
            if ($(this).is(":checked")) {
                txtPassword.after('<input name="password generatedPassword" onchange = "PasswordChanged(this);" class="form-control form-control-lg generatedPassword" id = "txt_' + txtPassword.attr("id") + '" type = "text" value = "' + txtPassword.val() + '" />');
                txtPassword.hide();
            } else {
                txtPassword.val(txtPassword.next().val());
                txtPassword.next().remove();
                txtPassword.show();
            }
        });
    });
    function PasswordChanged(txt) {
        $(txt).prev().val($(txt).val());
    };
</script>
      </body>
</html>