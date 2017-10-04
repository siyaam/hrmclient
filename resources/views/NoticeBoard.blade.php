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
                           <h4 class="h5">Add Noticebaord </h4>
                         </div>
                         <form class="form-horizontal">
                           <div class="form-group">
                           <div class="form-group row">
                             <label for="title" class="col-3 col-form-label">Title</label>
                              <div class="col-9">
                                <input maxlength="100" name="name" required="required" class="form-control" placeholder="Name" type="text" tabindex="1">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="desc" class="col-3 col-form-label">Description</label>
                               <div class="col-9">
                                  <textarea class="form-control" id="desc" rows="2" tabindex="2"></textarea>
                                </div>
                             </div>
                             <div class="form-group row">
                             <label class="col-3 col-form-label">Department</label>
                             <div class="col-9">
                               <select class="form-control" name="country" tabindex="3">
                                 <option>Sales & Marketing</option>
                                 <option>Operations</option>
                                 <option>Human Resource</option>
                                 <option>Accounting</option>

                               </select>
                              </div>
                            </div>
                             <div class="form-group row">
                               <label for="date" class="col-3 col-form-label">Expire Date</label>
                                <div class="col-9">
                                  <input maxlength="100" name="date" required="required" class="form-control" placeholder="Expire Date" type="text" tabindex="4">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="created" class="col-3 col-form-label">Created By</label>
                                 <div class="col-9">
                                   <input maxlength="100" name="created" required="required" class="form-control" placeholder="Created" type="text" tabindex="5">
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
                  <th>Title</th>
                  <th>Description</th>
                  <th>Expire Date</th>
                  <th>Unit</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Intall MS Office to all PCs</td>
                  <td>Upgrading productivity among organization staff</td>
                  <td>09.08.2011</td>
                  <td>Information Technology</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Email Setup</td>
                  <td>Email setup for new employee</td>
                  <td>09.08.2017</td>
                  <td>Information Technology</td>
                  <td><span  class="badge badge-danger">Expired</span></td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Register new vehicle</td>
                  <td>New vehicle registration</td>
                  <td>09.09.2017</td>
                  <td>Operations</td>
                  <td><span  class="badge badge-warning">Active</span></td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Make sales order</td>
                  <td>making a new sales order new office furniture</td>
                  <td>09.08.2011</td>
                  <td>Operations</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Transfer employee</td>
                  <td>Transfering employees as per organization regulation</td>
                  <td>23.12.2017</td>
                  <td>Human Resource</td>
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
