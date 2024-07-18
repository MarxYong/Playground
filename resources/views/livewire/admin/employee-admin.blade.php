<div class="w-100 p-3">
  <div class="row g-2">
    <div class="form-floating col-md-10">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Employee List</li>
        </ol>
      </nav></div>
      <div class="form-floating col-md-2">
      <button class="btn btn-primary">Create Employee</button>
      </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Status</th>
            <th scope="col">Name</th>
            <th scope="col">Job No</th>
            <th scope="col">Role</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($employees as $user)
            <tr wire:click="toggleRead({{ $user-> id }})">
                <td>{{ $user-> status }}</td>
                <td>{{ $user-> name }}</td>
                <td>{{ $user-> job_no }}</td>
                <td>{{ $user-> job_type }}</td>
                <td>{{ $user-> email }}</td>
                <td><button type="button" 
                  wire:click="delete({{ $user-> id }})"
                  wire:confirm.prompt="Are you sure you want to delete **{{ $user-> name }}** from your employee list? It is reverssible!\n\nType DELETE to confirm|DELETE">
                    Delete
                </button></td>
            </tr>
            @endforeach
        </tbody>
      </table>
      
</div>