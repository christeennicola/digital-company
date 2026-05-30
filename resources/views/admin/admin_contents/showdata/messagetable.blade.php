@extends('layouts.admin.admin')

@section('admin_main_content')
    <!DOCTYPE html>
    <html>

    <head>
    </head>

    <body>

        <h1 style="text-align:center;padding-top: 60px;padding-bottom:60px;">A Message Table</h1>

        <table>
            <tr>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Surnam</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Message</th>
                <th></th>
            </tr>
            <tbody id="dataTableBody">
                @if (@isset($dataToshow) and !@empty($dataToshow))
                    @foreach ($dataToshow as $info)
                        <tr>
                            <td>{{ $info->name }}</td>
                            <td>{{ $info->surname }}</td>
                            <td>{{ $info->email }}</td>
                            <td>{{ $info->message }}</td>
                            <td class="align-middle text-center" style="white-space: nowrap; width: 150px;">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <form id="delete-form-{{ $info->id }}"
                                        action="{{ route('message.destroy', $info->id) }}" method="POST"
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
