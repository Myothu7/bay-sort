 <!-- Create Modal -->
 <div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            Recreational Facilitiy Create
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('facilities.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="text" name="name" class="form-control mb-2" placeholder="Name" >
                            <select name="type" class="form-select">
                                        <option>--select value--</option>
                                    @foreach ($type as $data)
                                        <option value="{{$data}}">{{ $data }}</option>
                                    @endforeach
                            </select>
                            <label for="">image</label>
                            <input type="file" name="image" class="form-control mb-2">   
                            <textarea name="content" id="" cols="30" rows="4" class="form-control" placeholder="Content .."></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


 <!-- Edit Modal -->
 <div class="modal fade" id="editUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            Update Users
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <input type="text" name="name" class="form-control mb-2" placeholder="Name">
                            <input type="email" name="email" class="form-control mb-2" placeholder="Email">
                            <input type="password" name="password" class="form-control mb-2" placeholder="Password">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
