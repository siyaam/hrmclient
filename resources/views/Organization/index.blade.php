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
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="collapsAddEmployee">
            <div class="card card-body">

              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <!-- <div> -->

                         <div class="col-sm-12 col-md-12" style="margin-top:40px; margin-bottom:4px;">
                           <h4 class="h5">Organization Unit Detail </h4>
                         </div>
                         <form class="form-horizontal">
                           <div class="form-group">
                           <div class="form-group row">
                             <label for="name" class="col-3 col-form-label">Unit Name</label>
                              <div class="col-9">
                                <input maxlength="100" required="required" class="form-control" placeholder="Unit Name" type="text" tabindex="1">
                              </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-3 col-form-label">Organization Unit</label>
                            <div class="col-9">
                              <select class="form-control" name="country" disabled="true" tabindex="6">
                                <option>First Travel</option>
                              </select>
                             </div>
                           </div>
                            <div class="form-group row">
                              <label for="name" class="col-3 col-form-label">Registration Number if different</label>
                               <div class="col-9">
                                 <input maxlength="100" required="required" class="form-control" placeholder="Registration #" type="text" tabindex="2">
                               </div>
                             </div>
                             <div class="form-group row">
                               <label for="name" class="col-3 col-form-label">Tax Number if different</label>
                                <div class="col-9">
                                  <input maxlength="100" required="required" class="form-control" placeholder="TIN" type="text" tabindex="3">
                                </div>
                              </div>
                            <div class="form-group row">
                              <label for="mname" class="col-3 col-form-label">Email</label>
                               <div class="col-9">
                                 <input maxlength="100" required="required" class="form-control" placeholder="Email" type="text" tabindex="4">
                               </div>
                             </div>
                             <div class="form-group row">
                               <label for="lname" class="col-3 col-form-label">Contact Number</label>
                                <div class="col-9">
                                  <input maxlength="100" required="required" class="form-control" placeholder="Contact Number" type="text" tabindex="5">
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
                              <label for="photo" class="col-3 col-form-label">Logo</label>
                               <div class="col-9">
                                 <input type="file" name="photo" id="logo">
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
                  <th>Reg. Number</th>
                  <th>Tax Number</th>
                  <th>Country</th>
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
                  <td>Twin Tower Downtown</td>
                  <td>C-08343/2011</td>
                  <td>TIN12344GST</td>
                  <td>Maldives</td>
                  <td>879 8473</td>
                  <td>assist@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Diva Pvt. Ltd.</td>
                  <td>C-13343/2011</td>
                  <td>TIN12344GST</td>
                  <td>Maldives</td>
                  <td>979 1173</td>
                  <td>diva@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Twilight Investment Maldives</td>
                  <td>C-08343/2011</td>
                  <td>TIN12344GST</td>
                  <td>Maldives</td>
                  <td>879 8473</td>
                  <td>lifelife@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th>4</th>
                  <td>Twin Tower Downtown</td>
                  <td>C-3443/1999</td>
                  <td>TIN12344GST</td>
                  <td>Maldives</td>
                  <td>879 8473</td>
                  <td>assist@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td>Firt Travel Maldives Pvt. Ltd.</td>
                  <td>C-34343/2001</td>
                  <td>TIN125344GST</td>
                  <td>Maldives</td>
                  <td>879 8473</td>
                  <td>revive@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>
                <tr>
                  <th scope="row">14</th>
                  <td>RamGo India</td>
                  <td>C-08343/2011</td>
                  <td>TIN12524GST</td>
                  <td>India</td>
                  <td>879 8473</td>
                  <td>hari@sales.com</td>
                  <td>Active</td>
                  <td><i class="fa fa-times"></i> </td>
                  <td><i class="fa fa-pencil-square-o"></i> </td>

                </tr>


              </tbody>
            </table>
            <div class="col-sm-3 col-md-3">
              <small>Registered Organizations:   <span class="badge badge-default">70 </span></small>
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
