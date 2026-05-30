@extends('layouts.user.usermessageshow')

@section('main_user')
    <!DOCTYPE html>
    <html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ app()->getLocale() }}">

    <head>
        <style>
            table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td,
            th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #ddd;
            }

            th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }

            .button {
                background-color: #04AA6D;
            }

            .button1 {
                background-color: red;
            }

            .button,
            .button1 {
                color: white;
                font-weight: bold;
                text-decoration: none !important;
                border-radius: 20px;
                padding: 0 15px;
                display: inline-flex !important;
                align-items: center;
                justify-content: center;
                height: 35px;
                border: none;
                line-height: 1;
                white-space: nowrap;
                font-size: 14px;
            }

            .button:hover,
            .button1:hover {
                color: white;
            }

            .button1 {
                padding: 12px;
                margin-left: 5px;
            }
        </style>
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
            @if (@isset($dataToshow) and !@empty($dataToshow))
                @foreach ($dataToshow as $info)
                    <tr>
                        <td>{{ $info->name }}</td>
                        <td>{{ $info->surname }}</td>
                        <td>{{ $info->email }}</td>
                        <td>{{ $info->message }}</td>
                        <td class="align-middle text-center" style="white-space: nowrap; width: 150px;">
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="{{ route('user-contact.edit', $info->id) }}"
                                    class="btn btn-primary btn-sm text-white d-flex align-items-center justify-content-center"
                                    style="padding: 5px 15px; border-radius: 20px; font-size: 14px; text-decoration: none;">
                                    Update
                                </a>
                                <form id="delete-form-{{ $info->id }}"
                                    action="{{ route('user-contact-destroy', $info->id) }}" method="POST"
                                    class="m-0 p-0 d-inline" onsubmit="return confirmDelete(event, this)">
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
        </table>

    </body>

    </html>

@endsection
