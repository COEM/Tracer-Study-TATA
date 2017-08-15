@extends('layouts.admin')

@section('content')
<!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
        <!-- Begin: Content -->

       <div class="row">
       <div class="col-md-10 col-md-offset-1">
           <center>
                {!! $chart->html() !!}
            </center>
       </div>
       <!-- End Of Main Application -->
        
     </div>
    </section>
    {!! Charts::scripts() !!}
        {!! $chart->script() !!}
@stop
