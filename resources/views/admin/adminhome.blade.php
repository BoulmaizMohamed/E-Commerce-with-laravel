@extends('layout.admin_layout')

@section('home')




<!---End of Modal-->
      <!---Cards-->
      <section>

                     <div class="card card-common">
                         <div class="card-body">
                             <div class="d-flex justify-content-between">
                                 <i class="fas fa-money-check-alt fa-3x text-info"></i>
                                 <div class="text-right text-dark">
                                     <h5>payments</h5>
                                     <h3>20000$</h3>
                                 </div>
                             </div>
                         </div>
            <div class="card-footer text-dark">
                <i class="fas fa-spinner fa-pulse text-info mr-3"></i>
                <span>Updating</span>
            </div>
                     </div>

                 </div>
                 <div class="col-xl-3 col-sm-6 p-2">
                        <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-memory fa-3x text-info"></i>
                                        <div class="text-right text-dark">
                                            <h5>Our-Products</h5>
                                            <h3>100</h3>
                                        </div>
                                    </div>
                                </div>
                   <div class="card-footer text-dark">
                    <i class="fas fa-spinner fa-pulse text-success mr-3"></i>
                       <span>Updating</span>
                   </div>
                            </div>
                     
                    </div>
                    <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <i class="fas fa-users fa-3x text-info"></i>
                                            <div class="text-right text-dark">
                                                <h5>Visiters</h5>
                                                <h3>550</h3>
                                            </div>
                                        </div>
                                    </div>
                       <div class="card-footer text-dark">
                        <i class="fas fa-spinner fa-pulse text-warning mr-3"></i>
                           <span>Updating</span>
                       </div>
                                </div>
                     
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <i class="fas fa-clipboard fa-3x text-info"></i>
                                                <div class="text-right text-dark">
                                                    <h5>Notes</h5>
                                                    <h3>20</h3>
                                                </div>
                                            </div>
                                        </div>
                           <div class="card-footer text-dark">
                            <i class="fas fa-spinner fa-pulse text-danger mr-3"></i>
                               <span>Updating</span>
                           </div>
                                    </div>
                     
                            </div>
             </div>
         </div>
     </div>
 </div>
     
    </section>

      <!---End of Cards-->
      <!--table-->
<section>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row align-items-center">
                    
                <div class="col-xl-6 col-12">
        
       
                         </div>
                </div>
            </div>
        </div>
    </div>
</section>

      <!--End of table-->
      <!---Quick post-->
      <section>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                      <div class="row">
                            <div class="col-xl-6 col-12">
                                    <h4 class="text-white p-3 mb-3">Tasks.</h4>
                                    <div class="container-fluid bg-1">
                                        <div class="row py-3 mb-4 task-border align-items-center">
                                            <div class="col-1">
                                                <input type="checkbox" checked>
                                
                                            </div>
                                            <div class="col-sm-9 col-8">
                                               Add products , and their descriptions.
                                                        
                                            </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-info mr-2">
                                </i></a>
                                            </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-info">
                                </i></a>
                                     </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid bg-2">
                                      <div class="row py-3 mb-4 task-border align-items-center">
                                          <div class="col-1">
                                              <input type="checkbox" checked>
                                
                                          </div>
                                          <div class="col-sm-9 col-8">
                                             Delete users .
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-info mr-2">
                                </i></a>
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-info">
                                </i></a>
                                   </div>
                                      </div>
                                  </div>
                                  <div class="container-fluid bg-3">
                                      <div class="row py-3 mb-4 task-border align-items-center">
                                          <div class="col-1">
                                              <input type="checkbox" checked>
                                
                                          </div>
                                          <div class="col-sm-9 col-8">
                                              Update and delete products with descriptions. 
                                            
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-info mr-2">
                                </i></a>
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-info">
                                </i></a>
                                   </div>
                                      </div>
                                  </div>
                                  <div class="container-fluid bg-4">
                                      <div class="row py-3 mb-4 task-border align-items-center">
                                          <div class="col-1">
                                              <input type="checkbox" checked>
                                
                                          </div>
                                          <div class="col-sm-9 col-8">
                                             Check payments , and add categories .
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Edit"
                                data-placement="top">
                                <i class="fas fa-edit fa-lg text-info mr-2">
                                </i></a>
                                          </div>
                                <div class="col-1">
                                <a href="#"data-toggle="tooltip" title="Delete"
                                data-placement="top">
                                <i class="fas fa-trash-alt fa-lg text-info">
                                </i></a>
                                   </div>
                                      </div>
                                  </div>
                                  </div>
                                  <!---End of Task List-->
            <!---Quick Post--->                      
         <div class="col-xl-6 mt-5">
            <div class="card rounded">
             <div class="card-body">
                 <h5 class="text-dark text-center mb-4">
                     Quick Status Post
                   </h5>
                <ul class="list-inline text-center py-3">
                 <li class="list-inline-item">
                     <a href="#"> <i class="fas fa-pencil-alt text-info"></i>
                    <span class="h6 text-dark">Status</span>
                    </a>
                    </li>
                    <li class="list-inline-item mr-4">
                            <a href="#"> <i class="fas fa-camera text-info"></i>
                           <span class="h6 text-dark">Photo</span>
                           </a>
                           </li>
                           <li class="list-inline-item mr-4">
                                <a href="#"> <i class="fas fa-map-marker text-info"></i>
                               <span class="h6 text-dark">Check In</span>
                               </a>
                               </li>

                      </ul>
                      <form>
                          <div class="form-group">
                              <input type="text" class="form-control py-2 mb-3" 
                              placeholder="Your Status">
                              <button type="button" class="btn btn-block text-uppercase 
                              font-weight-bold text-light bg-button py-2 mb-5">Submit Post</button>
                          </div>
                      </form>
                      <div class="row align-items-center mb-5">
                          <div class="col-6">
                              <div class="card bg-light">
                                  <i class="far fa-calendar-alt fa-8x
                                  text-info d-block m-auto py-3"></i>
                                  <div class="card-body">
                           <p class="card-text text-center font-weight-bold 
                           text-uppercase">Thu,Juin 10</p>
                                  </div>
                              </div>

                          </div>
                          <div class="col-6">
                                <div class="card bg-light">
                                        <i class="far fa-clock fa-8x
                                        text-danger d-block m-auto py-3"></i>
                                        <div class="card-body">
                                 <p class="card-text text-center font-weight-bold 
                                 text-uppercase">1:45PM</p>
                                        </div>
                                    </div>
                            </div>
                      </div>

                </div>
              </div>


       </div>
           </div>
       </div>
              </div>

          </div>
      </section>
      
      <!---End of Quick post-->
      





@endsection