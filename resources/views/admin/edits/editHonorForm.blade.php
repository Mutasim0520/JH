@extends('layouts.admin')
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Edit Role Of Honor</h5>
                </div>
                <div class="ibox-content">
                    <fieldset class="form-horizontal">
                        <form method="post" action="/admin/edit/honor/{{$honor->id}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" required name="name" value="{{$honor->name}}"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Duration</label>
                                <div class="col-sm-10"><input type="text" class="form-control" placeholder="" required name="duration" value="{{$honor->duration}}"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Photo</label>
                                <div class="col-sm-10"><input type="file" name="pic" accept="image/*"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Priority</label>
                                <div class="col-sm-10">
                                    <select name="priority" required class="form-control">
                                        <option value="">Select Priority</option>
                                        <option value="1">VVIP</option>
                                        <option value="2">VIP</option>
                                        <option value="3">IP</option>
                                        <option value="4">NP</option>
                                    </select></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Facebook</label>
                                <div class="col-sm-10"><input type="url" class="form-control" placeholder="" name="fb" value="{{$honor->fb}}"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Twitter</label>
                                <div class="col-sm-10"><input type="url" class="form-control" placeholder="" name="twitter" value="{{$honor->twitter}}"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Linkdin</label>
                                <div class="col-sm-10"><input type="url" class="form-control" placeholder="" name="linkedin" value="{{$honor->linkedin}}"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Rss</label>
                                <div class="col-sm-10"><input type="url" class="form-control" placeholder="" name="rss" value="{{$honor->rss}}"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10"><button type="submit" class="btn btn-w-m btn-primary">Submit</button></div>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.summernote').summernote();
            $('[name=priority]').val('{{$honor->priority}}');
        });
    </script>
@endsection