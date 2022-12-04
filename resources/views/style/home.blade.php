@extends('style.index')

@section('content')
 <!-- Google Fonts -->
 <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('design/style/css')}}/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('design/style/css')}}/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('design/front/css')}}/owl.carousel.css">
    <link rel="stylesheet" href="{{url('design/style/css')}}/style.css">
    <link rel="stylesheet" href="{{url('design/style/css')}}/quiz.css">
    <link rel="stylesheet" href="{{url('design/style/css')}}/responsive.css">
    @if (lang() == 'ar')
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css">
    @endif
    @if (!Auth::user()->isExamined)
        @include('style.exam.exam', compact('exam'))
    @else
        @include('style.exam.result', compact('exam'))
    @endif

@endsection
@section('scripts')
    <script>
        function exportTasks(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }
    </script>
@endsection
