@extends('layouts.main-layout')

@section('content')
    <main>
        <ul>
            <li class="title">
                <h2>Employee</h2>
            </li>
            <li>
                {{$employee -> firstname}} {{$employee -> lastname}}
            </li>

            <li class="title">
                <h2>Location</h2>
            </li>
            <li>
                {{ $employee -> location -> street}}
            </li>

            <li class="title">
                <h2>Tasks</h2>
            </li>
            @foreach ($employee -> tasks as $task)
                <li>
                    {{$task -> name}}
                </li>
            @endforeach
        </ul>
    </main>
@endsection