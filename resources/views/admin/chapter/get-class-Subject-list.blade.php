{{-- <?php echo "<pre>"; print_r($subjectList);die;?> --}}
    @if(!empty($subjectList))
    {{ Form::label('class', trans('Subject Name')) }}
    <select name="subject_id" class="form-control js  " id="subject_id" required="required">
        <option value="">-- Select  --</option>
        @foreach ($subjectList as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    
    
    @endif