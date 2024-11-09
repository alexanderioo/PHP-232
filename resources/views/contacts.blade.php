```blade
<!-- resources/views/contacts.blade.php -->

@extends('layouts.layout')

@section('content')
    <h1>Контакты</h1>
    <ul>
        @foreach($contacts as $contact)
            <li>{{ $contact }}</li>
        @endforeach
    </ul>
@endsection
```
