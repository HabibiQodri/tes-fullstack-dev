@extends('layouts.main')

@section('content')
    <div class="container">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form id="contactUsForm">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" class="form-control form-control-lg" />
                                <label class="form-label" for="form1Example13">Email address</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" name="name" id="name" class="form-control form-control-lg" />
                                <label class="form-label" for="form1Example13">Name</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="form1Example23"
                                    class="form-control form-control-lg" />
                                <label class="form-label" for="form1Example23">Password</label>
                            </div>

                            <div class="d-flex justify-content-around align-items-center mb-4">
                                <small class="d-block text-center mt-3">Not Register yet? <a href="/register">Register
                                        Now!</a></small>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>


                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#submit").click(function(e) {

            e.preventDefault();

            var name = $("input[name=name]").val();
            var password = $("input[name=password]").val();
            var email = $("input[name=email]").val();

            console.log(password);
            console.log(email);
            console.log(name);

            $.ajax({
                type: 'POST',
                url: "{{ route('ajaxRequest') }}",
                data: {
                    name: name,
                    password: password,
                    email: email
                },
                success: function(data) {
                    console.log(data.ontol);
                    // window.location.href = "http://localhost:8000/contoh";
                }
            });
        });
        // if ($("#contactUsForm").length > 0) {
        // $("#contactUsForm").validate({
        //     submitHandler: function(form) {
        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });
        //         $('#submit').html('Please Wait...');
        //         $("#submit").attr("disabled", true);
        //         $.ajax({
        //             url: "{{ route('ajaxRequest') }}",
        //             type: "POST",
        //             data: $('#contactUsForm').serialize(),
        //             success: function(response) {
        //                 $('#submit').html('Submit');
        //                 $("#submit").attr("disabled", false);
        //                 alert('Ajax form has been submitted successfully');
        //                 document.getElementById("contactUsForm").reset();
        //             }
        //         });
        //     }
        // })

        // $("#submit").click(function(e) {
        //     e.preventDefault();

        //     var form = {};
        //     form['name'] = $("input[name=name]").val();
        //     form['password'] = $("input[name=password]").val();
        //     form['email'] = $("input[name=email]").val();

        //     console.log($('#contactUsForm').serialize());

        //     $.$.ajax({
        //         type: "POST",
        //         url: "{{ route('ajaxRequest') }}",
        //         data: form,
        //         success: function (response) {
        //             // console.log(data.otol);
        //             window.location.href = "http://localhost:8000/contoh";
        //         }
        //     });
        // });
        // }
    </script>
@endsection
