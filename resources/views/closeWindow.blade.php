@extends('layouts.master')

@section('script')
	<script>
		window.opener.location.reload();
    window.close();
	</script>
@stop
