
<div class="form-group {{ $errors->has('course_code') ? 'has-error' : '' }}">
    <label for="course_code" class="col-md-2 control-label">Course Code</label>
    <div class="col-md-10">
        <input class="form-control" name="course_code" type="text" id="course_code" value="{{ old('course_code', optional($attendance3GStudent)->course_code) }}" minlength="1" placeholder="Enter course code here...">
        {!! $errors->first('course_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
    <label for="date" class="col-md-2 control-label">Date</label>
    <div class="col-md-10">
        <input class="form-control" name="date" type="date" id="date" value="{{ old('date', optional($attendance3GStudent)->date) }}" placeholder="Enter date here...">
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('hours') ? 'has-error' : '' }}">
    <label for="hours" class="col-md-2 control-label">Hours</label>
    <div class="col-md-10">
        <input class="form-control" name="hours" type="number" id="hours" value="{{ old('hours', optional($attendance3GStudent)->hours) }}" min="-2147483648" max="2147483647" placeholder="Enter hours here...">
        {!! $errors->first('hours', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('hall') ? 'has-error' : '' }}">
    <label for="hall" class="col-md-2 control-label">Hall</label>
    <div class="col-md-10">
        <select class="form-control" id="hall" name="hall">
        	    <option value="" style="display: none;" {{ old('hall', optional($attendance3GStudent)->hall ?: '') == '' ? 'selected' : '' }} disabled selected>Select hall</option>
        	@foreach (['CUL-1' => 'CUL-1',
'CUL-2' => 'CUL-2',
'CSL' => 'CSL',
'LAB-1' => 'LAB-1'] as $key => $text)
			    <option value="{{ $key }}" {{ old('hall', optional($attendance3GStudent)->hall) == $key ? 'selected' : '' }}>
			    	{{ $text }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('hall', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('attendance_mark') ? 'has-error' : '' }}">
    <label for="attendance_mark" class="col-md-2 control-label">Attendance Mark</label>
    <div class="col-md-10">
        <select class="form-control" id="attendance_mark" name="attendance_mark">
        	    
        	@foreach ($students as $key => $student)
			    <option value="{{ $key }}" {{ old('attendance_mark', optional($attendance3GStudent)->attendance_mark) == $key ? 'selected' : '' }}>
			    	{{ $student }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('attendance_mark', '<p class="help-block">:message</p>') !!}
    </div>
</div>

