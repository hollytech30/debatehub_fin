<div wire:poll.5s >
   {{-- Success is as dangerous as failure. --}}
   <x-slot name="breadcrumbs">
        <li class="breadcrumb-item active">Users</li>
   </x-slot>
   
    {{-- data table --}}
    <div class="card-header datatable-wrapper datatable-loading sortable searchable fixed-columns">
    <div class="datatable-top">
        <div class="datatable-search">
            <input class="datatable-input" wire:model.live.debounce.300ms="search" placeholder="Search user" type="search" title="Search within table">
        </div>
        <div class="btn-group" role="group" aria-label="">
            {{-- <button type="button" class="btn btn-outline-primary">
                <i class="bi bi-filter me-1"></i>Filter
            </button> --}}

            {{-- @include('livewire.includes.bt-dropdown-form',[
                'dptitle'=>"Filter",
                ]) --}}
                <div class="flex space-x-3">
                    <div class="flex space-x-3 items-center">
                        {{-- <label class="w-40 text-sm font-medium text-gray-900">User Type :</label> --}}
                        <select wire:model.live="role"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="">Filter</option>
                            <option value="0">Member</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                </div>

            {{-- <button type="button" class="btn btn-outline-primary">
                <i class="bi bi-star me-1"></i>
            </button> --}}
            @livewire('AddNewUserModal')
        </div>
        
        
    </div>
    <div class="datatable-container">
        <table class="table datatable datatable-table">
            <thead>
                <tr>
                    <th>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                        </div>
                    </th>
                    <th data-sortable="true" aria-sort="descending" class="datatable-descending" style="width: 26.842105263157894%;">
                        <button class="datatable-sorter">
                          User
                        </button>
                    </th>
                    <th data-sortable="true" style="width: 9.157894736842104%;">
                        <button class="datatable-sorter">
                            Role
                        </button>
                    </th>
                    <th data-sortable="true" style="width: 28.52631578947368%;">
                        <button class="datatable-sorter">
                            Affliation
                        </button>
                    </th>
                    <th data-format="YYYY/DD/MM" data-sortable="true" data-type="date" style="width: 16.94736842105263%;">
                        <button class="datatable-sorter">
                            Join Date
                        </button>
                    </th>
                    <th data-sortable="true" style="width: 28.52631578947368%;">
                        <button>
                            ACTIONS
                        </button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr data-index="{{$user->id}}">
                        <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck2">
                            </div>
                        </th>
                        <td class="d-flex align-items-center">
                            <!--begin:: Avatar -->
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                <a href="/keen/demo1/../demo1/apps/user-management/users/view.html">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <img src="{{ $user->profile_photo_url }}" alt="Profile" class="rounded-circle">
                                    @endif
                                </a>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::User details-->
                            <div class="d-flex flex-column">
                                <a href="/keen/demo1/../demo1/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">
                                    {{$user->name}}
                                </a>
                                <span>{{$user->email}}</span>
                            </div>
                            <!--begin::User details-->
                        </td>
                        <td>Member</td>
                        <td>Kyambogo University</td>
                        <td>
                            <span class="badge bg-success">
                                <i class="bi bi-calendar-week me-1"></i> 
                                {{$user->created_at->format('Y-m-d')}}
                            </span>
                            <span class="badge bg-success">
                                <i class="bi bi-clock-history me-1"></i> 
                                {{$user->created_at->format('H:i:s')}}
                            </span>
                        </td>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected="">Action</option>
                                <option value="1">Edit</option>
                                <option value="2">Block</option>
                                <option value="3">Delete</option>
                            </select>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <p>No users found</p> 
                    </tr>
                @endforelse
                
            </tbody>
        </table>
        
    </div>

    <div class="datatable-bottom">
        <div class="row">
            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                <div class="dataTables_length">
                    <label>Showing 
                        <select class="form-select-sm form-select-solid">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> 
                    </label>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                {{-- <div class="dataTables_paginate paging_simple_numbers"> --}}
                    {{$users->links()}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
    
</div>
</div>
