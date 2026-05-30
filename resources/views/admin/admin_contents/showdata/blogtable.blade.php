@extends('layouts.admin.admin')

@section('admin_main_content')
    <!DOCTYPE html>
    <html>

    <head>
    </head>

    <body>

        <h1 style="text-align:center;padding-top: 60px;padding-bottom:60px;">A Blog Table</h1>

        <table>
            <tr>
                <th style="text-align: center">Title</th>
                <th style="text-align: center">Content</th>
                <th style="text-align: center">Image</th>
                <th style="text-align: center">Author_name</th>
                <th style="text-align: center">Category</th>
                <th style="text-align: center">Published_at</th>
                <th></th>
            </tr>
            <tbody id="dataTableBody">
                @if (@isset($dataToshow) and !@empty($dataToshow))
                    @foreach ($dataToshow as $info)
                        <tr>
                            <td>{{ $info->title }}</td>
                            <td>{{ $info->content }}</td>
                            <td>
                                @if ($info->image)
                                    <img src="{{ '/storage/' . $info->image }}" width ='100' />
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>{{ $info->author_name }}</td>
                            <td>{{ $info->category }}</td>
                            <td>{{ $info->published_at }}</td>
                            <td class="align-middle text-center" style="white-space: nowrap; width: 150px;">
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <a href="{{ route('blog.edit', $info->id) }}"
                                        class="btn btn-primary btn-sm text-white d-flex align-items-center justify-content-center"
                                        style="padding: 5px 15px; border-radius: 20px; font-size: 14px; text-decoration: none;">
                                        Update
                                    </a>
                                    <form id="delete-form-{{ $info->id }}"
                                        action="{{ route('blog.destroy', $info->id) }}" method="POST"
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
