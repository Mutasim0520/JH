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