@extends('layouts.app')

@push('child-scripts')
    <script src="{{ asset('/js/auth/delete.js') }}"></script>
    {{-- <script>
        const password = @json($password);
    </script> --}}
@endpush

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Infomation Account') }}
                </h2>
                <div>{{ $user->name }}</div>
                <div>{{ $user->email }}</div>
            </div>
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
