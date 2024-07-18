<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
This is create page
<form wire:submit="save"> 


    <label>
        <span>name</span>
        <input type="text" wire:modal="name">
        @error('name')<em>{{$message}}</em>@enderror
    </label>
    <label>email</label>
    <input type="text" wire:modal="email"><br />
    <label>pass</label>
    <input type="text" wire:modal="password"><br />
    <label>job</label>
    <input type="text" wire:modal="job_type"><br />
    <button type="submit">SAVE</button>
</form>
</div>
