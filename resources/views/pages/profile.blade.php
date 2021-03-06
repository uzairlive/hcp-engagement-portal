@extends('layouts.app')

@section('content')
  

     <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
         <!-- Main Content -->
         <div id="content" class="w-100">
            <div class="container-fluid pr-sm-0 pr-sm-4 pl-sm-4 pl-1 pb-2">
               <div class="row">

                  @if(session()->has('message'))
                      <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                  @endif

                  <div class="stepwizard" style="display: none;">
                     <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-3">
                           <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                           <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                           <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                           <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        </div>
                     </div>
                  </div>




                  <form role="form" class="w-100 p-2 form-submit" method="post" action="#"  enctype="multipart/form-data">
                     @csrf
                     <!-- first step -->
                     <div class="panel panel-primary setup-content mt-3" id="step-1">
                                    <div class="panel-heading mb-2">
                                         <h6 class="panel-title font-gothambook text-darkgray">General Information</h6>
                                    </div>
                                    <div class="panel-body w-100 bg-white border-radius15px d-flex flex-wrap p-3" style="box-shadow: 1px 1px 14px #cddee4;">
                                        <div class="col-sm-4 pl-2 pr-2">
                                            <div class="form-group col-sm-12 p-0">
                                                <label class="text-darkgray font-gothamlight fontsize12px">Full Name*</label>
                                                <input type="text" required="required" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray text-darkgray lineheight2px" name="fullname" value="" placeholder="Full Name" />
                                            </div>
                                            <div class="form-group col-sm-12 p-0">
                                                <label class="text-darkgray font-gothamlight fontsize12px">Location*</label>
                                                <input type="text" required="required" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray text-darkgray lineheight2px" name="location" value="" placeholder="Location" />
                                            </div>
                                        </div>
                                         <div class="col-sm-4 pl-2 pr-2">
                                             <div class="form-group col-sm-12 p-0">
                                                <label class="text-darkgray font-gothamlight fontsize12px">Speciality*</label>
                                                <input type="text" required="required" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray text-darkgray lineheight2px" name="speciality" value="" placeholder="Speciality" />
                                            </div>

                                        </div>
                                        <div class="col-sm-4 pl-2 pr-2 text-center">
                                             <label class="text-darkgray font-gothamlight fontsize12px">Profile Image </label>
                                            <div class="avatar-upload m-auto">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" name="profile_image" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview" style="background-image: url(images/userimg.png)">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="panel-heading mb-2 mt-4">
                                         <h6 class="panel-title font-gothambook text-darkgray">Contact Information</h6>
                                    </div>
                                    <div class="panel-body w-100 bg-white border-radius15px d-flex flex-wrap p-3" style="box-shadow: 1px 1px 14px #cddee4;">
                                        <div class="form-group col-sm-4">
                                            <label class="text-darkgray font-gothamlight fontsize12px">Email Address*</label>
                                            <input type="email" required="required"  value="" name ="email" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray text-darkgray lineheight2px" placeholder="Email Address" />
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="text-darkgray font-gothamlight fontsize12px">Phone Number*</label>
                                            <input type="Number" required="required" name ="phone_number" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray text-darkgray lineheight2px" placeholder="Phone Number" value="" />
                                        </div>
                                         <div class="form-group col-sm-4">
                                            <label class="text-darkgray font-gothamlight fontsize12px">Clinic Name*</label>
                                            <input type="text" required="required" name ="clinic_name" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray text-darkgray lineheight2px" placeholder="Clinic Name" />
                                        </div>

                                        <div class="form-group col-sm-8">
                                            <label class="text-dark font-gothamlight fontsize12px">Clinic Address*</label>
                                            <input type="text" required="required" name ="clinic_address" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray text-darkgray lineheight2px" placeholder="Clinic Address" />
                                        </div>

                                    </div>


                                    <div class="panel-heading mb-2 mt-4">
                                         <h6 class="panel-title font-gothambook text-darkgray">Account Information</h6>
                                    </div>
                                    <div class="panel-body w-100 bg-white border-radius15px d-flex flex-wrap p-3" style="box-shadow: 1px 1px 14px #cddee4;">
                                        <div class="form-group col-sm-4">
                                            <label class="text-darkgray font-gothamlight fontsize12px ">Old Password*</label>
                                            <input type="password"  class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray text-darkgray lineheight2px" placeholder="Old Password"/>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label class="text-darkgray font-gothamlight fontsize12px">New Password</label>
                                            <input type="password" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray text-darkgray lineheight2px" placeholder="New Password" />
                                        </div>
                                         <div class="form-group col-sm-4">
                                            <label class="text-darkgray font-gothamlight fontsize12px">PMDC Code* </label>
                                            <input type="number" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px text-darkgray" value="" placeholder="PMDC Code" />
                                        </div>
                                    </div>

                                    <div class="w-100 d-flex flex-wrap mt-5">
                                        <div class="col-sm-6 text-right pr-sm-2">
                                                <button class="btn bg-orange disabled text-white text-uppercase border-radius25px w-100 font-gothambook" style="max-width: 170px;" type="button">Back</button>
                                        </div>
                                        <div class="col-sm-6 pl-sm-2">
                                            <button class="btn bg-orange text-white nextBtn text-uppercase border-radius25px w-100 font-gothambook" style="max-width: 170px;" type="button">Next</button>
                                        </div>
                                    </div>
                                </div>
                     <!-- first step -->
                     <!-- second step -->
                     <div class="panel panel-primary setup-content" id="step-2">
                        <div class="panel-heading mb-2 mt-4">
                           <h6 class="panel-title text-darkgray font-gothambook">Education Information</h6>
                        </div>

                        <div class="panel-body w-100  d-flex flex-wrap position-relative" id="educationInfo" >
                            <div class="col-md-12 p-4 bg-white border-radius15px mb-4 pb-sm-1" style="box-shadow: 1px 1px 14px #cddee4;">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">Level of Education</label>
                                        <input type="text" required="required" name="education_information" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px text-darkgray pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Level of Education" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">Education Type</label>
                                        <input type="text" required="required" name="education_type" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px text-darkgray pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Education Type" />
                                        <!-- <select class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" name="education_type" style="height: 43px;">

                                            <option>Select Type</option>
                                            <option>Easy</option>
                                            <option>Intermediate</option>
                                            <option>Medium</option>
                                            <option>Fast</option>
                                        </select> -->
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">Field of Study</label>
                                         <input type="text" required="required" name="field_of_study" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px text-darkgray pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Field of Study" />
                                       <!--  <select class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" name="field_of_study" style="height: 43px;">

                                            <option>Select Type</option>
                                            <option>BS</option>
                                            <option>Master</option>
                                            <option>Bachelor</option>
                                            <option>F.Sd</option>
                                        </select> -->
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">School</label>
                                        <input type="text" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px text-darkgray pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="School" name="school" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">Country</label>
                                        <input type="text" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px text-darkgray pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Country" name="education_country" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">City</label>
                                        <input type="text" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px text-darkgray pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="City" name="education_city" />
                                    </div>
                                    <div class="w-100">
                                        <div class="form-group col-sm-4">
                                            <label class="text-darkgray font-gothamlight fontsize12px">Time Period</label>
                                            <label class="checkcustom fontsize12px font-gothamlight" style="color: #afafaf;">I currently go here
                                                <input type="checkbox" >
                                                <span class="checkmark"></span>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">From</label>
                                        <input type="date" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight text-darkgray fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Year" name="education_from_date" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">To</label>
                                        <input type="date" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight text-darkgray fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Year" name="education_to_date" />
                                    </div>
                                    <div class="w-100">
                                        <div class="form-group col-sm-4">
                                            <label class="checkcustom text-darkgray fontsize12px font-gothamlight" style="color: #afafaf;">I do not want to enter my education at this time
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-12 text-right d-flex justify-content-end p-0 position-relative" style="left: 16px;">
                             <a href="#" class="text-center border border-orange fontsize17px text-orange font-weight-light rounded-circle d-block" style="width: 28px; height: 28px;line-height: 1.8;" onclick="appendEducationInfo()"><i class="fa fa-plus"></i></a>
                         </div>
                            </div>

                        </div>

                        <div class="w-100 d-flex flex-wrap mt-5 stepwizard">
                           <div class="col-sm-6 text-right pr-sm-2 stepwizard-row setup-panel">
                              <div class="w-100 stepwizard-step">
                                 <a href="#step-1" class="btn bg-orange text-white text-uppercase border-radius25px w-100 font-gothambook" style="max-width: 170px;" type="button">Back</a>
                              </div>
                           </div>
                           <div class="col-sm-6 pl-sm-2">
                              <button class="btn bg-orange text-white nextBtn text-uppercase border-radius25px w-100 font-gothambook" style="max-width: 170px;" type="button">Next</button>
                           </div>
                        </div>
                     </div>
                     <!-- second step -->
                     <!-- third step -->
                     <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-heading mb-2 mt-4">
                           <h6 class="panel-title font-gothambook text-darkgray">Experience Information</h6>
                        </div>
                        <div class="panel-body w-100 d-flex flex-wrap position-relative"  id="experienceInfo">
                            <div class="col-md-12 bg-white border-radius15px p-4 mb-4 pb-sm-1" style="box-shadow: 1px 1px 14px #cddee4;">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">Title</label>
                                        <input type="text" class="border w-100 bg-gray border-radius25px text-darkgray outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Title" name="title" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">Organization </label>
                                         <input type="text" class="border w-100 bg-gray border-radius25px text-darkgray outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Organization" name="organization" />
                                       <!--  <select class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" name="organization" style="height: 43px;">

                                            <option>Select Type</option>
                                            <option>New</option>
                                            <option>World</option>
                                            <option>Classic</option>
                                            <option>Fast</option>
                                        </select> -->
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">Therapeutic Area</label>
                                        <input type="text" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight text-darkgray fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Therapeutic Area"  name="therapeutica" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">City</label>
                                        <input type="text" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight text-darkgray fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="City" name="experience_city" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">Country</label>
                                        <input type="text" required="required" class="border w-100 bg-gray border-radius25px text-darkgray outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Country" name="experience_country" />
                                    </div>
                                    <div class="w-100">
                                        <div class="form-group col-sm-4">
                                            <label class="text-darkgray font-gothamlight fontsize12px">Time Period</label>
                                            <label class="checkcustom fontsize12px font-gothamlight" for="experience_time_period" style="color: #afafaf;">I currently go here
                                                <input type="checkbox"  value="yes" id="experience_time_period">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">From</label>
                                        <input type="date" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight text-darkgray fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Year" name="experience_from_date" />
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label class="text-darkgray font-gothamlight fontsize12px">To</label>
                                        <input type="date" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight text-darkgray fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Year" name="experience_to_date" />
                                    </div>
                                    <div class="w-100">
                                        <div class="form-group col-sm-4">
                                            <label class="checkcustom fontsize12px font-gothamlight" style="color: #afafaf;">I do not want to enter my experience at this time
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-12 text-right d-flex justify-content-end p-0 position-relative" style="left: 16px;">
                                 <a href="#" class="text-center border border-orange fontsize17px text-orange font-weight-light rounded-circle d-block" style="width: 28px;height: 28px;line-height: 1.8;" onclick="appendExperienceInfo()"><i class="fa fa-plus"></i></a>
                                 </div>
                            </div>
                        </div>

                        <div class="w-100 d-flex flex-wrap mt-5 stepwizard">
                           <div class="col-sm-6 text-right pr-sm-2 stepwizard-row setup-panel">
                              <div class="w-100 stepwizard-step">
                                 <a href="#step-2" class="btn bg-orange text-white text-uppercase border-radius25px w-100 font-gothambook" style="max-width: 170px;" type="button">Back</a>
                              </div>
                           </div>
                           <div class="col-sm-6 pl-sm-2">
                              <button class="btn bg-orange border-orange text-white btn-success text-uppercase border-radius25px w-100 hoverbtn font-gothambook" style="max-width: 170px;" type="submit">Save</button>
                           </div>
                        </div>
                     </div>
                     <!-- third step -->
                  </form>
                
                            
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
         </div>
         <!-- End of Content Wrapper -->
</div>

</div>

@endsection