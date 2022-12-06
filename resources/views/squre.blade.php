@extends('layouts.headers')

@section('content')
<body style="background-color: #F5B0CB">

    <div class="container p-5 shapes">
        <h1 class="m-5 text-center">Squre Perimeter and Area</h1>

        <div class="row pt-5">
    
         <div class="col">
            <h3 class="ml-4">Side of Squre</h3>
            <input class="form-control form-control-lg txtside" type="number" placeholder="Please Enter Side length">
          </div>
    
        </div>

        <div class="row pt-3">
    
            <div class="col">
                <button type="button" class="btn btn-danger btn-lg btn-block btnarea">Area</button>
             </div>
             <div class="col">
                <button type="button" class="btn btn-success btn-lg btn-block btnparameter">Perimeter</button>
             </div>


           </div>

           <div class="row pt-3">
    
            <div class="col">
                <button type="button" class="btn btn-dark btn-lg btn-block btnclear">Clear</button>
             </div>
         


           </div>

           <div class="row pt-5">
    
            <div class="col pt-2">
                <h2 class="ml-4 text-center">Result</h3>
                <input class="form-control form-control-lg text-center result" type="text" placeholder="Your Result will be here" readonly>
             </div>
             
           </div>
    </div>

    @endsection

    @section('script')
    <script>










        //Area
        $(document).ready(function(){
          $(".btnarea").click(function(){
            var side = $(".txtside").val();
            var result = side*side;
            $(".result").val(result);
          });
        });

        //Perimeter
        $(document).ready(function(){
          $(".btnparameter").click(function(){
            var side = $(".txtside").val();
            var result = 4*side;
            $(".result").val(result);
          });
        });

        //clear
        $(document).ready(function(){
          $(".btnclear").click(function(){
            $('.txtside').val('');
            $('.result').val('');
          });
        });
        </script>
    @endsection