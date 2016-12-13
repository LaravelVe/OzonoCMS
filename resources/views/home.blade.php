@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br>
                    @permission(('admin'))
                        <p>This is visible to users with the admin role. Gets translated to
                        <code>\Entrust::role(('admin'))</code></p>
                    @endpermission

                    @permission(('manage-admins'))
                        <p>This is visible to users with the given permissions. Gets translated to
                        <code>\Entrust::can(('manage-admins'))</code>. The @ can directive is already taken by core
                        laravel authorization package, hence the @ permission directive instead.</p>
                    @endpermission

                    @ability(('admin,owner', 'create-post,edit-user'))
                        <p>This is visible to users with the given abilities. Gets translated to <code>\Entrust::ability(('admin,owner', 'create-post,edit-user'))</code></p>
                    @endability
                    <h2>Roles</h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Display Name</th>
                            <th>Description</th>
                        </tr>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->display_name }}</td>
                        <td>{{ $role->description }}</td>
                    </tr>
                    @endforeach
                    </table>
                    {!! $roles->render() !!}
                    <h2>Permission</h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Display Name</th>
                            <th>Description</th>
                        </tr>
                    @foreach ($permission as $key => $perm)
                    <tr>
                        <td>{{ $perm->name }}</td>
                        <td>{{ $perm->display_name }}</td>
                        <td>{{ $perm->description }}</td>
                    </tr>
                    @endforeach
                    </table>
                    {!! $permission->render() !!}
                    <h2>User</h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                    </table>
                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
