<div class="dropdown">
  <x-dropdown align="right" width="48">
      <x-slot name="trigger">
          <button type="button" class="btn btn-outline-primary dropdown-toggle">
              <i class="bi bi-filter me-1"></i> {{$dptitle}}
          </button>
      </x-slot>

      <x-slot name="content">
          <div class="p-4">
              <div class="mb-3">
                  <label for="role" class="form-label">Role</label>
                  <select wire:model="selectedRole" class="form-select form-select-sm" aria-label="Default select example">
                      <option value="">All</option>
                      <option value="1">Admin</option>
                      <option value="2">Member</option>
                      <option value="3">Judges</option>
                  </select>
              </div>

              <div class="text-right">
                  <x-button wire:click="filterUsers">
                      Apply Filter
                  </x-button>
              </div>
          </div>
      </x-slot>
  </x-dropdown>
</div>