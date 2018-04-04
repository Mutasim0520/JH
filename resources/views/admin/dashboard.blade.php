@extends('layouts.admin')
@section('body')
    <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>News</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>Heading</th>
                                    <th>Body</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($news as $item)
                                        <tr>
                                            <td>
                                                {{$item->headline}}
                                            </td>
                                            <td>
                                                <?php echo $item->body; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-info" href="/admin/edit/news/{{$item->id}}"> Edit</a>
                                                <a class="btn btn-danger" href="/admin/delete/news/{{$item->id}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Events</h5>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>Heading</th>
                                <th>Body</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $item)
                                <tr>
                                    <td>
                                        {{$item->headline}}
                                    </td>
                                    <td>
                                        <?php echo $item->body; ?>
                                    </td>
                                    <td>
                                        {{$item->date}}
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/admin/edit/event/{{$item->id}}"> Edit</a>
                                        <a class="btn btn-danger" href="/admin/delete/event/{{$item->id}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Notice</h5>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>Heading</th>
                                <th>Body</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notice as $item)
                                <tr>
                                    <td>
                                        {{$item->headline}}
                                    </td>
                                    <td>
                                        <?php echo $item->body; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/admin/edit/notice/{{$item->id}}"> Edit</a>
                                        <a class="btn btn-danger" href="/admin/delete/notice/{{$item->id}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Role Of Honors</h5>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($honor as $item)
                                <tr>
                                    <td>
                                        {{$item->name}}
                                    </td>
                                    <td>
                                        <img src="/uploads/images/{{$item->photo}}" style="height: 50px; width: 50px">
                                    </td>
                                    <td>
                                       {{$item->duration}}
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/admin/edit/honor/{{$item->id}}"> Edit</a>
                                        <a class="btn btn-danger" href="/admin/delete/honor/{{$item->id}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Hall Administration</h5>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Designation</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($administration as $item)
                                <tr>
                                    <td>
                                        {{$item->name}}
                                    </td>
                                    <td>
                                        <img src="/uploads/images/{{$item->photo}}" style="height: 30px; width: 30px">
                                    </td>
                                    <td>
                                        {{ucwords($item->designation)}}
                                    </td>
                                    <td>
                                        {{ucwords($item->status)}}
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="/admin/edit/administration/{{$item->id}}"> Edit</a>
                                        <a class="btn btn-danger" href="/admin/delete/administration/{{$item->id}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Students</h5>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Registration Number</th>
                                <th>Department/Institute</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($student as $item)
                                <tr>
                                    <td>
                                        {{$i}}
                                    </td>
                                    <td>
                                        {{$item->reg_id}}
                                    </td>
                                    <td>
                                        {{$item->dept}}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_{{$item->id}}">
                                           View
                                        </button>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @foreach($student as $item)
        <div class="modal inmodal fade" id="myModal_{{$item->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">{{$item->user->name}}</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <thead>
                            </thead>
                            <tbody>
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

                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>
    @endsection