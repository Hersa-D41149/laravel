<x-users.layout title="try">

    {{-- <form action="{{ route('storetry') }}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif

        @foreach ($tanyas as $tanya)
            <table class="table table-dark table-bordered border-primary">
                <tr class="table-dark">
                    <th scope="col">ID</th>
                    <th scope="col">Soal</th>
                    <th scope="col">Skor</th>
                    <th scope="col">Action</th>
                </tr>
                <table class="table table-bordered" id="table">
                    <tr>
                        <th>Soal</th>

                        <th>Skor</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td> {{ $tanya->id }} </td>
                        <td> {{ $tanya->soal }}</a> </td>
                        <td> {{ $tanya->skor }} </td>
                        <td>
                        <td>{{ $loop->iteration }}</td>

                        <td>sc</td>
                        <td><input type="text" name="inputs[0][jawaban]" placeholder="jawaban" class="form-control">
                        </td>
                        <td><button type="button" name="add" id="add" class="btn btn-success">ADD</button>
                        </td>
                    </tr>
                </table>
        @endforeach
        <button type="submit" class="btn btn-primary col-md-2">kirim</button>
    </form>
 --}}

    <div class="container d-flex justify-content-center pt-5" style="padding-top: 10rem">
        <div class="col-md-9" style="padding-top: 10rem">
            <h2 class="text-cneter pb-3 text-danger">INputs</h2>

            <form action="{{ route('storetry') }}" method="post" id="add_data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif

                <table class="table table-bordered show_item" id="tablee">
                    <tr>
                        <th>Jawaban</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="addMoreInputFields[0][jawaban]" placeholder="jawaban"
                                class="form-control">
                        </td>
                        <td>
                            <button type="button" name="add" id="add" class="btn btn-success add_jawaban">ADD
                            </button>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary col-md-2">Add</button>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var i = 0;
        $("#add").click(function() {
            ++i;
            $("#tablee").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                '][jawaban]" placeholder="Enter jawaban" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    </script>

    {{-- <script>
        $(document).ready(function() {

            $(".add_jawaban").click(function(e) {

                e.preventDefault();
                $("#tablee").append(`  
                    <tr>
                        <th>Jawaban</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="jawaban" placeholder="jawaban" class="form-control">
                        </td>
                        <td>
                            <button type="button" name="add" id="add" class="btn btn-danger remove_jawaban">Remove
                            </button>
                        </td>
                    </tr>`);
            });
            $(document).on('click', '.remove_jawaban', function(e) {
                e.preventDefault();
                $(this).parents('tr').remove();
            });
            // //ajjax trowh
            // $("#add_data").submit(function(e) {
            //     e.preventDefault();
            //     $("#add_jawaban").val('Adding....');
            //     $.ajax({
            //         url: {{ route('action') }},
            //         method: 'post',
            //         data: $(this).serialize(),
            //         success: function(response) {
            //             console.log(response);
            //         }
            //     });
            // });
        });
    </script> --}}









    {{-- <script>
        $(document).ready(function() {
            alert('helo')
        })
    </script> --}}
    {{-- <script>
        var i = 0;
        $('#add').click(function() {
            ++i;
            $('#table').append(
                `<tr>
            <td>
                <input type="text" name="inputs[` + i + `][jawaban]" placeholder="jawaban" class="form-control" />
            </td>
            <td>
                <button type="button" class="btn btn-danger remove-table-row">Remove</button>
            </td>

        <tr>`);
        });

        $(document).on('click', '.remove-table-row', function() {
            $(this).parents('tr').remove();
        });
    </script> --}}

    </x-users>

    {{-- Sweetalert --}}
    {{-- Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
    Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success'
    )
    }
    }) --}}
