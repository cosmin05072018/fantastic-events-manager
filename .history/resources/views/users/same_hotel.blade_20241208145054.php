@extends('layouts.app') <!-- Asigură-te că layout-ul este corect -->

@section('content')

<table border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>Email</th>
            <th>Status</th>
            <th>Role</th>
            <th>Department</th>
            <th>Hotel</th>
            <th>Manager Name</th>
            <th>Company Name</th>
            <th>County</th>
            <th>Company Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->email }}</td>
                <td>{{ $user->status ? 'Active' : 'Inactive' }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->department ? $user->department->name : 'N/A' }}</td>
                <td>{{ $user->hotel ? $user->hotel->name : 'N/A' }}</td>
                <td>{{ $user->manager_name ?? 'N/A' }}</td>
                <td>{{ $user->company_name ?? 'N/A' }}</td>
                <td>{{ $user->county ?? 'N/A' }}</td>
                <td>{{ $user->company_address ?? 'N/A' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
