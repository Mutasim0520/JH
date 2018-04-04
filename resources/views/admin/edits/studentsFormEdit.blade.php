@extends('layouts.admin')

@section('body')
    <div class="row">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h3 style="text-align: center;">DUCSU Election</h3>
                <h2 style="text-align: center;">Student Information Form</h2>
                <h3 style="text-align: center;">(Everyone must fill up this form)</h3>
            </div>
            <div class="ibox-content">
                <form action="/admin/edit/student/form/{{$form->id}}" method="POST">
                    {{csrf_field()}}
                    <fieldset class="form-horizontal">
                        <div class="form-group"><label class="col-sm-2 control-label">Registration ID</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="reg_id" value="{{$form->reg_id}}" required></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Admission Type</label>
                            <div class="col-sm-10">
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="admission_type" required value="Regular">Regular
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="admission_type" required value="Evening">Evening
                                </label>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Passport Size Photo</label>
                            <div class="col-sm-10"><input type="file" name="photo" accept="image/*" style="margin-bottom: 20px !important;"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Father's Name</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="father_name" value="{{$form->father_name}}" required></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Mother's Name</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="mother_name" required value="{{$form->mother_name}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Present Address</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="present_address" required value="{{$form->present_address}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Permanent Address</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="permanent_address" required value="{{$form->permanent_address}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Date of Birth</label>
                            <div class="col-sm-10"><input type="date" class="form-control" placeholder="Example: 21/03/95" name="dob" required value="{{$form->dob}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Department/Institute</label>
                            <div class="col-sm-10"><select class="form-control" name="dept" required autocomplete="on">
                                    <option value="">Select One</option>
                                    @foreach($depts as $item)
                                        <option value="{{$item}}">{{$item}}</option>
                                    @endforeach
                                </select></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Blood Group</label>
                            <div class="col-sm-10"><select class="form-control" name="bg" required autocomplete="on">
                                    <option value="">Select One</option>
                                    <option value="A(+ve)"> A(+ve)</option>
                                    <option value="B(+ve)"> B(+ve)</option>
                                    <option value="AB(+ve)"> AB(+ve)</option>
                                    <option value="O(+ve)"> O(+ve)</option>
                                    <option value="A(-ve)"> A(-ve)</option>
                                    <option value="B(-ve)"> B(-ve)</option>
                                    <option value="AB(-ve)"> AB(+ve)</option>
                                    <option value="O(-ve)"> O(-ve)</option>

                                </select></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">National ID Card/Passport/Birth Certificate Number</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="identity" required value="{{$form->identity}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Present Class/Year</label>
                            <div class="col-sm-10">
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="present_year" required value="1st Year">1st Year
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="present_year" required value="2nd Year">2nd Year
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="present_year" required value="3rd Year">3rd Year
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="present_year" required value="4th Year">4th Year
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="present_year" required value="Masters">Masters
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="present_year" required value="PhD">PhD
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="present_year" required value="MPhil">MPhil
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="present_year" required value="Others">Others
                                </label>
                            </div>
                        </div>

                        <div class="form-group"><label class="col-sm-2 control-label">Class Roll</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder=""  name="class_role" required value="{{$form->class_role}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">University Admission Session(1st Year)</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder=""  name="admission_session" required value="{{$form->admission_session}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Current Session</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder=""  name="current_session" required value="{{$form->current_session}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Residential Status</label>
                            <div class="col-sm-10">
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="res_status" value="res">Residential
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="res_status" value="db">Doubles
                                </label>
                                <label class="radio-inline" style="margin-bottom: 20px !important;">
                                    <input type="radio"  name="res_status" value="non_res">Non-residential
                                </label>
                            </div>
                        </div>
                        <div id="res_info" style="display: none">
                            <div class="form-group"><label class="col-sm-2 control-label">Building Name</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline" style="margin-bottom: 20px !important;">
                                        <input type="radio"   name="building" value="OSB">OSB(October)
                                    </label>
                                    <label class="radio-inline" style="margin-bottom: 20px !important;">
                                        <input type="radio" name="building" value="JGT">JGT(South)
                                    </label>
                                    <label class="radio-inline" style="margin-bottom: 20px !important;">
                                        <input type="radio"  name="building"  value="GCD">GCD(North)
                                    </label>
                                    <label class="radio-inline" style="margin-bottom: 20px !important;">
                                        <input type="radio" name="building" value="SCB">SCB(New-Building)
                                    </label>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Room No</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="room" value="{{$form->room}}"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Bed No</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="bed" value="{{$form->bed}}"></div>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Readmission Status</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="readd_status" value="{{$form->readd_status}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Student's Mobile No</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="mobile" required value="{{$form->mobile}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Student's Email Address</label>
                            <div class="col-sm-10"><input type="email" class="form-control" placeholder="" name="email" required value="{{$form->email}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Guardian Mobile No</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" name="g_mobile" required value="{{$form->g_mobile}}"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <p>I do hereby assure that the information provided above is true. If Any information is Proved wrong then i will not have any objection if Hall or University administration take any any action agnist me.</p>
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label"></label>
                            <div class="col-sm-10"><button type="submit" class="btn btn-lg btn-w-m btn-primary">Submit</button></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        </div>
@endsection
@section('script')
    <script>
        $('[name=res_status]').change(function () {
            var status = $('[name=res_status]:checked').val();
            if(status != 'non_res'){
                $('#res_info').show();
            }
            else {
                $('#res_info').hide();
            }
        });
        $(document).ready(function () {
            $('input:radio[name=admission_type][value='+ '{{$form->admission_type}}' +']').attr('checked', true);
            var res = '{{$form->res_status}}';
            if(res != "non_res"){
                $('#res_info').show();
                $("[name=building] option[value='{{$form->building}}']").attr("selected", true);
            }
            $('input:radio[name=res_status][value='+ '{{$form->res_status}}' +']').attr('checked', true);
            $("[name=dept] option[value='{{$form->dept}}']").attr("selected", true);
            $("[name=bg] option[value='{{$form->bg}}']").attr("selected", true);
            $("input:radio[name=present_year][value='+ '{{$form->present_year}}' +']").attr('checked', true);
        });
    </script>
@endsection