@extends('dashboard.layouts.app')

@section('content')
 @if ($errors->any())
 <div class="row">
    <div class="col-8"></div>
    <div class="col-4">
        <div class="alert alert-danger alert-dismissible fade show p-2" role="alert"">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
 </div>
@endif
 <!-- Basic Bootstrap Table -->
 <div class="card">
    <div class="card-header p-3">
        <div class="d-flex justify-content-between algin-items-center">
            <h5>All users</h5>
            <div data-bs-toggle="modal" data-bs-target="#createUser" class="hover">
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
                        <span class='btn btn-outline-primary btn-sm' id="edit{{ $user->id }}" data-bs-toggle="modal" data-bs-target="#editUser" onclick="editUser({{$user->id}})">
                            <i class="fas fa-user-edit hover"></i>
                        </span>
                        <button class='btn btn-outline-danger btn-sm' form='deleteForm{{$user->id}}' data-bs-toggle="modal" data-bs-target="#deleteUser" onclick="deleteUser({{$user->id}})">
                            <i class="fas fa-trash"></i>
                        </button>
                        {{-- <form action="{{ route('users.destroy',$user->id) }}" id='deleteForm{{$user->id}}' method="post" onsubmit="delete({{$user->id}})">
                            @csrf
                            @method('delete')
                            <input type="submit">
                        </form> --}}
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

    function editUser(id){
        const name = document.getElementById(`name${id}`);
        const email = document.getElementById(`email${id}`);
        document.getElementById('name').value =  name.textContent;
        document.getElementById('email').value =  email.textContent;
    } 

    function deleteUser(id){
        const deleteForm = document.forms['myForm'];
        deleteForm.setAttribute('action', 'http://127.0.0.1:8000/users/'+id);
        // console.log(deleteForm.getAttribute('action'));
    }

    function confirmAndSubmit(id) {
        console.log('hello');
        if (confirm('Are you sure you want to delete?')) {
            document.getElementById(`deleteForm{id}`).submit();
        }
    }
  </script>

@endsection
