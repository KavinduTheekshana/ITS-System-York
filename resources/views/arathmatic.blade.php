@extends('layouts.headers')

@section('content')
<body style="background-color: #00A6A6">

    <div class="container p-2 shapes">
        <h1 class="mt-5 text-center">Arithmetic Operations</h1>

        <div class="row pt-5">
    
            <div class="col">
               <h3 class="ml-4">First Number</h3>
               <input class="form-control form-control-lg txtfirstnumber" type="number" placeholder="Please Enter Number">
             </div>



             <div class="col">
               <h3>Second Number</h3>
               <input class="form-control form-control-lg txtsecondnumber" type="number" placeholder="Please Enter Number">
             </div>
           </div>

        <div class="row pt-3">
    
            <div class="col">
                <button type="button" class="btn btn-secondary btn-lg btn-block btnplus">+</button>
             </div>
             <div class="col">
              <button type="button" class="btn btn-danger btn-lg btn-block btnminus">-</button>
          
             </div>


           </div>

           <div class="row pt-3">
    
            <div class="col">
                <button type="button" class="btn btn-warning btn-lg btn-block btnproduct">X</button>
             </div>
             <div class="col">
              <button type="button" class="btn btn-light btn-lg btn-block btndevide">/</button>
          
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










        //Plus
        $(document).ready(function(){
          $(".btnplus").click(function(){
            var first = $(".txtfirstnumber").val();
            var second = $(".txtsecondnumber").val();
            var result = first*1+second*1;
            $(".result").val(result);
          });
        });


        //Minus
        $(document).ready(function(){
          $(".btnminus").click(function(){
            var first = $(".txtfirstnumber").val();
            var second = $(".txtsecondnumber").val();
            var result = first*1-second*1;
            $(".result").val(result);
          });
        });

              //Product
              $(document).ready(function(){
          $(".btnproduct").click(function(){
            var first = $(".txtfirstnumber").val();
            var second = $(".txtsecondnumber").val();
            var result = first*second;
            $(".result").val(result);
          });
        });

              //Devide
              $(document).ready(function(){
          $(".btndevide").click(function(){
            var first = $(".txtfirstnumber").val();
            var second = $(".txtsecondnumber").val();
            var result = first/second;
            $(".result").val(result);
          });
        });

        //clear
        $(document).ready(function(){
          $(".btnclear").click(function(){
            $('.txtfirstnumber').val('');
            $('.txtsecondnumber').val('');
            $('.result').val('');
          });
        });
        </script>

        
    @endsection