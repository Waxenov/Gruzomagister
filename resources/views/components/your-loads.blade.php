<div>
    <ul>
        @foreach($loads as $load)
            <li>{{ $load->phone }}: {{ $load->description }}</li>
        @endforeach
    </ul>
</div>

