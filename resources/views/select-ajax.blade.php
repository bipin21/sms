<option>--- Select Exams ---</option>
@if(!empty($exams))
  @foreach($exams as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif