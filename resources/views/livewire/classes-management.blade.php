<div>

    <form wire:submit="save">
        <input type="text" wire:model="status">
        <input type="text" wire:model="class_name">
        <input type="text" wire:model="class_description">
        <input type="text" wire:model="class_section">
        <input type="text" wire:model="class_room">
        <input type="text" wire:model="class_subject">
     
        <button type="submit">Save</button>
    </form>

    <!-- Fetch record by ID -->
    <input type='number' wire:model="id" >
    <input type='button' value='Fetch record by ID' wire:click="fetchbyid" >
    <br/><br>

    <!-- Fetch all records -->
    <input type='button' value='Fetch all records' wire:click="fetchall">
    <br><br>

    <!-- List records -->
    <table border='1' style='border-collapse: collapse;'>
        <thead>
            <tr>
               <th>id</th>
               <th>Status</th>
               <th>Name</th>
               <th>Description</th>
               <th>Section</th>
               <th>Room</th>
               <th>Subject</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($records))
                 @foreach($records as $record)
                     <tr>
                         <td>{{ $record->id }}</td>
                         <td>{{ $record->status }}</td>
                         <td>{{ $record->class_name }}</td>
                         <td>{{ $record->class_description }}</td>
                         <td>{{ $record->class_section }}</td>
                         <td>{{ $record->class_room }}</td>
                         <td>{{ $record->class_subject }}</td>
                     </tr>
                 @endforeach
            @endif
        </tbody>
    </table>

</div>