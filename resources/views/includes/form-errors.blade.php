@if ($errors->any())
  <ul class="form-errors">
  @foreach ($errors->all() as $error)
    <li>
      <span>{{ $error }}</span>
    </li>
  @endforeach
  </ul>
@endif
