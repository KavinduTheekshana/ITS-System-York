@extends('layouts.headers')

@section('content')
<body>
        <div id="div1" class="color-card"> 
            <span>
                <img src="image/circle.png" alt="">
                <h1>CIRCLE</h1>
                <a class="btn btn-outline-dark" href="circle" role="button">Get Calculations</a>
            </div>
            
        </div>
        <div id="div2" class="color-card">
            <span>
                <img src="image/squre.png" alt="">
                <h1>SQURE</h1>
                <a class="btn btn-outline-dark" href="squre" role="button">Get Calculations</a>
            </div>
        </div>
        <div id="div3" class="color-card">
                <span>
                <img src="image/trangle.png" alt="">
                <h1>TRANGLE</h1>
                <a class="btn btn-outline-dark" href="trangle" role="button">Get Calculations</a>
            </div>
        </div>
        <div id="div4" class="color-card">
                <span>
                <img src="image/rectrangle.png" alt="">
                <h1>RECTRANGLE</h1>
                <a class="btn btn-outline-dark" href="rectrangle" role="button">Get Calculations</a>
            </div>
        </div>
        <div id="div5" class="color-card">
                <span>
                <img src="image/cylinder-2.png" alt="">
                <h1>CYLINDER</h1>
                <a class="btn btn-outline-dark" href="cylinder" role="button">Get Calculations</a>
            </div>
        </div>
        <div id="div6" class="color-card">
                <span>
                <img src="image/3d-cube.png" alt="">
                <h1>CUBE</h1>
                <a class="btn btn-outline-dark" href="cube" role="button">Get Calculations</a>
            </div>
        </div>
        <div id="div7" class="color-card">
                <span>
                <img src="image/cuboid-2.png" alt="">
                <h1>CUBOID</h1>
                <a class="btn btn-outline-dark" href="cuboid" role="button">Get Calculations</a>
            </div>
        </div>
        <div id="div8" class="color-card">
                <span>
                <img src="image/pyramid.png" alt="">
                <h1>PYRAMID</h1>
                <a class="btn btn-outline-dark" href="pyramid" role="button">Get Calculations</a>
            </div>
        </div>
   

        @endsection