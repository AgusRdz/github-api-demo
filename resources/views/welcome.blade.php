@extends('layouts.main')
@section('content')
<div class="mainbody container-fluid">
    <div class="row">
        @include('includes.header')
        @include('cards.profile')
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            @include('cards.description')
            <hr>
            <div class="panel-group" id="accordion">
            @include('cards.repositories')
            <hr>
            @include('cards.followers')
            <hr>
            @include('cards.following')
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-js')
	{{ Html::script('js/jquery-3.1.1.min.js') }}
	{{ Html::script('js/bootstrap.min.js') }}
@endsection