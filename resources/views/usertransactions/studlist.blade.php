@extends('layouts.app')

@section('content')

    <fieldset>
        <table>
            <thead>
                <tr>
                    <th>Ime</th>
                    <th>Mail</th>
                    <th>Korisnicko ime</th>
                    <th>Razred</th>
                </tr>
            </thead>
            <tbody>
                @foreach(App\User::where('user_class', '!=', 'admin')->where('user_class', '!=', 'teacher')->get() as $user)
                    <tr>
                        <td>{{ $user->user_name }}</td>
                        <td>{{ $user->user_email }}</td>
                        <td>{{ $user->user_uid }}</td>
                        <td>{{ App\Classes::where('class_id', $user->user_class)->pluck('class_name') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>

@endsection