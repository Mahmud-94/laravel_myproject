<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{ route('customer.register') }}" class="my-4" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label for="username" class="form-label">UserName</label>
                                                    <input class="form-control" name="name" type="text"
                                                        id="username" placeholder="Enter your Username">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="emailaddress" class="form-label">Email Address</label>
                                                    <input class="form-control" name="email" type="email"
                                                        id="emailaddress" placeholder="Enter your Email">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input class="form-control" name="password" type="text"
                                                        id="password" placeholder="Enter your Password">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="password" class="form-label">Confirm Password</label>
                                                    <input class="form-control" name="password_confirmation"
                                                        type="text" id="new-password"
                                                        placeholder="Enter Confirm Password">
                                                </div>



                                                <div class="form-group d-flex mb-3">
                                                    <div class="col-12">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="checkbox-signin">
                                                            <label class="form-check-label" for="checkbox-signin">
                                                                I agree to the <a href="#"
                                                                    class="text-primary fw-medium">Terms and
                                                                    Conditions</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary"
                                                                type="submit">Register</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

</body>
</html>
