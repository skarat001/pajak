@extends('admin.app')

@section('content')

<script type="text/javascript">
	var route={
      get:"{{URL::route('membergetnew')}}",
      idle:"{{ URL::to('/admin/member/setnonaktif/')}}",
       reset:"{{ URL::to('/admin/member/resetpass/')}}",
  };

</script>
  <meta name="_token" content="{{ csrf_token() }}"/>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Anggota Baru</h3> 
		
		</div>
		<div class="box-body">
		<div ng-controller="MainCtrl">
<div ui-grid="MemberGrid" ui-grid-pagination  class="grid"></div>
</div>
		</div>


@endsection