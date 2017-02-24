<form target="_blank" role="form" @if($submit=="new") action="{{url('dashboard/reports/submit')}}" @elseif($submit=="edit") action="{{url('dashboard/reports/edit/submit')}}"@endif method="get">
@if($submit=="edit")<input type="hidden" name="id" value="{{$obj->id}}">@endif
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Report Information</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
        <div class="box-body">
             @if($obj->date)<input name="date-early" type="hidden"value="{{$obj->date}}">@endif
            <div class="form-group">
                <label for="name">Name of the patient</label>
                <input type="text" id="Name" @if($obj->name)value="{{$obj->name}}"@endif class="form-control" name="name" placeholder="Name of the patient">
            </div>
            <div class="form-group">
                <label for="Age">Age of the patient</label>
                <input type="number" min="0" @if($obj->name)value={{$obj->age}}@endif id="Age" class="form-control" name="age" placeholder="Age of the patient">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender"  name="gender" class="form-control">
                    <option>Male</option>
                    <option @if($obj->gender=="Female")selected @endif>Female</option>
                    <option @if($obj->gender=="Other")selected @endif>Other</option>
                </select>
                {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
            </div>
            <div class="form-group">
                <label for="type">Type of the report</label>
                <select id="type"  @if($obj->type)disabled @endif name="type" class="form-control" style="width: 100%;">
                    @foreach($types as $type)
                        <option @if($type->getId()==$obj->type)selected @endif value="{{$type->getId()}}">{{$type->getType()}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="type">Specimen</label>
                <select id="type" name="specimen" class="form-control" style="width: 100%;">
                    <option @if($obj->specimen=="blood")selected @endif value="blood">Blood</option>
                </select>
            </div>
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input name="date" type="text" @if($obj->date)value="{{$obj->date}}"@endif autocomplete="off" class="form-control pull-right" id="datepicker">
            </div>
        </div>
        <!-- /.box-body -->
    </div>
<!-- /.box -->