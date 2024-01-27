@extends('dashboard.layouts.app')

@section('content')
 <!-- Basic Bootstrap Table -->
 <div class="card">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-header p-3">
        <div class="d-flex justify-content-between algin-items-center">
            <h5>All users</h5>
            <div data-bs-toggle="modal" data-bs-target="#createUser" class="hover">
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
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
           @foreach ($users as $user)
                <tr class="hover">
                    <td id="id{{ $user->id }}">{{ $user->id }}</td>
                    <td id="name{{ $user->id }}">{{ $user->name }}</td>
                    <td id="email{{ $user->id }}">{{ $user->email }}</td>
                    <td>
                        <span class='btn btn-outline-primary btn-sm' id="edit{{ $user->id }}" data-bs-toggle="modal" data-bs-target="" onclick="show({{ $user->id }})">
                            <i class="fas fa-user-edit hover"></i>
                        </span>
                        <button class='btn btn-outline-danger btn-sm' form='deleteForm{{$user->id}}' onclick="return confirm('Are you sure you want to delete?')">
                            <i class="fas fa-trash"></i>
                        </button>
                        <form action="{{ route('users.destroy',$user->id) }}" id='deleteForm{{$user->id}}' method="post">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

  {{-- modal --}}

  @include('dashboard.user.modal')

  <script>

    function show(id) {
        const edit = document.querySelector("#edit" + id);
        edit.setAttribute("data-bs-target", "#editUser");
        edit.click();

        // let id = document.querySelector("#id"+id);
        // console.log(id);
    }

    function confirmAndSubmit(id) {
        console.log('hello');
        if (confirm('Are you sure you want to delete?')) {
            document.getElementById(`deleteForm{id}`).submit();
        }
    }
  </script>

@endsection
