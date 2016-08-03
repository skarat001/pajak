@extends('admin.app')

@section('content')
    <div class="container">
    @foreach ($users as $user)
    {{1}}
        {{ $user->email }}
    @endforeach
</div>

{{ $users->links() }}
@endsection