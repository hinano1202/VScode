@extends('layouts.profile')
@section('title','プロフィールの新規作成')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>Myプロフィール</h2>
        <form action="{{ action('Admin\ProfileController@create')}}" method="POST" enctype="multipart/form-data">
            
            @if (count($errors) > 0 )
            <ul>
                @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
                @endforeach
            </ul>
            @endif
            
            <div class="form-group row">
                <label class="col-md-2">氏名</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2">性別</label>
                <div class="col-md-10" id="gender-choose">
                   <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1a" value="male" >
                        <label class="form-check-label" for="gender1a">男性</label>
                    </div>
                    <div class="form-check">
                       <input class="form-check-input" type="radio" name="gender" id="gender2a" value="female">
                       <label class="form-check-label" for="gender2a">女性</label>
                    </div>
                    <div class="form-check">    
                        <input class="form-check-input" type="radio" name="gender" id="gender3a" value="none">
                        <label class="form-check-label" for="gender3a">無回答</label>
                    </div>    
                   </div>
                    </div>
               
            <div class="form-group row">
                <label class="col-md-2">趣味</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="hobby" value="{{old('hobby')}}">
                </div>
                </div>
            <div class="form-group row">
                <label class="col-md-2">自己<br>紹介</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="introduction" rows="10">{{old('introduction')}}</textarea>
                </div>
                </div>
                {{csrf_field()}}
            <input type="submit" class="btn btn-primary" value="作成">
        </form>
        </div>
    </div>    
</div>
@endsection