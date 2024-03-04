<div>
    <ul>
        @foreach($loads as $load)
            <li>{{ $load->name }}: {{ $load->description }}</li>
        @endforeach
    </ul>
</div>

