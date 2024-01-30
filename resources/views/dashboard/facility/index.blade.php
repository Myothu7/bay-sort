@extends('dashboard.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header p-3">
            <div class="d-flex justify-content-between algin-items-center">
                <h5>All Recreational Facilities</h5>
                <div data-bs-toggle="modal" data-bs-target="#create" class="hover">
                    <i class="fa-solid fa-square-plus fa-2x text-primary"></i>
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
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                    $i = 1;
                @endphp
               @forelse ($facilities as $data)
                    <tr class="hover">
                        <td id="id{{ $data->id }}">{{ $i++ }}</td>
                        <td id="name{{ $data->id }}">{{ $data->name }}</td>
                        <td>{{ Str::of($data->content)->words(6,' ...') }}</td>
                        <td>
                            <span class='btn btn-outline-primary btn-sm' id="edit{{ $data->id }}" data-bs-toggle="modal" data-bs-target="">
                                <i class="fas fa-edit hover"></i>
                            </span>
                            <button class='btn btn-outline-danger btn-sm' form='deleteForm{{$data->id}}' data-bs-toggle="modal" data-bs-target="#delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
             
                @empty
                    <tr class="text-center">
                        <td colspan="3" class="text-muted">Empty Record</td>
                    </tr>
                @endforelse

            </tbody>
          </table>
        </div>
    </div>
@endsection

@include('dashboard.facility.modal')

