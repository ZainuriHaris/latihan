<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek umur saya</title>
</head>
<body>
    <h1>Login sesuai umur</h1>
    <hr>

    @if(session('error'))
        <div class="allert" style="color: red">
            {{session('error')}}
        </div>
    @endif
    @if($errors->any())
        <div class="allert" style="color: red">
           <ul> 
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr>
    <form action="{{route('proses')}}" method="POST">
        @csrf
        <label for="">Berapa umur kamu</label>
        <input type="number" name="umur" id="umur">
        <button type="submit">Login</button>
    </form>
</body>
</html> -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 m-4">
        
        <h1>Login sesuai umur</h1>
        <hr>

        @if(session('error'))
            <div class="allert" style="color: red">
                {{session('error')}}
            </div>
        @endif
        @if($errors->any())
            <div class="allert" style="color: red">
            <ul> 
                    @foreach ($errors->all() as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <hr>
        <form action="{{route('proses')}}" method="POST">
            @csrf
            <div class="form-grup mt-4">
                <label for="">Berapa umur kamu</label>
                <input class="form-control"type="number" name="umur" id="umur">
            </div>
            <div class="form-grup mt-4">
                <button class="btn btn-success">Cek Umur</button>
            </div>
        </form>
    </div>

</div>
@endsection