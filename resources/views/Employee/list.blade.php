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
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <!-- <h3 class="h4">Basic Table</h3> -->

          </div>
            <div class="card-body">
              sfdsfsfdsf
            </div>
        </div>
      </div>
    </div>


      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:10px;">
          <p><button type="button" class="btn btn-primary" data-toggle="collapse" href="#collapsAddEmployee" aria-expanded="false" aria-controls="collapsAddEmployee" >New Record</button></p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="collapsAddEmployee">
            <div class="card card-body">

              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <!-- <div> -->
                     <!-- Nav tabs -->
                     <!-- <ul class="nav nav-tabs"> -->
                    <ul class="nav nav-pills">
                       <li class="nav-item"><a href="#personal" class="nav-link active" aria-controls="personal" role="tab" data-toggle="tab">Personal Info.</a></li>
                       <li class="nav-item"><a href="#address" class="nav-link" aria-controls="address" role="tab" data-toggle="tab">Address Detail</a></li>
                       <li class="nav-item"><a href="#contact" class="nav-link" aria-controls="contact" role="tab" data-toggle="tab">Contact Detail</a></li>
                       <li class="nav-item"><a href="#employment" class="nav-link" aria-controls="employment" role="tab" data-toggle="tab">Employement Detail</a></li>
                       <li class="nav-item"><a href="#qualification" class="nav-link" aria-controls="employment" role="tab" data-toggle="tab">Qualification</a></li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="tab-content" id="personal-content">
                       <div role="tabpanel" class="tab-pane active" id="personal">
                         <div class="col-sm-12 col-md-12" style="margin-top:40px; margin-bottom:4px;">
                           <h4 class="h5">Personal Informaion </h4>
                         </div>
                         <form class="form-horizontal">
                           <div class="form-group">
                           <div class="form-group row">
                             <label for="name" class="col-3 col-form-label">First Name</label>
                              <div class="col-9">
                                <input maxlength="100" required="required" class="form-control" placeholder="First Name" type="text" tabindex="1">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="mname" class="col-3 col-form-label">Middle Name</label>
                               <div class="col-9">
                                 <input maxlength="100" required="required" class="form-control" placeholder="Middle Name" type="text" tabindex="2">
                               </div>
                             </div>
                             <div class="form-group row">
                               <label for="lname" class="col-3 col-form-label">Last Name</label>
                                <div class="col-9">
                                  <input maxlength="100" required="required" class="form-control" placeholder="Last Name" type="text" tabindex="3">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lname" class="col-3 col-form-label">National ID Number</label>
                                 <div class="col-9">
                                   <input maxlength="100" required="required" class="form-control" placeholder="National ID" type="text" tabindex="4">
                                 </div>
                               </div>
                               <div class="form-group row">
                                 <label for="lname" class="col-3 col-form-label">Passport Number</label>
                                  <div class="col-9">
                                    <input maxlength="100" required="required" class="form-control" placeholder="Passport" type="text" tabindex="5">
                                  </div>
                                </div>
                              <div class="form-group row">
                                <label for="lname" class="col-3 col-form-label">Date of Birth</label>
                                 <div class="col-9">
                                   <div class='input-group date' id='datetimepicker1'>
                                       <input type='text' class="form-control" tabindex="6" />
                                       <span class="input-group-addon">
                                           <span class="glyphicon glyphicon-calendar"></span>
                                       </span>
                                   </div>
                                 </div>
                             </div>
                               <div class="form-group row">
                               <label class="col-3 col-form-label">Nationality</label>
                               <div class="col-9">
                                 <select class="form-control" name="nationality" tabindex="6">
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
                              <label class="col-3 col-form-label">Gender</label>
                              <div class="col-9">
                                <select class="form-control" name="nationality" tabindex="6">
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                               </div>
                             </div>
                             <div class="form-group row">
                             <label class="col-3 col-form-label">Marital Status</label>
                             <div class="col-9">
                               <select class="form-control" name="nationality" tabindex="6">
                                 <option>Single</option>
                                 <option>Married</option>
                               </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="photo" class="col-3 col-form-label">Photo Upload</label>
                               <div class="col-9">
                                 <input type="file" name="photo" id="exampleInputFile">
                                 <p class="help-block"><small>100px x 100px / .jpg, .png</small></p>
                               </div>
                            </div>

                         <!-- </div> -->
                         <hr/>
                         <div class="col-sm-4 col-md-4 col-sm-offset-8 col-md-offset-8" style="text-align:right;">
                           <button class="btn btn-primary pull-right" type="button" tabindex="13"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                         </div>
                         <br/>
                         <br/>
                       </div>
                         </form>
                       </div>
                       <div role="tabpanel" class="tab-pane fade" id="address">
                           <form class="">
                               <div class="col-sm-12 col-md-12">
                                 <h4 class="page-header">Address Informaion <small><a href="" data-toggle="tooltip" title="Fill all fields" ><i class="fa fa-info-circle" aria-hidden="true"></i></a></small></h4>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Current Address</label>
                                   <input maxlength="100" name="address" required="required" class="form-control" placeholder="Current Address" type="text" tabindex="1">
                                 </div>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Postal Code</label>
                                   <input maxlength="100" name="postal" required="" class="form-control" placeholder="Postal Code" type="text" tabindex="2">
                                 </div>
                               </div>
                             <div class="col-sm-6 col-md-6">
                             <div class="form-group">
                               <label class="control-label">Street</label>
                               <input maxlength="100" required="required" class="form-control" placeholder="Street" type="text" tabindex="3">
                             </div>
                             </div>
                             <div class="col-sm-6 col-md-6">
                             <div class="form-group">
                               <label class="control-label">City</label>
                               <input maxlength="100" name="city" required="required" class="form-control" placeholder="City" type="text" tabindex="4">
                             </div>
                             </div>
                             <div class="col-sm-3 col-md-3">
                               <div class="form-group">
                                 <label class="control-label">Province</label>
                                 <input maxlength="100" name="province" required="required" class="form-control" placeholder="Province" type="text" tabindex="5">
                               </div>
                             </div>
                             <div class="col-sm-3 col-md-3">
                               <div class="form-group">
                                 <label class="control-label">State</label>
                                 <input maxlength="100" name="state" required="required" class="form-control" placeholder="State" type="text" tabindex="5">
                               </div>
                             </div>
                             <div class="col-sm-6 col-md-6">
                               <div class="form-group">
                                 <label class="control-label">Country</label>
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

                             <div class="col-sm-12 col-md-12">
                               <div class="form-group">
                                   <div class="checkbox">
                                     <label>
                                       <input type="checkbox"> Permanent address same as above!
                                     </label>
                                   </div>
                               </div>
                             </div>
                             <div class="col-sm-12 col-md-12">
                               <hr/>
                             </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Permanent Address</label>
                                   <input maxlength="100" name="permanentaddress" required="required" class="form-control" placeholder="Permanent Address" type="text" tabindex="7">
                                 </div>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Postal Code</label>
                                   <input maxlength="100" name="ppostal" required="" class="form-control" placeholder="Postal Code" type="text" tabindex="8">
                                 </div>
                               </div>

                             <div class="col-sm-6 col-md-6">
                             <div class="form-group">
                               <label class="control-label">Street</label>
                               <input maxlength="100" name="pstreet" required="required" class="form-control" placeholder="Street" type="text" tabindex="9">
                             </div>
                             </div>
                             <div class="col-sm-6 col-md-6">
                             <div class="form-group">
                               <label class="control-label">City</label>
                               <input maxlength="100" name="pcity" required="required" class="form-control" placeholder="City" type="text" tabindex="10">
                             </div>
                             </div>
                             <div class="col-sm-3 col-md-3">
                               <div class="form-group">
                                 <label class="control-label">Province</label>
                                 <input maxlength="100" name="province" required="required" class="form-control" placeholder="City" type="text" tabindex="11">
                               </div>
                             </div>
                             <div class="col-sm-3 col-md-3">
                             <div class="form-group">
                               <label class="control-label">State</label>
                               <input maxlength="100" name="state" required="required" class="form-control" placeholder="State" type="text" tabindex="11">
                             </div>
                             </div>
                             <div class="col-sm-6 col-md-6">
                               <div class="form-group">
                                 <label class="control-label">Country</label>
                                 <select class="form-control" name="country" tabindex="12">
                                   <option>Maldives</option>
                                   <option>Bangladesh</option>
                                   <option>India</option>
                                   <option>Sri Lanka</option>
                                   <option>Philipines</option>
                                   <option>Thailand</option>
                                 </select>
                               </div>
                             </div>
                             <div class="col-sm-12 col-md-12">
                               <hr/>
                             </div>
                             <div class="col-sm-6 col-md-6 col-sm-offset-6 col-md-offset-6">
                               <div class="col-sm-12 col-md-12 text-right">
                                 <button class="btn btn-primary" type="button" tabindex="13"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                               </div>
                             </div>
                         </form>
                       </div>
                       <div role="tabpanel" class="tab-pane" id="contact">
                         <form>

                               <div class="col-sm-12 col-md-12">
                                 <h4 class="page-header">Contact Informaion <small><a href="" data-toggle="tooltip" title="Fill all fields" ><i class="fa fa-info-circle" aria-hidden="true"></i></a></small></h4>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Phone #</label>
                                   <input maxlength="100" required="required" class="form-control" placeholder="Phone #" type="text" tabindex="1">
                                 </div>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Mobile (Office) #</label>
                                   <input maxlength="100" required="" class="form-control" placeholder="Mobile (Office) #" type="text" tabindex="2">
                                 </div>
                               </div>


                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Phone (Home) #</label>
                                   <input maxlength="100" required="required" class="form-control" placeholder="Phone (Home) #" type="text" tabindex="1">
                                 </div>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Mobile #</label>
                                   <input maxlength="100" required="" class="form-control" placeholder="Mobile #" type="text" tabindex="2">
                                 </div>
                               </div>


                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">E-mail</label>
                                   <input maxlength="100" required="required" class="form-control" placeholder="E-mail" type="text" tabindex="1">
                                 </div>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Section E-mail</label>
                                   <input maxlength="100" required="" class="form-control" placeholder="Section E-mail" type="text" tabindex="2">
                                 </div>
                               </div>


                             <div class="col-sm-12 col-md-12">
                               <hr/>
                             </div>
                             <div class="col-sm-6 col-md-6 col-sm-offset-6 col-md-offset-6">
                               <div class="col-sm-12 col-md-12 text-right">
                                 <button class="btn btn-primary" type="button" tabindex="13"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                             </div>
                             </div>

                             </form>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="employment">

                               <div class="col-sm-12 col-md-12">
                                 <h4 class="page-header">Employment <small> <a href="" data-toggle="tooltip" title="Fill all fields" ><i class="fa fa-info-circle" aria-hidden="true"></i></a></small></h4>
                               </div>
                               <div class="col-sm-3 col-md-3">
                                   <div class="form-group">
                                     <label class="control-label">Post</label>
                                     <select class="form-control" tabindex="1">
                                       <option>Human Resource Officer</option>
                                       <option>Sales Manager</option>
                                       <option>Director General</option>
                                       <option>Cleaner</option>
                                       <option>Welder</option>
                                       <option>Machine Operator</option>
                                     </select>
                                   </div>
                               </div>
                               <div class="col-sm-3 col-md-">
                                   <label class="control-label">Hire Date:</label>
                                   <div class='input-group date' id='hiredate'>
                                       <input type='text' class="form-control" tabindex="2" />
                                       <span class="input-group-addon">
                                           <span class="glyphicon glyphicon-calendar"></span>
                                       </span>
                                   </div>
                                   <!-- refer: http://eonasdan.github.io/bootstrap-datetimepicker/Options/ -->
                               </div>
                               <div class="col-sm-3 col-md-">
                                 <div class="form-group">
                                   <label class="control-label">Basic Salary</label>
                                   <input maxlength="100" required="" class="form-control" placeholder="Basic Salary" type="text" tabindex="3">
                                 </div>
                               </div>
                               <div class="col-sm-3 col-md-">
                                 <div class="form-group">
                                   <label class="control-label">Hire Type</label>
                                   <select class="form-control" tabindex="6">
                                     <option>Permanent</option>
                                     <option>Temporary</option>
                                     <option>Contracted</option><!-- if contracted onselect show start and end term-->
                                   </select>
                                 </div>
                               </div>


                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Previous</label>
                                   <input maxlength="100" required="required" class="form-control" placeholder="Enter First Name" type="text" tabindex="1">
                                 </div>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Mobile #</label>
                                   <input maxlength="100" required="" class="form-control" placeholder="Enter Last Name" type="text" tabindex="2">
                                 </div>
                               </div>


                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">E-mail:</label>
                                   <input maxlength="100" required="required" class="form-control" placeholder="Enter First Name" type="text" tabindex="1">
                                 </div>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Section E-mail</label>
                                   <input maxlength="100" required="" class="form-control" placeholder="Enter Last Name" type="text" tabindex="2">
                                 </div>
                               </div>


                             <div class="col-sm-12 col-md-12">
                               <hr/>
                             </div>
                             <div class="col-sm-6 col-md-6 col-sm-offset-6 col-md-offset-6">
                               <div class="col-sm-12 col-md-12 text-right">
                               <button class="btn btn-primary" type="button" tabindex="13"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                             </div>
                             </div>

                           </div><!-- tabpane end -->
                           <div role="tabpanel" class="tab-pane" id="qualification">

                               <div class="col-sm-12 col-md-12">
                                 <h4 class="page-header">Education / Qiualification <small> <a href="" data-toggle="tooltip" title="Fill all fields" ><i class="fa fa-info-circle" aria-hidden="true"></i></a></small></h4>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Education</label>
                                   <input maxlength="100" required="required" class="form-control" placeholder="Education" type="text" tabindex="1">
                                 </div>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">School / College / University </label>
                                   <input maxlength="100" required="" class="form-control" placeholder="School / College / University" type="text" tabindex="2">
                                 </div>
                               </div>


                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Edu. Level</label>
                                   <select class="form-control" tabindex="6">
                                     <option>High School</option>
                                     <option>Certificate</option>
                                     <option>Degree</option>
                                     <option>Masters</option>
                                     <option>Doctorate</option>
                                     <option>Phd</option>
                                   </select>
                                 </div>
                               </div>
                               <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                   <label class="control-label">Remarks / Documents</label>
                                   <input maxlength="100" required="" class="form-control" placeholder="Remarks / Documents" type="text" tabindex="2">
                                 </div>
                               </div>


                             <div class="col-sm-12 col-md-12">
                               <hr/>
                             </div>
                             <div class="col-sm-6 col-md-6 col-sm-offset-6 col-md-offset-6">
                               <div class="col-sm-12 col-md-12 text-right">
                               <button class="btn btn-primary" type="button" tabindex="13"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                             </div>
                             </div>

                           </div><!-- tabpane end -->
                     </div><!-- tab content end -->

                </div>
              </div>





            </div>
          </div>
        </div>
      </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
              <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
              <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
           <h5>Basic Table</h5>
          </div>
          <div class="card-body">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
              <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
              <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Striped table with hover effect</h3>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter                            </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
              <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
              <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Compact Table</h3>
          </div>
          <div class="card-body">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter      </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter                                                                              </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
