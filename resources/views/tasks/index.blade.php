<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>
<body>
    <div class="container">
        <h1>Task List</h1>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($tasks->count())
            <ul class="list-group">
                @foreach($tasks as $task)
                    <li class="list-group-item">
                        <strong>{{ $task->title }}</strong><br>
                        <small>{{ $task->description }}</small><br>
                        <span>Status: {{ $task->completed ? '✅ Completed' : '❌ Not Completed' }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No tasks available.</p>
        @endif
    </div>
</body>
</html>
