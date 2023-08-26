@extends('layouts.app')
     
@section('content')
<div class="pageheader-section">
 <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New Entreprise</a>
            </div>
        </div>
    </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Domaine</td>
          <td>Mission</td>
          <td>Vision</td>
          <td>Photo</td>
          <td>Description</td>
         <th width="280px">Action</th>
        </tr>
        @foreach ($entreprises as $entreprise)
        <tr>
            <td>{{$entreprise->id}}</td>
            <td>{{ $entreprise->name }}</td>            
            <td>{{$entreprise->domaine}}</td>
            <td>{{$entreprise->mission}}</td>
            <td>{{$entreprise->vision}}</td>
            <td>{{$entreprise->photo}}</td>
            <td>{{$entreprise->description}}</td>
            <td>
                <form action="{{ route('index2') }}" method="POST">
                    {{-- <a class="btn btn-info" href="{{ route('users.show') }}">Show</a> --}}
                    <a class="btn btn-primary" href="{{ route('edit') }}">Edit</a> 
     
                    @csrf
                    {{-- @method('DELETE') --}}
        
                    <a class="btn btn-primary" href="{{ route('users.index') }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">Supprimer</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 </div>
</div>
        
@endsection    

