
    <div class="container">
        <h1>Lista Utilizatorilor</h1>

        <!-- Verificăm dacă există utilizatori -->
        @if($users->isEmpty())
            <p>Nu sunt utilizatori disponibili.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nume</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->status == 1 ? 'Activ' : 'Inactiv' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

