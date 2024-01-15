@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <div class="login-layout text-white">
        <div class="login-form text-center">
            <img class="mb-3" src="https://scify.org/wp-content/uploads/2023/10/logo-scify-header@2x.png" alt="">
            <h3 class="mb-3" >Welcome! Please enter your username</h3>
            <form>
                @csrf
                <div class="mb-3 col-10 m-auto">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username"  required>
                </div>
                <button id="form-submit" type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div id="response-message"></div>
        </div>
    </div>
    <script type="module">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#form-submit').on('click', function(e) {
            e.preventDefault(); 
            var username = $('#username').val();
            $.ajax({
                type: "POST",
                url:"{{ route('login.handler') }}",
                data: {username:username},
                success: function( data ) {
                    $("#response-message").html('you have loggedin');
                    if($.isEmptyObject(data.error)){
                        $("#response-message").html(data.success);
                        window.location = "{{ route('users.activity') }}";
                    }else{
                        $("#response-message").html(data.error);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    $("#response-message").html(thrownError);
                }
            });
        });
    </script>
@stop


