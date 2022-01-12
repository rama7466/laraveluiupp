<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>How to Send Email with Attachment in Laravel 8</title>
    </head>
    <body>
        <div class="container my-5">
            <h1 class="fs-4 fw-bold mb-3 text-center">How to Send Email with Attachment in Laravel 8</h1>
            <div class="row">
                <form class="row g-3" action="/" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="col-md-6">
                        <label for="bank" class="form-label">Bank</label>
                        <input type="text" name="bank" class="form-control" id="bank">
                    </div>
                    <div class="col-md-6">
                        <label for="bank_account" class="form-label">Bank Account Name</label>
                        <input type="text" name="bank_account" class="form-control" id="bank_account">
                    </div>
                    <div class="col-md-6">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" name="amount" class="form-control" id="amount">
                    </div>
                    <div class="col-md-6">
                        <label for="transfer_date" class="form-label">Transfer Date</label>
                        <input type="date" name="transfer_date" class="form-control" id="transfer_date">
                    </div>
                    <div class="col-md-12">
                        <label for="Photo" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" id="Photo">
                    </div>
                    <div class="col-12">
                        <a href="uppaprl"><button type="submit" class="btn btn-primary">Submit</button></a>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
