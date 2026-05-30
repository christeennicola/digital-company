@extends('layouts.admin.admin')

@section('admin_main_content')
    <!DOCTYPE html>
    <html>

    <head>
    </head>

    <body>

        <h1 style="text-align:center;padding-top: 60px;padding-bottom:60px;">A User Table</h1>

        <table>
            <tr>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Password</th>
                <th style="text-align: center">Role</th>
                <th></th>
            </tr>
            <tbody id="dataTableBody">
                @if (@isset($dataToshow) and !@empty($dataToshow))
                    @foreach ($dataToshow as $info)
                        <tr>
                            <td>{{ $info->name }}</td>
                            <td>{{ $info->email }}</td>
                            <td>{{ $info->password }}</td>
                            <td>{{ $info->role }}</td>
                            <td class="align-middle text-center" style="white-space: nowrap; width: 150px;">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    @if ($info->id === Auth::user()->id)
                                        <a href="{{ route('user.edit', $info->id) }}" class="button">
                                            Update
                                        </a>
                                    @endif
                                    <form id="delete-form-{{ $info->id }}"
                                        action="{{ route('user.destroy', $info->id) }}" method="POST"
                                        class="m-0 p-0 d-inline"
                                        onsubmit="return confirmDelete(event, 'delete-form-{{ $info->id }}')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button1" style="border: none; cursor: pointer;">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </body>

    </html>

@endsection
