@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-md-6">   
<div class="card" >

  <div class="card-header text-white bg-primary mb-3 " > 
    Companies
  </div>
  <div class="card-body">

    <ul class="list-group">

       @foreach($companies as $company )
        <li class="list-group-item">{{ $company-> name }}</li>
       @endforeach 
    
    </ul>

    
  </div>

  <div class="card-footer text-muted">
    2 days ago
  </div>

</div>
</div>
</div>

@endsection
