@extends('layouts.headers')

@section('content')
<body style="background-color: #f6d0b1">

    <div class="container p-5 shapes">
        <h1 class="m-5 text-center">Circle Perimeter and Area</h1>

        <div class="row pt-5">
    
         <div class="col">
            <h3 class="ml-4">Radius</h3>
            <input class="form-control form-control-lg txtradius" type="number" placeholder="Please Enter Radius">
          </div>
          <div class="col">
            <h3>Diameter</h3>
            <input class="form-control form-control-lg txtdiameter" type="number" placeholder="Please Enter Diameter">
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


$('.txtradius').on('input', function() {
    var radius = $(".txtradius").val();
    $(".txtdiameter").val(radius*2);
});

$('.txtdiameter').on('input', function() {
    var diameter = $(".txtdiameter").val();
    $(".txtradius").val(diameter/2);
});




// $(document).ready(function() {
//     $('.txtradius').change(function(){
//         var radius = $(".txtradius").val();
//         $(".txtdiameter").val(radius);
//     });
// });
    // $(document).ready(function() {
    //     $(".txtradius").keypress(function(){
    //         var radius = $(".txtradius").val();
    //         $(".txtdiameter").val(radius);

    // });





        //Area
        $(document).ready(function(){
          $(".btnarea").click(function(){
            var radius = $(".txtradius").val();
            var pi = Math.PI;
            var result = radius*radius*pi;
            $(".result").val(result);
          });
        });

        //Perimeter
        $(document).ready(function(){
          $(".btnparameter").click(function(){
            var radius = $(".txtradius").val();
            var pi = Math.PI;
            var result = 2*radius*pi;
            $(".result").val(result);
          });
        });

        //clear
        $(document).ready(function(){
          $(".btnclear").click(function(){
            $('.txtradius').val('');
            $('.txtdiameter').val('');
            $('.result').val('');
          });
        });
        </script>
    @endsection