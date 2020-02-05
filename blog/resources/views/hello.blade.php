@extends('layout/master')

@section('body')
<h1>hello this is my child page</h1>
<?php $a  = array(1,2,3,4);
$str = '<script>alert("aman")</script>'; ?>
<?php echo $str; ?>
{{ $str }}
{!! $str !!}
@endsection