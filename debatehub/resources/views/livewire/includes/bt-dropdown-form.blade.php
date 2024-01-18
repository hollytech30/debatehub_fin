<div class="dropdown">
    {{-- {{$trigger}} --}}
    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
      <i class="bi bi-filter me-1"></i>{{$dptitle}}
    </button>
    <form class="dropdown-menu p-4">
      <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select class="form-select form-select-sm" aria-label="Default select example">
          <option selected="">All</option>
          <option value="1">Admin</option>
          <option value="2">Member</option>
          <option value="3">Judges</option>
        </select>
      </div>
    </form>
  </div>