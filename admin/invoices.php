<?php 
   require_once "helper.php";
   
    ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
   <head>
      <?php include_once ("Includes/MetaTag.php");?>
      <title>::POS:: Dashboard </title>
      <!--    GENERAL SCRIPT-->
      <?php include_once ("Includes/HeaderGeneralScript.php");?>
      <!-- sidebar -->
      <?php include_once ("Includes/SideBar.php");?>
      <!-- main body area -->
      <div class="main px-lg-4 px-md-4">
         <!-- Body: Header -->
         <?php include_once ("Includes/HeaderNavBar.php");?>
         <!-- Body: Body -->
         <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
               <div class="row align-items-center">
                  <div class="border-0 mb-4">
                     <div class="card-header no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0 py-3 pb-2">Invoices</h3>
                        <div class="col-auto py-2 w-sm-100">
                           <ul class="nav nav-tabs tab-body-header rounded invoice-set" role="tablist">
                              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Invoice-list" role="tab">Invoice List</a></li>
                              <li class="nav-item"><a class="nav-link  active" data-bs-toggle="tab" href="#Invoice-Simple" role="tab">Simple invoice</a></li>
                              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Invoice-Email" role="tab">Email invoice</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Row end  -->
               <div class="row justify-content-center">
                  <div class="col-lg-12 col-md-12">
                     <div class="tab-content">
                        <div class="tab-pane fade" id="Invoice-list">
                           <div class="row justify-content-center">
                              <div class="col-lg-8 col-md-12">
                                 <div class="card mb-3">
                                    <div class="card-body d-sm-flex justify-content-between">
                                       <a href="javascript:void(0);" class="d-flex">
                                          <img class="avatar rounded" src="../assets/images/xs/avatar1.svg" alt="">
                                          <div class="flex-fill ms-3 text-truncate">
                                             <h6 class="d-flex justify-content-between mb-0"><span>Ryan MacLeod</span></h6>
                                             <span class="text-muted">Ke Arrow Silicon</span>
                                          </div>
                                       </a>
                                       <div class="text-end d-none d-md-block">
                                          <p class="mb-1"><i class="icofont-location-pin ps-1"></i> 2211 Jones Avenue,Winston Salem FL 27107</p>
                                          <span class="text-muted"><i class="icofont-money ps-1"></i> $500</span>
                                       </div>
                                    </div>
                                    <div class="card-footer justify-content-between d-flex align-items-center">
                                       <div class="d-none d-md-block">
                                          <strong>Date on:</strong>
                                          <span>23 Feb, 2021</span>
                                       </div>
                                       <div class="card-hover-show">
                                          <a class="btn btn-sm btn-white border lift" href="#">Download</a>
                                          <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                          <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Row end  -->
                        </div>
                        <!-- tab end  -->
                        <div class="tab-pane fade show active" id="Invoice-Simple">
                           <div class="row justify-content-center">
                              <div class="col-lg-8 col-md-12">
                                 <div class="card p-xl-5 p-lg-4 p-0">
                                    <div class="card-body">
                                       <div class="mb-3 pb-3 border-bottom">
                                          Invoice
                                          <strong>May 22, 2021</strong>
                                          <span class="float-end"> <strong>transection id:</strong> #18414</span>
                                       </div>
                                       <div class="row mb-4">
                                          <div class="col-sm-6">
                                             <h6 class="mb-3">From:</h6>
                                             <div><strong>eBazar Shop</strong></div>
                                             <div>111  Berkeley Rd</div>
                                             <div>STREET ON THE FOSSE, Poland</div>
                                             <div>Email: info@ebazar.com</div>
                                             <div>Phone: +44 888 666 3333</div>
                                          </div>
                                          <div class="col-sm-6">
                                             <h6 class="mb-3">To:</h6>
                                             <div><strong>Dianalove</strong></div>
                                             <div>45 Larissa Court</div>
                                             <div>Victoria, BIRDWOODTON</div>
                                             <div>Email: Dianalove@gmail.com</div>
                                             <div>Phone: +66 243 456 789</div>
                                          </div>
                                       </div>
                                       <!-- Row end  -->
                                       <div class="table-responsive-sm">
                                          <table class="table table-striped">
                                             <thead>
                                                <tr>
                                                   <th class="text-center">#</th>
                                                   <th>Item</th>
                                                   <th>Description</th>
                                                   <th class="text-end">Item Cost</th>
                                                   <th class="text-center">Products Item</th>
                                                   <th class="text-end">Total</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td class="text-center">1</td>
                                                   <td>Rado Watch</td>
                                                   <td>Men Watch for Gold Color</td>
                                                   <td class="text-end">$330.00</td>
                                                   <td class="text-center">1</td>
                                                   <td class="text-end">$330.00</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-4 col-sm-5">
                                          </div>
                                          <div class="col-lg-4 col-sm-5 ms-auto">
                                             <table class="table table-clear">
                                                <tbody>
                                                   <tr>
                                                      <td ><strong>Subtotal</strong></td>
                                                      <td class="text-end">$330.00</td>
                                                   </tr>
                                                   <tr>
                                                      <td ><strong>Tax(18%)</strong></td>
                                                      <td class="text-end">$59.4</td>
                                                   </tr>
                                                   <tr>
                                                      <td ><strong>Total</strong></td>
                                                      <td class="text-end"><strong>$389.00</strong></td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <!-- Row end  -->
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <h6>Terms &amp; Condition</h6>
                                             <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</p>
                                          </div>
                                          <div class="col-lg-12 text-end">
                                             <button type="button" class="btn btn-outline-secondary btn-lg my-1"><i class="fa fa-print"></i> Print</button>
                                             <button type="button" class="btn btn-primary btn-lg my-1"><i class="fa fa-paper-plane-o"></i> Send Invoice</button>
                                          </div>
                                       </div>
                                       <!-- Row end  -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Row end  -->
                        </div>
                        <!-- tab end  -->
                        <div class="tab-pane fade" id="Invoice-Email">
                           <div class="row justify-content-center">
                              <div class="col-lg-8 col-md-12">
                                 <div class="d-flex justify-content-center">
                                    <table class="card p-5">
                                       <tr>
                                          <td></td>
                                          <td class="text-center">
                                             <table>
                                                <tr>
                                                   <td class="text-center">
                                                      <h2>$389.00 Paid</h2>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td class="text-center py-2">
                                                      <h4 class="mb-0">Thanks for usingeBazar.</h4>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td class="pt-2 pb-4">
                                                      <table>
                                                         <tr>
                                                            <td>
                                                               Attn: <strong>Dianalove</strong> Winston Salem FL 27107<br>
                                                               Email: Dianalove@gmail.com<br>
                                                               Phone: +88 123 456 789<br>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td class="pt-2">
                                                               <table class="table table-bordered">
                                                                  <tr>
                                                                     <td class="text-start">Rado Watch</td>
                                                                     <td class="text-end">$ 330.00</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td class="text-start">1 Year Product Warranty</td>
                                                                     <td class="text-end">$ 10.99</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td class="text-start">Production Transportation</td>
                                                                     <td class="text-end">$ 49.00</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td class="text-start w-80"><strong>Total</strong></td>
                                                                     <td class="text-end fw-bold">$389.00</td>
                                                                  </tr>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </table>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td class="pt-2 pb-2 text-center">
                                                      <a href="#">View in browser</a>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td class="p-0 text-center">
                                                      PXL Inc. 47 Aurora St. South West, CT 06074
                                                   </td>
                                                </tr>
                                             </table>
                                             <table class="mt-3 text-center w-100">
                                                <tr>
                                                   <td class="aligncenter content-block">Questions? Email <a href="mailto:">info@pixelwibes.com</a></td>
                                                </tr>
                                             </table>
                                          </td>
                                          <td></td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <!-- Row end  -->
                        </div>
                        <!-- tab end  -->
                     </div>
                  </div>
               </div>
               <!-- Row end  -->
            </div>
         </div>
         <!-- Modal Custom Settings-->
      </div>
      </div>
      <!-- Jquery Core Js -->
      <?php include_once ("Includes/FooterGeneralScript.php");?>
      </body>
</html>