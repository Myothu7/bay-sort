@extends('dashboard.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header p-3">
            <div class="d-flex justify-content-between algin-items-center">
                <h5>All {{$main_category->name}}</h5>
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
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @php
                    $i = 1;
                @endphp
               @forelse ($sub_categories as $category)
                    <tr class="hover">
                        <td id="id{{ $category->id }}">{{ $i++ }}</td>
                        <td id="name{{ $category->id }}">{{ $category->name }}</td>
                        <td>
                            <span class='btn btn-outline-primary btn-sm' id="edit{{ $category->id }}" data-bs-toggle="modal" data-bs-target="" onclick="show({{ $category->id }})">
                                <i class="fas fa-edit hover"></i>
                            </span>
                            <button class='btn btn-outline-danger btn-sm' form='deleteForm{{$category->id}}' data-bs-toggle="modal" data-bs-target="#delete">
                                <i class="fas fa-trash"></i>
                            </button>
                            <a href="{{url('categories',$category->id)}}" class='btn btn-outline-warning btn-sm'>
                                <i class="fas fa-list"></i>
                            </a>
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

@include('dashboard.sub_category.modal')

<script>
    const show = (id) => {
        //
    }
</script>
