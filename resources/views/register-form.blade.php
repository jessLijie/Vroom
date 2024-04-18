<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://capbay.com/wp-content/uploads/2020/10/Review.png">
    <title>CapBay Vroom</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/home">CapBay</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        {{-- <a class="nav-link active" aria-current="page" href="#">Profile</a> --}}
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            {{-- if customer already registered then skip this view --}}
            @if (!$existence)
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Registering CAPBAY VROOM for {{ Auth::user()->username }}</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('registered') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Full Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile No.</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" required>
                            </div>
                            <div class="mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"> {{ Auth::user()->username }} has already registered</h1>
                    </div>
                    <div class="card-body">

                        <p>Registration details:</p>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ $result->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile No.</label>
                            <input type="text" name="mobile" class="form-control" id="mobile" value=" {{ $result->mobile }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Purchase Status</label>
                            <input type="text" name="mobile" class="form-control" id="mobile" value=" {{ $result->status }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="downpayment" class="form-label">Down Payment</label>
                            <input type="text" name="downpayment" class="form-control" id="mobile"
                            @if($result->downpayment == null)
                            value="N/A"
                            @else
                             value = "{{ $result->downpayment }}%" @endif disabled>
                        </div>
                        <div class="mb-3">
                            <label for="loanamount" class="form-label">Loan Amount</label>
                            <input type="text" name="loanamount" class="form-control" id="mobile"
                            @if($result->loanamount == null)
                            value="N/A"
                            @else
                             value = "{{ $result->loanamount }}" @endif disabled>
                        </div>
                        <div class="mb-3">
                            <label for="eligibility" class="form-label">Promotion Eligibility</label>
                            <input type="text" name="eligibility" class="form-control" id="mobile" value=" {{ $result->eligibility }}" disabled>
                        </div>
                        @if($result->status!=="rejected")
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $result->userid }}">Cancel Registration</button>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            @endif

        </div>
    </div>

    @if(isset($result->userid))
    <div class="modal fade" id="deleteModal{{$result->userid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirm Delete?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
              Are you sure to cancel your registration for CapBay Vroom's Test Drive ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="{{ route('cancel-registration', ['id' => $result->userid]) }}"><button type="button" class="btn btn-danger">Confirm</button></a>
            </div>
          </div>
        </div>
      </div>
      @endif

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
