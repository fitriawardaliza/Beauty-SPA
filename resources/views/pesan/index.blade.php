@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> {{$barang->nama_barang}} </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('images/spa-facial.jpg') }}" class="rounded mx-auto d-block" width="300" alt="">
                            <!-- <img src="{{ url('images/spa-haircut.jpg') }}" class="rounded mx-auto d-block" width="300" alt=""> -->
                        </div>
                        <div class="col-md-6">
                            <blockquote class="blockquote text-center">
                            <p class="mb-0">Beautiful skin requires commitment not a miracle</p>
                            <footer class="blockquote-footer"> Erno Lazlo <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                            <br><br><br><br><br><br><br>
                            <div>
                            <h3> Your booking was succesfully! </h3>
                            </div>
                       </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

for every beauty there is an eye somewhere to see it. for every truth there is an ear somewhere to hear it. for every love there is a heart somewhere to receive it. -marylin monroe