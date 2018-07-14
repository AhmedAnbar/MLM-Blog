@if(count($errors) > 0)
    <ul class="list-group">
        @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
              {{ $error }}
            </li>
        @endforeach
    </ul><br>

@endif


@if(session('smsg'))
  <div class="alert alert-success">
    {{ session('smsg') }}
  </div>
@endif
@if(session('wmsg'))
  <div class="alert alert-warning">
    {{ session('wmsg') }}
  </div>
@endif

@if(session('fmsg'))
  <div class="alert alert-danger">
    {{ session('fmsg') }}
  </div>
@endif
