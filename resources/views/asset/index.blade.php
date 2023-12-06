@extends('layouts.auth')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>INFORMATION-ABOUT-ASSET</h2>
            </div>
            <div class="pull-right">       
                <a class="btn btn-success" href="{{ route('assety.create') }}"> Add-Asset-Details</a>              
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
         <p>{{ $message }}</p>

        </div>
    @endif
<style>
    table {
  overflow:hidden;
  th, td {
    padding:.25em .5em;
    text-align:left;
    vertical-align:top;
  }
  th {
    background-color:#009;
    color:#fff;
  }
  td {
    background-color:#eee;
  }
  tr {
    transition:all 1s ease-in-out;
    &.slide-out {
      transform:translateX(100%);
    }
  }
}
</style>
    <table class="zigzag">
  <thead>
    <tr>
    <th>No</th>
    <th>Asset-Name</th>
    <th>Aseet-Number</th>
    <th>Aseet-Location</th>
      <th width="280px">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($asset as $asset)
    <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $asset->name }}</td>
    <td>{{ $asset->number }}</td>
    <td>{{ $asset->location }}</td>
          <td>
                <form action="{{ route('assety.destroy',$asset->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('assety.show',$asset->id) }}">Show</a>                   
                    <a class="btn btn-primary" href="{{ route('assety.edit',$asset->id) }}">Edit</a>
                 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
    </tr>
  </tbody>
  @endforeach
</table>

<script>
 const rows = Array.from(document.querySelectorAll('tr'));

function slideOut(row) {
  row.classList.add('slide-out');
}

function slideIn(row, index) {
  setTimeout(function() {
    row.classList.remove('slide-out');
  }, (index + 5) * 200);  
}

rows.forEach(slideOut);

rows.forEach(slideIn);
</script>
  
<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection

