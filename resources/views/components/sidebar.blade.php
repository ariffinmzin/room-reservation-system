<!-- resources/views/components/sidebar.blade.php -->
<div class="col-span-2 p-4">
    <!-- Sidebar content -->
    @if(auth()->user()->role === 'admin')
        <ul class="menu bg-white rounded-box w-50">
            <li><a href="{{ route('rooms.index') }}">Room List</a></li>
            <li><a href="{{ route('rooms.create') }}">Create Room</a></li>
            <li><a href="{{ route('rooms.index', ['action' => 'update']) }}">Update Room</a></li>
            <li><a href="{{ route('rooms.index', ['action' => 'delete']) }}">Delete Room</a></li>
        </ul>
    @endif
    @if(auth()->user()->role === 'user')
        <ul class="menu bg-white rounded-box w-50">
            <li><a href="{{ route('rooms.index', ['action' => 'reserve']) }}">Reserve Room</a></li>
            <li><a href="{{ route('roomreservations.index', ['action' => 'list']) }}">Reservation List</a></li>
            <li><a href="{{ route('roomreservations.index', ['action' => 'delete']) }}">Cancel Reservation</a></li>
        </ul>
    @endif
</div>