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
          <p><button type="button" class="btn btn-primary" data-toggle="collapse" href="#collapsAddEmployee" aria-expanded="false" aria-controls="collapsAddEmployee" ><i class="fa fa-plus" aria-hidden="true"></i> Add New Record</button></p>
        </div>
      </div>
      <div class="row d-lg-none d-md-none d-xs-block d-sm-block">
        <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:10px;">
          <p><button type="button" class="btn btn-primary btn-block" data-toggle="collapse" href="#collapsAddEmployee" aria-expanded="false" aria-controls="collapsAddEmployee" ><i class="fa fa-plus" aria-hidden="true"></i> Add New Record</button></p>
        </div>
      </div>
      <div class="btn-toolbar justify-content-between" style="margin-bottom:1rem;" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group" role="group" aria-label="First group">
          <button type="button" class="btn btn-round btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
          <input type="text" style="margin-left:8px;" class="form-control btn-round" placeholder="Search" aria-label="toolbar-btn" aria-describedby="btnGroupAddon">
        </div>
        <div class="btn-group" role="group" aria-label="ActionBtn" style="border-radius:24px;">
          <button type="button" class="btn btn-round btn-secondary" ><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
          <button type="button" class="btn btn-secondary"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
          <button type="button" class="btn btn-secondary"><i class="fa fa-th" aria-hidden="true"></i></button>
          <button type="button" class="btn btn-secondary"><i class="fa fa-list" aria-hidden="true"></i>



            </button>
            <div class="dropdown">
              <button class="btn btn-round btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-gear" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
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
                                 <input type="file" name="photo" id="emp-photo">
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
                       <!-- address -->
                       <div role="tabpanel" class="tab-pane fade" id="address">
                         <div class="col-sm-12 col-md-12" style="margin-top:40px; margin-bottom:4px;">
                           <!-- <h4 class="h5">Address Information </h4> -->
                         </div>
                         <form class="form-horizontal">
                           <div class="form-group">


                           <div class="form-group row">
                             <label for="address1" class="col-3 col-form-label">Address Line 1 (current)</label>
                              <div class="col-9">
                                <input maxlength="100" name="address1" required="required" class="form-control" placeholder="Address Line 1" type="text" tabindex="1">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="address2" class="col-3 col-form-label">Address Line 2 (current)</label>
                               <div class="col-9">
                                 <input maxlength="100" name="address2" required="required" class="form-control" placeholder="Address Line 2" type="text" tabindex="2">
                               </div>
                             </div>

                             <div class="form-group row">
                               <label for="ostal-Code" class="col-3 col-form-label">Postal Code</label>
                                <div class="col-9">
                                  <input maxlength="100" name="postalcode" required="required" class="form-control" placeholder="Postal Code" type="text" tabindex="3">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="Street" class="col-3 col-form-label">Street</label>
                                 <div class="col-9">
                                   <input maxlength="100" name="address" required="required" class="form-control" placeholder="Current Address" type="text" tabindex="4">
                                 </div>
                               </div>
                               <div class="form-group row">
                                 <label for="City" class="col-3 col-form-label">City</label>
                                  <div class="col-9">
                                    <input maxlength="100" name="city" required="required" class="form-control" placeholder="City" type="text" tabindex="5">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="state" class="col-3 col-form-label">State</label>
                                   <div class="col-9">
                                     <input maxlength="100" name="state" required="required" class="form-control" placeholder="State" type="text" tabindex="6">
                                   </div>
                                 </div>
                                 <div class="form-group row">
                                   <label for="province" class="col-3 col-form-label">Province</label>
                                    <div class="col-9">
                                      <input maxlength="100" name="address" required="required" class="form-control" placeholder="Province" type="text" tabindex="7">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                  <label for="Country" class="col-3 col-form-label">Country</label>
                                  <div class="col-9">
                                    <select class="form-control" name="nationality" tabindex="8">
                                      <option>Maldives</option>
                                      <option>Sri Lanka</option>
                                      <option>Bangladesh</option>
                                      <option>Thailand</option>
                                    </select>
                                   </div>
                                 </div>
                                 <div class="form-group row">
                                   <div class="col-sm-3 col-md-3"></div>
                                   <div class="col-sm-9 col-md-9">
                                     <div class="form-group">
                                         <div class="checkbox">
                                           <label class="form-check-label">
                                             <input type="checkbox" class="form-check-input" tabindex="9"> Permanent address same as above!
                                           </label>
                                         </div>
                                     </div>
                                   </div>
                                </div>

                                <div class="form-group row">
                                  <div class="col-sm-3 col-md-3">
                                    <p class="bg-light">PERMANENT ADDRESS</p>
                                  </div>
                                  <div class="col-sm-9 col-md-9">

                                  </div>
                               </div>

                                 <div class="form-group row">
                                   <label for="address1" class="col-3 col-form-label">Address Line 1</label>
                                    <div class="col-9">
                                      <input maxlength="100" name="address1" required="required" class="form-control" placeholder="Address Line 1" type="text" tabindex="10">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="address2" class="col-3 col-form-label">Address Line 2</label>
                                     <div class="col-9">
                                       <input maxlength="100" name="address2" required="required" class="form-control" placeholder="Address Line 2" type="text" tabindex="11">
                                     </div>
                                   </div>

                                   <div class="form-group row">
                                     <label for="ostal-Code" class="col-3 col-form-label">Postal Code</label>
                                      <div class="col-9">
                                        <input maxlength="100" name="postalcode" required="required" class="form-control" placeholder="Postal Code" type="text" tabindex="12">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="Street" class="col-3 col-form-label">Street</label>
                                       <div class="col-9">
                                         <input maxlength="100" name="address" required="required" class="form-control" placeholder="Current Address" type="text" tabindex="13">
                                       </div>
                                     </div>
                                     <div class="form-group row">
                                       <label for="City" class="col-3 col-form-label">City</label>
                                        <div class="col-9">
                                          <input maxlength="100" name="city" required="required" class="form-control" placeholder="City" type="text" tabindex="14">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="state" class="col-3 col-form-label">State</label>
                                         <div class="col-9">
                                           <input maxlength="100" name="state" required="required" class="form-control" placeholder="State" type="text" tabindex="15">
                                         </div>
                                       </div>
                                       <div class="form-group row">
                                         <label for="province" class="col-3 col-form-label">Province</label>
                                          <div class="col-9">
                                            <input maxlength="100" name="address" required="required" class="form-control" placeholder="Current Address" type="text" tabindex="16">
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="Country" class="col-3 col-form-label">Country</label>
                                        <div class="col-9">
                                          <select class="form-control" name="nationality" tabindex="17">
                                            <option>Maldives</option>
                                            <option>Sri Lanka</option>
                                            <option>Bangladesh</option>
                                            <option>Thailand</option>
                                          </select>
                                         </div>
                                       </div>
                         <hr/>
                         <div class="row d-none d-xs-none d-sm-none d-md-block d-lg-block">
                           <div class="col-sm-3 col-md-3 col-lg-3"></div>
                           <div class="col-md-3 col-lg-9 ml-lg-auto">
                             <button class="btn btn-default" type="button" tabindex="18"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                             <button class="btn btn-primary " type="button" tabindex="19"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                           </div>
                           <br/>
                           <br/>
                        </div>
                        <!-- mobile btn -->
                        <div class="row d-lg-none d-md-none d-xs-block d-sm-block">
                          <div class="col-sm-12 col-xs-12">
                            <button class="btn btn-primary btn-block" type="button" tabindex="18"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                            <button class="btn btn-default btn-block" type="button" tabindex="19"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                          </div>
                        </div>
                        <!-- mobile btn end -->
                       </div>
                         </form>
                       </div>
                       <!-- end address -->

                       <div role="tabpanel" class="tab-pane" id="contact">
                         <!-- contact block -->
                         <div class="col-sm-12 col-md-12" style="margin-top:40px; margin-bottom:4px;">

                         </div>
                         <form class="form-horizontal">
                           <div class="form-group">


                           <div class="form-group row">
                             <label for="phonenumber" class="col-3 col-form-label">Phone Number </label>
                              <div class="col-9">
                                <input maxlength="100" name="phonenumber" required="required" class="form-control" placeholder="Phone Number" type="text" tabindex="1">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="mobilenumber" class="col-3 col-form-label">Mobile Number</label>
                               <div class="col-9">
                                 <input maxlength="100" name="mobilenumber" required="required" class="form-control" placeholder="Mobile Number" type="text" tabindex="2">
                               </div>
                             </div>

                             <div class="form-group row">
                               <label for="orgemail" class="col-3 col-form-label">Email</label>
                                <div class="col-9">
                                  <input maxlength="100" name="orgemail" required="required" class="form-control" placeholder="Work Email" type="text" tabindex="3">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="phonenumber" class="col-3 col-form-label">Personal Phone Number </label>
                                 <div class="col-9">
                                   <input maxlength="100" name="phonenumber" required="required" class="form-control" placeholder="Phone Number" type="text" tabindex="1">
                                 </div>
                               </div>
                               <div class="form-group row">
                                 <label for="mobilenumber" class="col-3 col-form-label">Personal Mobile Number</label>
                                  <div class="col-9">
                                    <input maxlength="100" name="mobilenumber" required="required" class="form-control" placeholder="Mobile Number" type="text" tabindex="2">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="personalemail" class="col-3 col-form-label">Personal Email</label>
                                   <div class="col-9">
                                     <input maxlength="100" name="personalemail" required="required" class="form-control" placeholder="Work Email" type="text" tabindex="3">
                                   </div>
                                 </div>
                                 <div class="form-group row">
                                   <label for="orgemail" class="col-3 col-form-label">Twitter <small> <em>optional</em></small></label>
                                    <div class="col-9">
                                      <input maxlength="100" name="orgemail" required="required" class="form-control" placeholder="Work Email" type="text" tabindex="3">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="orgemail" class="col-3 col-form-label">Facebook <small> <em>optional</em></small></label>
                                     <div class="col-9">
                                       <input maxlength="100" name="orgemail" required="required" class="form-control" placeholder="Work Email" type="text" tabindex="3">
                                     </div>
                                   </div>

                                   <div class="form-group row">
                                     <label for="emergphonenumber" class="col-3 col-form-label">Emergency Phone Number </label>
                                      <div class="col-9">
                                        <input maxlength="100" name="emergphonenumber" required="required" class="form-control" placeholder="Emergency Number" type="text" tabindex="1">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="mobilenumber" class="col-3 col-form-label">Emergency Mobile Number</label>
                                       <div class="col-9">
                                         <input maxlength="100" name="mobilenumber" required="required" class="form-control" placeholder="Emergency Mobile Number" type="text" tabindex="2">
                                       </div>
                                     </div>

                                     <div class="form-group row">
                                       <label for="emergencyemail" class="col-3 col-form-label">Emergency Email</label>
                                        <div class="col-9">
                                          <input maxlength="100" name="emergencyemail" required="required" class="form-control" placeholder="Emergency Email" type="text" tabindex="3">
                                        </div>
                                      </div>




                                     <hr/>
                                     <div class="row d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                       <div class="col-sm-3 col-md-3 col-lg-3"></div>
                                       <div class="col-md-3 col-lg-9 ml-lg-auto">
                                         <button class="btn btn-default" type="button" tabindex="18"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                                         <button class="btn btn-primary " type="button" tabindex="19"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                                       </div>
                                       <br/>
                                       <br/>
                                    </div>
                                    <!-- mobile btn -->
                                    <div class="row d-lg-none d-md-none d-xs-block d-sm-block">
                                      <div class="col-sm-12 col-xs-12">
                                        <button class="btn btn-primary btn-block" type="button" tabindex="18"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                        <button class="btn btn-default btn-block" type="button" tabindex="19"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                                      </div>
                                    </div>
                                    <!-- mobile btn end -->
                                   </div>
                              </form>
                             <!-- contact block end -->
                           </div>
                           <div role="tabpanel" class="tab-pane" id="employment">
                              <!-- employement block -->
                              <div class="col-sm-12 col-md-12" style="margin-top:40px; margin-bottom:4px;">
                              </div>
                              <form class="form-horizontal">
                                <div class="form-group">
                                <div class="form-group row">
                                  <label for="desig" class="col-3 col-form-label">Designation </label>
                                  <div class="col-9">
                                    <select class="form-control" name="nationality" tabindex="1">
                                      <option>Sales Exec.</option>
                                      <option>IT Officer</option>
                                      <option>Office Assistance</option>
                                      <option>Receptionist</option>
                                    </select>
                                   </div>
                                 </div>
                                 <div class="form-group row">
                                   <label for="desiglevel" class="col-3 col-form-label">Designation Level</label>
                                    <div class="col-9">
                                      <input maxlength="100" name="level" required="required" class="form-control" placeholder="Designation Level" type="text" tabindex="2">
                                    </div>
                                  </div>
                                 <div class="form-group row">
                                   <label for="hiredate" class="col-3 col-form-label">Hire Date</label>
                                    <div class="col-9">
                                      <div class='input-group date' id='startdate'>
                                          <input type='text' class="form-control" tabindex="6" />
                                          <span class="input-group-addon">
                                              <span class="fa fa-calendar"></span>
                                          </span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="orgemail" class="col-3 col-form-label">Basic Pay</label>
                                     <div class="col-9">
                                       <input maxlength="100" name="basicpay" required="required" class="form-control" placeholder="Salary" type="text" tabindex="4">
                                     </div>
                                   </div>
                                   <div class="form-group row">
                                     <label for="experiencepay" class="col-3 col-form-label">Experience Allowance</label>
                                      <div class="col-9">
                                        <input maxlength="100" name="exallowance" required="required" class="form-control" placeholder="Experience Pay" type="text" tabindex="5">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="travel" class="col-3 col-form-label">Travel Allowance</label>
                                       <div class="col-9">
                                         <input maxlength="100" name="travel" required="required" class="form-control" placeholder="Travel Pay" type="text" tabindex="6">
                                       </div>
                                     </div>
                                     <div class="form-group row">
                                       <label for="foodpay" class="col-3 col-form-label">Food Allowance</label>
                                        <div class="col-9">
                                          <input maxlength="100" name="foodpay" required="required" class="form-control" placeholder="Food Pay" type="text" tabindex="7">
                                        </div>
                                      </div>

                                   <div class="form-group row">
                                     <label for="phoneallowance" class="col-3 col-form-label">Phone Allowance </label>
                                      <div class="col-9">
                                        <input maxlength="100" name="phoneallowance" required="required" class="form-control" placeholder="Phone Pay" type="text" tabindex="8">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="mobilenumber" class="col-3 col-form-label">Hire Type</label>
                                       <div class="col-9">
                                         <select class="form-control" tabindex="6">
                                           <option>Permanent</option>
                                           <option>Temporary</option>
                                           <option>Contracted</option><!-- if contracted onselect show start and end term-->
                                         </select>
                                       </div>
                                     </div>

                                     <div class="form-group row">
                                       <label for="mobilenumber" class="col-3 col-form-label">Status</label>
                                        <div class="col-9">
                                          <select class="form-control" tabindex="6">
                                            <option>Active</option>
                                            <option>Terminated</option>

                                          </select>
                                        </div>
                                      </div>
                                          <hr/>
                                          <div class="row d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                            <div class="col-sm-3 col-md-3 col-lg-3"></div>
                                            <div class="col-md-3 col-lg-9 ml-lg-auto">
                                              <button class="btn btn-default" type="button" tabindex="18"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                                              <button class="btn btn-primary " type="button" tabindex="19"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                                            </div>
                                            <br/>
                                            <br/>
                                         </div>
                                         <!-- mobile btn -->
                                         <div class="row d-lg-none d-md-none d-xs-block d-sm-block">
                                           <div class="col-sm-12 col-xs-12">
                                             <button class="btn btn-primary btn-block" type="button" tabindex="18"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                             <button class="btn btn-default btn-block" type="button" tabindex="19"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                                           </div>
                                         </div>
                                         <!-- mobile btn end -->
                                        </div>
                                   </form>
                             <!-- employement block end -->
                           </div><!-- tabpane end -->
                           <div role="tabpanel" class="tab-pane" id="qualification">
                             <!-- qualification block -->
                             <div class="col-sm-12 col-md-12" style="margin-top:40px; margin-bottom:4px;">
                             </div>
                             <form class="form-horizontal">
                               <div class="form-group">
                               <div class="form-group row">
                                 <label for="education" class="col-3 col-form-label">Qualification / Education </label>
                                 <div class="col-9">
                                   <input maxlength="100" name="education" required="required" class="form-control" placeholder="Qualification" type="text" tabindex="2">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="desiglevel" class="col-3 col-form-label">University / College / School</label>
                                   <div class="col-9">
                                     <input maxlength="100" name="college" required="required" class="form-control" placeholder="University / College / School" type="text" tabindex="2">
                                   </div>
                                 </div>
                                 <div class="form-group row">
                                   <label for="lname" class="col-3 col-form-label">Started Date</label>
                                    <div class="col-9">
                                      <div class='input-group date' id='startdate'>
                                          <input type='text' class="form-control" tabindex="6" />
                                          <span class="input-group-addon">
                                              <span class="fa fa-calendar"></span>
                                          </span>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="lname" class="col-3 col-form-label">End Date</label>
                                   <div class="col-9">
                                     <div class='input-group date' id='startdate'>
                                         <input type='text' class="form-control" tabindex="6" />
                                         <span class="input-group-addon">
                                             <span class="fa fa-calendar"></span>
                                         </span>
                                     </div>
                                   </div>
                               </div>
                               <div class="form-group row">
                               <label for="Country" class="col-3 col-form-label">Country</label>
                               <div class="col-9">
                                 <select class="form-control" name="nationality" tabindex="17">
                                   <option>Maldives</option>
                                   <option>Sri Lanka</option>
                                   <option>Bangladesh</option>
                                   <option>Thailand</option>
                                 </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                  <label for="hiredate" class="col-3 col-form-label">Accredited</label>
                                   <div class="col-9">
                                     <select class="form-control" tabindex="6">
                                       <option>Yes</option> <!-- if accredited then date -->
                                       <option>No</option>

                                     </select>
                                   </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="hiredate" class="col-3 col-form-label">Certificate Level</label>
                                      <div class="col-9">
                                        <select class="form-control" tabindex="6">
                                          <option>Level 1</option> <!-- if accredited then date -->
                                          <option>Level 2</option>
                                          <option>Level 3</option>
                                          <option>Level 4</option>
                                          <option>Level 5</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="certificate" class="col-3 col-form-label">Certificate</label>
                                     <div class="col-9">
                                       <input type="file" name="certificate" id="certificate">
                                     </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="transcript" class="col-3 col-form-label">Transcripts</label>
                                     <div class="col-9">
                                       <input type="file" name="transcript" id="certificate">
                                     </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="reference" class="col-3 col-form-label">Reference Documents</label>
                                     <div class="col-9">
                                       <input type="file" name="reference" id="certificate">
                                     </div>
                                  </div>
                                 <hr/>
                                 <div class="row d-none d-xs-none d-sm-none d-md-block d-lg-block">
                                   <div class="col-sm-3 col-md-3 col-lg-3"></div>
                                   <div class="col-md-3 col-lg-9 ml-lg-auto">
                                     <button class="btn btn-default" type="button" tabindex="18"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                                     <button class="btn btn-primary " type="button" tabindex="19"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save  </button>
                                   </div>
                                   <br/>
                                   <br/>
                                </div>
                                <!-- mobile btn -->
                                <div class="row d-lg-none d-md-none d-xs-block d-sm-block">
                                  <div class="col-sm-12 col-xs-12">
                                    <button class="btn btn-primary btn-block" type="button" tabindex="18"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                    <button class="btn btn-default btn-block" type="button" tabindex="19"> <i class="fa fa-times" aria-hidden="true"></i> Cancel  </button>
                                  </div>
                                </div>
                                <!-- mobile btn end -->
                               </div>
                          </form>

                           </div><!-- tabpane end -->
                     </div><!-- tab content end -->

                </div>
              </div>
        </div>
      </div>

    <div class="row">
      <div class="col">
        <div class="dt-toolbar">
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="dataTables_filter">
              <label>
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                </label>
                <input class="form-control" name="search" type="text">

            </div>
            sfsdf
          </div>
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="dataTables_filter">
              <label>

                </label>
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input class="form-control" name="search" type="text">

            </div>
            <!-- <div class="col-auto"> -->
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2 mb-sm-0">
        <div class="input-group-addon">@</div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
      </div>
    <!-- </div> -->

          </div>

        </div>
      </div>

      <div class="col-md-12 col-sm-12 col-lg-12">

        <div class="card">
          <div class="card-body">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Department</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>0101</td>
                  <td>Mohamed Sultan</td>
                  <td>Sales Officer</td>
                  <td>Sales  Marketing</td>
                  <td>879 8473</td>
                  <td>assist@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>0102</td>
                  <td>Noordeen Ali</td>
                  <td>Sales Exec</td>
                  <td>Sales & Marketing</td>
                  <td>779 1173</td>
                  <td>assist@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>0103</td>
                  <td>Faisal Sattar</td>
                  <td>Exective Officer</td>
                  <td>Human Resources</td>
                  <td>879 8473</td>
                  <td>lifelife@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th>4</th>
                  <td>0104</td>
                  <td>Ziyad Abdul Hakeem</td>
                  <td>Administration</td>
                  <td>Administration</td>
                  <td>879 8473</td>
                  <td>assist@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td>0101</td>
                  <td>shuaib Hass Sultan</td>
                  <td>Sales Officer</td>
                  <td>Sales Marketing</td>
                  <td>879 8473</td>
                  <td>assist@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">14</th>
                  <td>0101</td>
                  <td>Ali Acram Mohamed</td>
                  <td>mantenance Manager</td>
                  <td>rester@rstart</td>
                  <td>879 8473</td>
                  <td>assist@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>


              </tbody>
            </table>
            <div class="col-sm-3 col-md-3">
              <small>Total Employees:   <span class="badge badge-default">120 </span></small>
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
