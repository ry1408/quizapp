@if(!empty($classList))
{{ Form::label('class', trans('Class Name')) }}
<select name="class_id" class="form-control js  " id="class_id" required="required">
    <option value="">-- Select  --</option>
    @foreach ($classList as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select>
@endif