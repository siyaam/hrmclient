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
                           <h4 class="h5">Add Shift </h4>
                         </div>
                         <form class="form-horizontal">
                           <div class="form-group">
                             <div class="form-group row">
                               <label for="shift" class="col-3 col-form-label">Shift Name</label>
                                <div class="col-9">
                                  <input maxlength="100" name="shift" required="required" class="form-control" placeholder="Shift" type="text" tabindex="1">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="shiftfrom" class="col-3 col-form-label">Shift From-Time</label>
                                 <div class="col-9">
                                   <input maxlength="100" name="shiftfrom" required="required" class="form-control" placeholder="Start Time" type="text" tabindex="2">
                                 </div>
                               </div>
                               <div class="form-group row">
                                 <label for="shiftto" class="col-3 col-form-label">Shift To-Time</label>
                                  <div class="col-9">
                                    <input maxlength="100" name="shiftto" required="required" class="form-control" placeholder="End Time" type="text" tabindex="3">
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
                  <th>Shift Name</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Created Date</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Head Office Shift 1</td>
                  <td>08:00AM</td>
                  <td>16:00PM</td>
                  <td>01.09.2001</td>
                  <td><span  class="badge badge-warning"> In Active </span></td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Head Office Shift 2</td>
                  <td>08:00AM</td>
                  <td>16:00PM</td>
                  <td>01.09.2001</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Airport Shift 1</td>
                  <td>08:00AM</td>
                  <td>16:00PM</td>
                  <td>11.10.2016</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Night Shift 1</td>
                  <td>15:30PM</td>
                  <td>23:00PM</td>
                  <td>01.09.2001</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Head Office Shift 1</td>
                  <td>08:00AM</td>
                  <td>16:00PM</td>
                  <td>01.09.2001</td>
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
