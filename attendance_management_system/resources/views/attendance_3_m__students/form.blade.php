<div class="form-group row {{ $errors->has('course_code') ? 'has-error' : '' }}">

    <label for="course_code" class="col-lg-3 col-form-label text-lg-right">Course Code</label>
    <div class="col-lg-7">
        
        <select id="course_code" class="form-control @error('course_code') is-invalid @enderror" name="course_code">
            <option value="" style="display: none;"
                {{ old('course_code', optional($attendance3MStudent)->course_code ?: '') == '' ? 'selected' : '' }}
                disabled selected>Select courses</option>

            @foreach($course3m as $c3m)
           
            <option value="{{$c3m -> course_code}}" {{old('course_code', optional($attendance3MStudent)->course_code) == $c3m -> course_code ? 'selected':''}}>{{$c3m-> course_code}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row {{ $errors->has('date') ? 'has-error' : '' }}">
    <label for="date" class="col-lg-3 col-form-label text-lg-right">Date</label>
    <div class="col-lg-7">
        <input class="form-control" name="date" type="date" id="date"
            value="{{ old('date', optional($attendance3MStudent)->date) }}"
            placeholder="Enter date here...">
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('hours') ? 'has-error' : '' }}">
    <label for="hours" class="col-lg-3 col-form-label text-lg-right">Hours</label>
    <div class="col-lg-7">
        <input class="form-control" name="hours" type="number" id="hours"
            value="{{ old('hours', optional($attendance3MStudent)->hours) }}"
            min="-2147483648" max="2147483647" placeholder="Enter hours here...">
        {!! $errors->first('hours', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('hall') ? 'has-error' : '' }}">
    <label for="hall" class="col-lg-3 col-form-label text-lg-right">Hall</label>
    <div class="col-lg-7">
        <select class="form-control" id="hall" name="hall">
            <option value="" style="display: none;"
                {{ old('hall', optional($attendance3MStudent)->hall ?: '') == '' ? 'selected' : '' }}
                disabled selected>Select hall</option>
            @foreach(['CUL-1' => 'CUL-1',
                'CUL-2' => 'CUL-2',
                'CSL' => 'CSL',
                'LAB-1' => 'LAB-1'] as $key => $text)
                <option value="{{ $key }}"
                    {{ old('hall', optional($attendance3MStudent)->hall) == $key ? 'selected' : '' }}>
                    {{ $text }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('hall', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('attendance_mark') ? 'has-error' : '' }}">
    <label for="attendance_mark" class="col-lg-3 col-form-label text-lg-right">Attendance Mark</label>
    <div class="col-lg-9">
    @foreach($students as $student)
        <label for="{{ $student -> st_regno }}" class="col-lg-3 col-md-5 text-center list-inline-item.">
            <input id="{{ $student -> st_regno }}" class="required" name="attendance_mark[]" type="checkbox" value="{{ $student -> st_regno }}"
            {{ in_array($student -> st_regno, old('attendance_mark', optional($attendance3MStudent)->attendance_mark) ?: []) ? 'checked' : '' }}>
            {{ $student -> st_regno }}
        </label>
    @endforeach
        {!! $errors->first('attendance_mark', '<p class="help-block">:message</p>') !!}
    </div>
</div>


