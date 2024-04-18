</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
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
                        <a class="nav-link active" aria-current="page" href="#">Profile</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-secondary" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Welcome, {{ Auth::user()->username }}</h1>
        @if (Auth::user()->role == 'customer')
            <a href="{{ route('register-form')}}">Register for CapBay Vroom's Test Drive</a>
        @else

            <p>Viewing customers' registration list </p>
            @if ($registration->isEmpty())
                <p>No registration found.</p>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mobile No.</th>
                        <th>Promotion Eligibility <button id="filterEligible" class="btn"><i class="fa fa-filter"></i></button></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registration as $register)
                        <tr class="{{ $register->eligibility == 'eligible' ? 'eligible-row' : 'ineligible-row' }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $register->name }}</td>
                            <td>{{ $register->mobile }}</td>
                            <td>
                                <span class="badge {{ $register->eligibility == 'eligible' ? 'badge-success' : 'badge-danger' }}" style="background-color: {{ $register->eligibility == 'eligible' ? '#28a745' : '#dc3545' }}">
                                    {{ $register->eligibility }}
                                </span>
                            </td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#CustomerModal{{ $register->userid }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        @endif
    </div>

    @foreach ($registration as $register)
        <div class="modal fade" id="CustomerModal{{ $register->userid }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registration of {{ $register->name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('updated') }}" method="POST">
                            @csrf
                            <input type="text" name="userid"  value="{{$register->userid}}" hidden>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ $register->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile No.</label>
                            <input type="text" name="mobile" class="form-control" id="mobile"
                                value=" {{ $register->mobile }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Purchase Status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="pending" {{ $register->status == 'pending' ? 'selected' : '' }}>Pending
                                </option>
                                <option value="approved" {{ $register->status == 'approved' ? 'selected' : '' }}>Approved
                                </option>
                                <option value="rejected" {{ $register->status == 'rejected' ? 'selected' : '' }}>Rejected
                                </option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="downpayment" class="form-label">Down Payment</label>
                            <select name="downpayment" class="form-control" id="downpayment">
                                <option value="" disabled selected>--Select down payment percent(%)--</option>
                                <option value="3" {{ $register->downpayment == 3 ? 'selected' : '' }}>3%</option>
                                <option value="5" {{ $register->downpayment == 5 ? 'selected' : '' }}>5%</option>
                                <option value="10" {{ $register->downpayment == 10 ? 'selected' : '' }}>10%</option>
                                <option value="15" {{ $register->downpayment == 15 ? 'selected' : '' }}>15%</option>
                                <option value="20" {{ $register->downpayment == 20 ? 'selected' : '' }}>20%</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="loanamount" class="form-label">Loan Amount</label>
                            <input type="text" name="loanamount" class="form-control" id="mobile"
                                @if ($register->loanamount == null) value="N/A"
                            @else
                             value = "{{ $register->loanamount }}" @endif
                                disabled>
                        </div>
                        <div class="mb-3">
                            <label for="eligibility" class="form-label">Promotion Eligibility</label>
                            <input type="text" name="eligibility" class="form-control" id="mobile"
                                value=" {{ $register->eligibility }}" disabled>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>

                    </div>
                </form>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var filterActive = false;

        document.getElementById('filterEligible').addEventListener('click', function() {
            filterActive = !filterActive; // Toggle filter state

            var rows = document.querySelectorAll('.eligible-row, .ineligible-row');

            rows.forEach(function(row) {
                if (filterActive) {
                    if (row.classList.contains('eligible-row')) {
                        row.style.display = 'table-row';
                    } else {
                        row.style.display = 'none';
                    }
                } else {
                    row.style.display = 'table-row';
                }
            });
        });
    </script>
</body>

</html>
