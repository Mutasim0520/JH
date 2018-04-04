@extends('layouts.user')

@section('body')
    <div class="main-content-wrapper" style="background-color: whitesmoke;">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                <tr>
                    <td style="width: 40%;">Name</td>
                    <td>
                        {{$item->name}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;">Registration ID</td>
                    <td>
                        {{$item->reg_id}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;">Admission Type</td>
                    <td>
                        {{$item->admission_type}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;">Father's Name</td>
                    <td>
                        {{$item->father_name}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;">Mother's Name</td>
                    <td>
                        {{$item->mother_name}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;">Present Address</td>
                    <td>
                        {{$item->present_address}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;">Permanent Address</td>
                    <td>
                        {{$item->permanent_address}}
                    </td>
                </tr>
                <tr>
                    <td style="width: 40%;">Date of Birth</td>
                    <td>
                        {{$item->dob}}
                    </td>
                </tr><tr>
                    <td style="width: 40%;">Department/Institute</td>
                    <td>
                        {{$item->dept}}
                    </td>
                </tr><tr>
                    <td style="width: 40%;">Blood Group</td>
                    <td>
                        {{$item->bg}}
                    </td>
                </tr><tr>
                    <td style="width: 40%;">National ID Card/Passport/Birth Certificate Number</td>
                    <td>
                        {{$item->identity}}
                    </td>
                </tr><tr>
                    <td style="width: 40%;">Present Class/Year</td>
                    <td>
                        {{$item->present_address}}
                    </td>
                </tr><tr>
                    <td style="width: 40%;">Class Roll</td>
                    <td>
                        {{$item->class_role}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">University Admission Session(1st Year)</td>
                    <td>
                        {{$item->admission_session}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">Current Session</td>
                    <td>
                        {{$item->current_session}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">Residential Status</td>
                    <td>
                        {{$item->res_status}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">Building Name</td>
                    <td>
                        {{$item->building}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">Room No</td>
                    <td>
                        {{$item->room}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">Bed No</td>
                    <td>
                        {{$item->bed}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">Readmission Status</td>
                    <td>
                        {{$item->readd_status}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">Student's Mobile No</td>
                    <td>
                        {{$item->mobile}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">Student's Email Address</td>
                    <td>
                        {{$item->email}}
                    </td>
                </tr>
                </tr><tr>
                    <td style="width: 40%;">Guardian Mobile No</td>
                    <td>{{$item->g_mobile}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')

@endsection