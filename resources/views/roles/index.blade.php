<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles and Permissions</title>
</head>
<body>
    <h1>Roles and Permissions</h1>

    <ul>
        @foreach ($roles as $role)
            <li>
                <strong>{{ $role->name }}</strong>
                @if ($role->permission)
                    - Permission: {{ $role->permission->name }}
                @else
                    - No permission assigned
                @endif
            </li>
        @endforeach
    </ul>

    <!-- Form to assign permission to a role -->
    <form action="{{ url('/roles/1/assign') }}" method="POST">
        @csrf
        <input type="text" name="permission_name" placeholder="Permission name" required>
        <button type="submit">Assign Permission</button>
    </form>
</body>
</html>
