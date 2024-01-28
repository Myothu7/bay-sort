@extends('dashboard.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header p-3">
            <div class="d-flex justify-content-between algin-items-center">
                <h5>All Rooms</h5>
                <div data-bs-toggle="modal" data-bs-target="#create" class="hover">
                    <i class="fas fa-user-plus fa-2x text-primary"></i>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Content</th>
                <th>Guest</th>
                <th>Height</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                    $i = 1;
                @endphp
            @forelse ($rooms as $room)
                    <tr class="hover">
                        <td id="id{{ $room->id }}">{{ $i++ }}</td>
                        <td id="name{{ $room->id }}">{{ $room->name }}</td>
                        <td>{{ Str::of($room->content)->words(6,' ...') }}</td>
                        <td>{{ $room->guest }}</td>
                        <td>{{ $room->height }}</td>
                        <td>
                            <span class='btn btn-outline-primary btn-sm' id="edit{{ $room->id }}" data-bs-toggle="modal" data-bs-target="" onclick="show({{ $room->id }})">
                                <i class="fas fa-edit hover"></i>
                            </span>
                            <button class='btn btn-outline-danger btn-sm' form='deleteForm{{$room->id}}' data-bs-toggle="modal" data-bs-target="#delete">
                                <i class="fas fa-trash"></i>
                            </button>
                            {{-- <form action="{{ route('categories.destroy',$room->id) }}" id='deleteForm{{$category->id}}' method="post">
                                @csrf
                                @method('delete')
                            </form> --}}
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="6" class="text-muted">Empty Record</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
        </div>
    </div>
@endsection
@include('dashboard.room.modal')
