 
    @if(!empty($chapterList))
    {{ Form::label('class', trans('Chapter Name')) }}
    <select name="chapter_id" class="form-control js  " id="chapter_id" required="required">
        <option value="">-- Select  --</option>
        @foreach ($chapterList as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    
    
    @endif