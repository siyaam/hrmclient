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
                <div class="col-sm-12 col-md-12">
                  <!-- <div> -->

                         <div class="col-sm-12 col-md-12" style="margin-top:40px; margin-bottom:4px;">
                           <h4 class="h5">Add Contact Information </h4>
                         </div>
                         <form class="form-horizontal">
                           <div class="form-group">
                             <div class="form-group row">
                               <label for="employee" class="col-3 col-form-label">Employee</label>
                                <div class="col-9">
                                  <input maxlength="100" name="employid" required="required" readonly="" class="form-control" placeholder="Employee ID" type="text" tabindex="1">
                                </div>
                              </div>
                              <!-- employee address is automatically filled -->
                              <div class="form-group row">
                                <label for="employee" class="col-3 col-form-label">Employee Address</label>
                                 <div class="col-9">
                                   <!-- <input maxlength="100" name="employid" required="required" readonly="" class="form-control" placeholder="Employee ID" type="text" tabindex="1"> -->
                                   H. Five Star Logde, Kaaru Magu, 20331,
                                   Male' Maldives
                                 </div>
                               </div>
                            <div class="form-group row">
                              <label for="phone" class="col-3 col-form-label">Phone Number</label>
                               <div class="col-9">
                                 <input maxlength="100" name="phone" required="required" class="form-control" placeholder="phone" type="text" tabindex="1">
                               </div>
                             </div>
                             <div class="form-group row">
                               <label for="mobile" class="col-3 col-form-label">Mobile Number</label>
                                <div class="col-9">
                                  <input maxlength="100" name="mobile" required="required" class="form-control" placeholder="Mobile Number" type="text" tabindex="1">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-3 col-form-label">Email</label>
                                 <div class="col-9">
                                   <input maxlength="100" name="email" required="required" class="form-control" placeholder="Postal Code" type="text" tabindex="1">
                                 </div>
                               </div>

                                <div class="form-group row">
                                <label class="col-3 col-form-label">Contact Type</label>
                                <div class="col-9">
                                  <select class="form-control" name="country" tabindex="6">
                                    <option>Office</option>
                                    <option>Home</option>
                                    <option>Personal</option>
                                    <option>Emergency</option>

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





            <!-- </div>
          </div> -->
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
                  <th>Phone Number</th>
                  <th>Mobile Number</th>
                  <th>Email</th>
                  <th>Contact Type</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>333 4341</td>
                  <td>7864838</td>
                  <td>twin@twin.com</td>
                  <td>Office</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>323 3434</td>
                  <td>999 4343</td>
                  <td>tommy@tommy.com</td>
                  <td>Home</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>323 3434</td>
                  <td>999 4343</td>
                  <td>caroline@tommy.com</td>
                  <td>personal</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>323 3434</td>
                  <td>999 4343</td>
                  <td>ian@tommy.com</td>
                  <td>Emergency</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>323 3434</td>
                  <td>999 4343</td>
                  <td>tommy@tommy.com</td>
                  <td>Home</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>323 3434</td>
                  <td>999 4343</td>
                  <td>tommy@tommy.com</td>
                  <td>Home</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>


              </tbody>
            </table>
            <div class="col-sm-3 col-md-3">
              <small>Contacts:   <span class="badge badge-default">7 </span></small>
            </div>
            <div class="col-sm-3 col-md-3">
            </div>
            <div class="col-sm-3 col-md-3">
            </div>
          </div>

        </div>
      </div>



    </div>
  </div>
</section>


@endsection
