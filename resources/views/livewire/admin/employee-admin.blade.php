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
            <tr>
                <td>{{ $user-> status }}</td>
                <td>{{ $user-> name }}</td>
                <td>{{ $user-> job_no }}</td>
                <td>{{ $user-> job_type }}</td>
                <td>{{ $user-> email }}</td>
                <td><div>
                  @if ($user-> status === "Active")
                  {{-- View Button Here --}}
                  <button class="btn btn-outline-primary btn-sm" 
                  wire:click="delete({{ $user-> id }})"
                  wire:confirm.prompt="Are you sure you want to delete **{{ $user-> name }}** from your employee list? It is reverssible!\n\nType DELETE to confirm|DELETE">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                    </svg>
                  </button>
                    {{-- Edit Button Here --}}
                    <button class="btn btn-outline-primary btn-sm" 
                      wire:click="delete({{ $user-> id }})"
                      wire:confirm.prompt="Are you sure you want to delete **{{ $user-> name }}** from your employee list? It is reverssible!\n\nType DELETE to confirm|DELETE">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                        </svg>
                    </button>
                    {{-- Delete Button Here --}}
                    <button class="btn btn-outline-secondary btn-sm" 
                    wire:click="delete({{ $user-> id }})"
                    wire:confirm.prompt="Are you sure you want to delete **{{ $user-> name }}** from your employee list? It is reverssible!\n\nType DELETE to confirm|DELETE">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                      </svg>
                    </button>
                    @elseif ($user->status === "Pending")
                    {{-- View Button Here --}}
                    <button class="btn btn-outline-primary btn-sm" 
                    wire:click="delete({{ $user-> id }})"
                    wire:confirm.prompt="Are you sure you want to delete **{{ $user-> name }}** from your employee list? It is reverssible!\n\nType DELETE to confirm|DELETE">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                      </svg>
                    </button>
                    {{-- Approved Button Here --}}
                    <button class="btn btn-outline-success btn-sm" 
                    wire:click="delete({{ $user-> id }})"
                    wire:confirm.prompt="Are you sure you want to delete **{{ $user-> name }}** from your employee list? It is reverssible!\n\nType DELETE to confirm|DELETE">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                      <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    </button>
                    {{-- Rejected Button Here --}}
                    <button class="btn btn-outline-danger btn-sm" 
                    wire:click="delete({{ $user-> id }})"
                    wire:confirm.prompt="Are you sure you want to delete **{{ $user-> name }}** from your employee list? It is reverssible!\n\nType DELETE to confirm|DELETE">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-dash-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5"/>
                      <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    </button>
                    @else
                    {{-- Rejected Button Here --}}
                    <button class="btn btn-outline-danger btn-sm" 
                    wire:click="delete({{ $user-> id }})"
                    wire:confirm.prompt="Are you sure you want to delete **{{ $user-> name }}** from your employee list? It is reverssible!\n\nType DELETE to confirm|DELETE">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-excel" viewBox="0 0 16 16">
                        <path d="M5.18 4.616a.5.5 0 0 1 .704.064L8 7.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 8l2.233 2.68a.5.5 0 0 1-.768.64L8 8.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 8 5.116 5.32a.5.5 0 0 1 .064-.704"/>
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
                      </svg>   Delete Now
                    </button>
                  @endif
                </div></td>
            </tr>
            @endforeach
        </tbody>
      </table>
      
</div>