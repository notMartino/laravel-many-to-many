@extends('layouts.main-layout')

@section('content')
    <main>
        <ul>
            <li class="title">
                <h2>Employees</h2>
            </li>
            @foreach ($employees as $employee)
                <li>
                    {{$employee -> firstname}} {{$employee -> lastname}}
                    <a href="{{route('detailsLink', $employee -> id)}}">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection