@extends('101485.Feecheck')
 
@section('content')
<div class="row">
	<h2>{{ $fee->student_no }} {{ $fee->amount }} </h2>
	<a href="/" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Home</a>
</div>
@endsection