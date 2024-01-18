
<x-app-layout>
    
    <x-slot name="header">
        <div class="pagetitle">
            <h1>{{ __('User Management')}} </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('users')}}">User Manegement</a></li>
                    @if(isset($breadcrumbs))
                        {{$breadcrumbs}}
                    @else
                        <li class="breadcrumb-item active">Users</li>
                    @endif
                    
                </ol>
            </nav>
        </div>
    </x-slot>
    <div class="card">
        <div class="card-body">
            @if(isset($mainTitle))
            <div class="card-header">
                <div class="row">
                   
                        {{$mainTitle}}
                    
                </div>
            </div>
            @endif

            {{-- main content --}}
            {{$slot}}
            
        </div>
    </div>
</x-app-layout>
