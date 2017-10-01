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
                      <h4 class="h5">Add Address </h4>
                         <form class="">
                           <div class="form-group">
                           <div class="form-group row">
                             <label for="line1" class="col-3 col-form-label">Address Line 1</label>
                              <div class="col-9">
                                <input maxlength="100" name="line1" required="required" class="form-control" placeholder="Address Line 1" type="text" tabindex="1">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="line2" class="col-3 col-form-label">Address Line 2</label>
                               <div class="col-9">
                                 <input maxlength="100" name="line2" required="required" class="form-control" placeholder="Address Line 2" type="text" tabindex="2">
                               </div>
                             </div>
                            <div class="form-group row">
                              <label for="address2" class="col-3 col-form-label">Street</label>
                              <div class="col-9">
                                <input maxlength="100" name="street" required="required" class="form-control" placeholder="Street" type="text" tabindex="3">
                              </div>
                             </div>
                             <div class="form-group row">
                               <label for="post" class="col-3 col-form-label">Postal Code</label>
                                <div class="col-9">
                                  <input maxlength="100" name="post" required="required" class="form-control" placeholder="Postal Code" type="text" tabindex="4">
                                </div>
                              </div>

                              <!-- maldives -> city->islands -->

                             <div class="form-group row">
                             <label class="col-3 col-form-label">City</label>
                             <div class="col-6">
                               <select class="form-control" name="city" tabindex="5">
                                 <option>Male'</option>
                                 <option>Addu</option>
                                 <option>Fuvah Mulah</option>
                                 <option>Thinadhoo</option>
                               </select>
                              </div>
                              <div class="col-3">
                                <button class="btn btn-primary btn-circle " type="button" tabindex="6"> <i class="fa fa-plus" aria-hidden="true"></i> </button>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="address2" class="col-3 col-form-label">State/Province</label>
                               <div class="col-9">
                                 <input maxlength="100" name="state" required="required" class="form-control" placeholder="State" type="text" tabindex="7">
                               </div>
                             </div>


                             <div class="form-group row">
                             <label class="col-3 col-form-label">Status</label>
                             <div class="col-9">
                               <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                  active
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
                  <td>Aishath Leasha (65)</td>
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
                  <td>Aishath Leasha (65)</td>
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
                  <td>Aishath Manilia (78)</td>
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
                  <td>Aishath Manilia (78)</td>
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
  </div>
</section>


@endsection
