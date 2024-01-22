<div wire:poll.visible>
   {{-- Do your work, then step back.  --}}

    <x-slot name="breadcrumbs">
        <li class="breadcrumb-item active">Roles</li>
   </x-slot>
   <x-slot name="mainTitle">
        <div class="col">Roles</div>
        <div class="col justify-content-left">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-success">Left</button>
                <button type="button" class="btn btn-success">Middle</button>
                <button type="button" class="btn btn-success">Right</button>
            </div>
        </div>
    </x-slot>

   <div class="row row-cols-1 p-3 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
        

        @forelse ($roles as $role)
            <!--begin::Col-->
            <div class="col-md-4" wire:key={{$role->id}} >
                <!--begin::Card-->
                <div class="card card-flush h-md-100" style="box-shadow: none; border: 1px dashed grey;">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>{{$role->name}}</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-1">
                        <!--begin::Users-->
                        <div class="fw-bold text-gray-600 mb-5">Total users with this role:  {{ $role->userCount }}</div>
                        <!--end::Users-->

                        <!--begin::Permissions-->
                        <div class="d-flex flex-column text-gray-600">
                            @forelse($role->permissions as $permission)
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span> 
                                    {{$permission->name}}
                                </div> 
                            @empty
                                <p>This role has no Permissions</p>
                            @endforelse
                            
                        </div>
                        <!--end::Permissions-->
                    </div>
                    <!--end::Card body-->

                    <!--begin::Card footer-->
                    <div class="card-footer flex-wrap pt-0">
                        <div class="row">
                            {{-- <div class="col"> --}}
                                <button type="button" class="btn btn-light btn-active-primary my-1 me-2">View Role</button>
                            {{-- </div> --}}
                            {{-- <div class="col"> --}}
                                <button type="button" class="btn btn-light btn-active-light-primary my-1" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
        @empty
            <p>No roles existing</p>
        @endforelse

        {{-- new role card --}}
        @livewire('NewRoleCard' )
    </div>

</div>
