@extends('layouts.app') <!-- Asigură-te că layout-ul este corect -->

@section('content')
<div class="container">
    <h1>Utilizatori din același hotel</h1>

    @if(!$users || count($users) === 0)
        <p>Nu există alți utilizatori în acest hotel.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nume</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Data înregistrării</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user['manager_name'] ?? 'N/A' }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ ucfirst($user['role']) }}</td>
                    <td>{{ $user['created_at'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
