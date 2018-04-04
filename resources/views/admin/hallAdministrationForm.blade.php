@extends('layouts.admin')
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Edit</h5>
                </div>
                <div class="ibox-content">
                    <fieldset class="form-horizontal">
                        <form method="post" action="{{Route('admin.store.hallAdministration')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                        <div class="form-group"><label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="" required name="name"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Designation</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="designation" required>
                                    <option value="">Select Designation</option>
                                    <option value="provost">Provost</option>
                                    <option value="House Tutor">House Tutor</option>
                                </select>
                            </div>
                        </div>
                           <div class="form-group">
                                   <div class="col-sm-10"><label class="col-sm-2 control-label"> <input required type="radio" checked="" value="Current" id="optionsRadios1" name="status">Current</label></div>
                                   <div class="col-sm-10"><label class="col-sm-2 control-label"> <input required type="radio" value="Former" id="optionsRadios2" name="status">Former</label></div>
                           </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Photo</label>
                            <div class="col-sm-10"><input type="file" name="pic" accept="image/*"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Facebook</label>
                            <div class="col-sm-10"><input type="url" class="form-control" placeholder="" name="fb"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Twitter</label>
                            <div class="col-sm-10"><input type="url" class="form-control" placeholder="" name="twitter"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Linkdin</label>
                            <div class="col-sm-10"><input type="url" class="form-control" placeholder="" name="linkedin"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Rss</label>
                            <div class="col-sm-10"><input type="url" class="form-control" placeholder="" name="rss"></div>
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