@extends('layouts.admin.admin')
@section('admin_main_content')
    <!DOCTYPE html>
    <html>

    <head>
    </head>

    <body>

        <h1 style="text-align:center;padding-top: 60px;padding-bottom:60px;">A Setting Table</h1>

        <table>
            <tr>
                <th style="text-align: center">Key</th>
                <th style="text-align: center">Value</th>
            </tr>
            @if (@isset($dataToshow) and !@empty($dataToshow))
                @foreach ($dataToshow as $info)
                    <tr>
                        <td>{{ $info->key }}</td>
                        <td>{{ $info->value }}</td>
                    </tr>
                @endforeach
            @endif
        </table>

    </body>

    </html>
@endsection
