<div>
    {{-- Do your work, then step back. --}}
    <div class="ol-md-4">
        <!--begin::Card-->
        <div class="card h-md-100" style="box-shadow: none; border: 1px dashed grey;">
            <!--begin::Card body-->
            <div class="card-body d-flex flex-center">
                <!--begin::Button-->
                <button type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal" data-bs-target="#newRoleModal">
                    <!--begin::Illustration-->
                    <h1><i class="bx bx-plus"></i></h1>
                    <!--end::Illustration-->

                    <!--begin::Label-->
                    <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                    <!--end::Label-->
                </button>
                {{-- <!--begin::Button--> --}}
                {{-- modal --}}
                <div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="newRoleModalLabel">Add Role</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p class="text-center small">Enter Role details</p>
                
                            <form class="row g-3 needs-validation" novalidate="">
                                <div class="col-12">
                                  <label for="roleName" class="form-label">Role Name</label>
                                  <input type="text" name="name" class="form-control" id="roleName" required wire:model="name">
                                  @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                
                               
                
                                <div class="row m-3">

                                    <div class="col-sm-12">
                                        <label for="roleName" class="form-label">Role Permissions</label>

                                        <!-- Add this button inside the modal body -->
                                        {{-- <button wire:click="selectAllPermissions" type="button" class="btn btn-sm btn-secondary mb-3">
                                            Select All Permissions
                                        </button>    --}}

                                        <span class="badge bg-success" 
                                            wire:click="selectAllPermissions">
                                            <i class="bi bi-folder me-1"></i> 
                                            Select All
                                        </span>
                                        <span class="badge bg-danger"
                                             wire:click="selectAllPermissions">
                                            <i class="bi bi-folder-check me-1"></i> 
                                            Deselect All
                                        </span>

                                        @foreach($permissions as $permission)
                                        <div class="form-check" wire:key="{{ $permission->id }}">
                                            <input class="form-check-input" type="checkbox" 
                                            wire:model="selectedPermissions" value="{{ $permission->name }}"
                                            >
                                            <label class="form-check-label" for="gridCheck{{ $permission->id }}">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                        @endforeach
                                      
                  
                                      
                  
                                    </div>
                                  </div>
                
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Save Role</button>
                                </div>
                              </form>      
                    
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <!--begin::Card body-->
        </div>
        <!--begin::Card-->
    </div>
</div>
