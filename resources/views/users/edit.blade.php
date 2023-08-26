@extends('layouts.app')
@section('content')

<div class="pageheader-section">
<div class="container">
    <h1>Modification</h1>
   <form action="{{ route('users.edit',  $entreprise->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{ $entreprise->name }}">
            </div>
            <div class="form-group">
                <strong>Domaine:</strong>
                <input type="text" name="domaine" class="form-control" value="{{ $entreprise->domaine }}">
            </div>
            <div class="form-group">
                <strong>Date de creation:</strong>
                <input type="date" name="anne" class="form-control" value="{{ $entreprise->anne }}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mission:</strong>
                    <input type="text" name="mission" class="form-control" value="{{ $entreprise->mission }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Vision:</strong>
                    <input type="text" name="vision" class="form-control" value="{{ $entreprise->vision }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Photo:</strong>
                    <input type="file" name="photo" class="form-control" value="{{ $entreprise->photo }}">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" value="{{ $entreprise->description }}"></textarea>
            </div>
        </div>
        <div class="pull-right">
            <button type="submit">Modifier</button>
        </div>
   </form>
</div>
</div>
@endsection
