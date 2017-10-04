@extends('_layouts.app')

@section('content')
<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Tables</h2>
    </div>
  </header>
  <!-- Breadcrumb-->
  <ul class="breadcrumb">
    <div class="container-fluid">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Tables</li>
    </div>
  </ul>
<section class="tables">
  <div class="container-fluid">


      <div class="row d-none d-xs-none d-sm-none d-md-block d-lg-block">
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:10px;">
          <p><button type="button" class="btn btn-primary" data-toggle="collapse" href="#collapsAddNew" aria-expanded="false" aria-controls="collapseAddNew" ><i class="fa fa-plus" aria-hidden="true"></i> Add New Record</button></p>
        </div>
      </div>
      <div class="row d-lg-none d-md-none d-xs-block d-sm-block">
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:10px;">
          <p><button type="button" class="btn btn-primary btn-block" data-toggle="collapse" href="#collapseAddNew" aria-expanded="false" aria-controls="collapsAddNew" ><i class="fa fa-plus" aria-hidden="true"></i> Add New Record</button></p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="collapsAddNew">
            <div class="card card-body">
              <div class="row">
                <div class="col-sm-12 col-md-12 top-bot">
                      <h4 class="h5">Add Location </h4>
                         <form class="">
                           <div class="form-group">
                           <div class="form-group row">
                             <label for="name" class="col-3 col-form-label">Designation Name</label>
                              <div class="col-9">
                                <input maxlength="100" name="name" required="required" class="form-control" placeholder="Designation Name" type="text" tabindex="1">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="name" class="col-3 col-form-label">Designation Pay</label>
                               <div class="col-9">
                                 <input maxlength="100" name="salary" required="required" class="form-control" placeholder="Designation Pay" type="text" tabindex="1">
                               </div>
                             </div>
                            <div class="form-group row">
                              <label for="address2" class="col-3 col-form-label">Designation For</label>
                               <div class="col-9">
                                 <input maxlength="100" name="organizationid" required="required" readonly="readonly" value="ABC Company Pvt. Ltd." class="form-control" placeholder="designationfor" type="text" tabindex="1">
                               </div>
                             </div>

                             <div class="form-group row">
                             <label class="col-3 col-form-label">Designation Level</label>
                             <div class="col-9">
                               <select class="form-control" name="country" tabindex="6">
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                                 <option>6</option>
                               </select>
                              </div>
                            </div>


                             <div class="form-group row">
                             <label class="col-3 col-form-label">Status</label>
                             <div class="col-9">
                               <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                  Active
                                </label>
                              </div>
                              </div>
                            </div>

                         <hr/>
                         <div class="row d-none d-xs-none d-sm-none d-md-block d-lg-block">
                           <div class="col-sm-3 col-md-3 col-lg-3"></div>
                           <div class="col-md-3 col-lg-9 ml-lg-auto">
                             <button class="btn btn-default" type="button" tabindex="13"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                             <button class="btn btn-primary " type="button" tabindex="13"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                           </div>
                           <br/>
                           <br/>
                        </div>
                        <!-- mobile btn -->
                        <div class="row d-lg-none d-md-none d-xs-block d-sm-block">
                          <div class="col-sm-12 col-xs-12">
                            <button class="btn btn-primary btn-block" type="button" tabindex="13"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                            <button class="btn btn-default btn-block" type="button" tabindex="13"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                          </div>
                        </div>
                        <!-- mobile btn end -->
                       </div>
                    </form>
                </div>
              </div>
        </div>
      </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card">
          <div class="card-body">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Salary</th>
                  <th>Level</th>
                  <th>Created Date</th>
                  <th>Created User</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Sales & Marketing Manager</td>
                  <td>12933.00</td>
                  <td>2</td>
                  <td>12.09.2015</td>
                  <td class="avatar-sm"> <img src="{{ asset('img/avatar-3.jpg') }}" height="30" width="30" alt="..." class="img-fluid rounded-circle"> <a href="" data-toggle="modal" data-target="#flipFlop"> Cristine Felonali (69)</a></td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Sales & Marketing Assistance</td>
                  <td>122933.00</td>
                  <td>2</td>
                  <td>12.09.2015</td>
                  <td class="avatar-sm"> <img src="{{ asset('img/avatar-3.jpg') }}" height="30" width="30" alt="..." class="img-fluid rounded-circle"> <a href="" data-toggle="modal" data-target="#flipFlop"> Marinda Manilane (48)</a></td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Accounting Officer</td>
                  <td>12933.00</td>
                  <td>2</td>
                  <td>22.08.2015</td>
                  <td class="avatar-sm"> <img src="{{ asset('img/avatar-3.jpg') }}" height="30" width="30" alt="..." class="img-fluid rounded-circle"> <a href="" data-toggle="modal" data-target="#flipFlop"> Sousona Sisse Al (13)</a></td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Operation Executive</td>
                  <td>10933.00</td>
                  <td>2</td>
                  <td>9.05.2015</td>
                  <td class="avatar-sm"> <img src="{{ asset('img/avatar-3.jpg') }}" height="30" width="30" alt="..." class="img-fluid rounded-circle"> <a href="" data-toggle="modal" data-target="#flipFlop"> Aishath Manilia (78)</a></td>

                  <td><span  class="badge badge-warning"> In Active </span</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>


              </tbody>
            </table>
            <div class="col-sm-3 col-md-3">
              <small>Total Active Designation:   <span class="badge badge-default">27 </span></small>
            </div>
            <div class="col-sm-3 col-md-3">
            </div>
            <div class="col-sm-3 col-md-3">
            </div>
          </div>

        </div>
      </div>



    </div>


    <!-- The modal -->
<div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm " role="document">
      <div class="modal-content text-center">

        		<div class="col-sm-12 col-md-12">

                    <!-- <div class="card hovercard"> -->
                    <div class="row">
                      <div class="col-sm-12 profile-modal bg-primary">
                        <div class="avatar-sm">
                              <img src="{{ asset('img/avatar-3.jpg') }}" alt="..." class="img-fluid rounded-circle">
                        </div>
                      </div>
                    </div>
                        <div class="profile-info">
                            <div class="name">
                                <a target="_blank" href="">Eden Sophie Mann</a>
                            </div>
                            <div class="post">Passionate designer</div>
                            <div class="post">Curious developer</div>
                            <div class="post">Tech geek</div>
                        </div>
                        <div class="bottom">
                            <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" rel="publisher"
                               href="https://plus.google.com/+ahmshahnuralam">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a class="btn btn-primary btn-sm" rel="publisher"
                               href="https://plus.google.com/shahnuralam">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                                <i class="fa fa-behance"></i>
                            </a>
                        </div>
                    <!-- </div> -->
        	</div>
<!--/.Card-->


        <!-- <div class="modal-body bg-primary text-white text-center" style="height:90%;">
        <img src="{{ asset('img/avatar-3.jpg/30') }}" alt="..." class="img-fluid rounded-circle">
        <h5 class="top-bot">Ms. Shina Mina Caroline</h5>
        <p>Director, Human Resource Management</p>
        </div> -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>




      </div>
  </div>
</div>




  </div>
</section>


@endsection
