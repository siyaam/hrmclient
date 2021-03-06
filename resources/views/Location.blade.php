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
                           <h4 class="h5">Add Location </h4>
                         </div>
                         <form class="form-horizontal">
                           <div class="form-group">
                           <div class="form-group row">
                             <label for="name" class="col-3 col-form-label">Name</label>
                              <div class="col-9">
                                <input maxlength="100" name="name" required="required" class="form-control" placeholder="Name" type="text" tabindex="1">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="address2" class="col-3 col-form-label">Address Line 1</label>
                               <div class="col-9">
                                 <input maxlength="100" name="address1" required="required" class="form-control" placeholder="Address Line 1" type="text" tabindex="1">
                               </div>
                             </div>
                             <div class="form-group row">
                               <label for="address2" class="col-3 col-form-label">Address Line 2</label>
                                <div class="col-9">
                                  <input maxlength="100" name="address2" required="required" class="form-control" placeholder="Address Line 2" type="text" tabindex="1">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="postal" class="col-3 col-form-label">Postal Code</label>
                                 <div class="col-9">
                                   <input maxlength="100" name="address2" required="required" class="form-control" placeholder="Postal Code" type="text" tabindex="1">
                                 </div>
                               </div>
                              <div class="form-group row">
                                <label for="city" class="col-3 col-form-label">City</label>
                                 <div class="col-9">
                                   <input maxlength="100" name="city" required="required" class="form-control" placeholder="City" type="text" tabindex="1">
                                 </div>
                               </div>
                               <div class="form-group row">
                                 <label for="state" class="col-3 col-form-label">State/Province</label>
                                  <div class="col-9">
                                    <input maxlength="100" name="state" required="required" class="form-control" placeholder="State/Province" type="text" tabindex="1">
                                  </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-3 col-form-label">Country</label>
                                <div class="col-9">
                                  <select class="form-control" name="country" tabindex="6">
                                    <option>Maldives</option>
                                    <option>Bangladesh</option>
                                    <option>India</option>
                                    <option>Sri Lanka</option>
                                    <option>Philipines</option>
                                    <option>Thailand</option>
                                  </select>
                                 </div>
                               </div>

                              <div class="form-group row">
                              <label class="col-3 col-form-label">Organization</label>
                              <div class="col-9">
                                <select class="form-control" name="organization" disabled="true" tabindex="6">
                                  <option>Very Very Fast Delivery Pvt. Ltd.</option>
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
                  <th>Name</th>
                  <th>Location</th>
                  <th>Organization</th>
                  <th>Contact</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Twin Tower Downtown Addu</td>
                  <td>Hithadhoo, Addu</td>
                  <td>Twin Tower Downtown Pvt. Ltd.</td>
                  <td>984 4345</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>North Star</td>
                  <td>Hithadhoo, Addu</td>
                  <td>North Sky Pvt. Ltd.</td>
                  <td>984 4345</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Downtown Addu</td>
                  <td>Hithadhoo, Addu</td>
                  <td>Twin Tower Downtown Pvt. Ltd.</td>
                  <td>984 4345</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Twin Tower Downtown Addu</td>
                  <td>Hithadhoo, Addu</td>
                  <td>Twin Tower Downtown Pvt. Ltd.</td>
                  <td>984 4345</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Twin Tower Down</td>
                  <td>Hithadhoo, Addu</td>
                  <td>Twin Tower Downtown Pvt. Ltd.</td>
                  <td>984 4345</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Red Army Culture</td>
                  <td>Colombo, Sri Lanka</td>
                  <td>Red Army Pvt. Ltd.</td>
                  <td>984 4345</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Haveeree Cafe</td>
                  <td>Male'</td>
                  <td>Haveeree Pvt. Ltd.</td>
                  <td>984 4345</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Northern Branch</td>
                  <td>Dhidhoo</td>
                  <td>Firman Investment Pvt. Ltd.</td>
                  <td>874 4345</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>

              </tbody>
            </table>
            <div class="col-sm-3 col-md-3">
              <small>Organization Branches:   <span class="badge badge-default">7 </span></small>
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
