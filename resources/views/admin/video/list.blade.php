@extends('admin.main')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('content')
    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="border-gray-200">#</th>
                    <th class="border-gray-200">Name</th>
                    <th class="border-gray-200">Description</th>
                    <th class="border-gray-200">Position</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span class="fw-normal">5</span>
                    </td>
                    <td>
                        <span class="fw-normal">Log in with Facebook</span>
                    </td>
                    <td><span class="fw-normal">Log in with Facebook</span></td>
                    <td><span class="fw-normal">Welcome</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-normal">4</span>
                    </td>
                    <td>
                        <span class="fw-normal"> Log in to access your professional tools</span>
                    </td>
                    <td><span class="fw-normal">Log in to access your professional tools</span></td>
                    <td><span class="fw-normal">Welcome</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-normal">18</span>
                    </td>
                    <td>
                        <span class="fw-normal">Create new account</span>
                    </td>
                    <td><span class="fw-normal">Create new account (Bottom mobile)</span></td>
                    <td><span class="fw-normal">Login</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-normal">17</span>
                    </td>
                    <td>
                        <span class="fw-normal">Sign up for Facebook</span>
                    </td>
                    <td><span class="fw-normal">Sign up for Facebook</span></td>
                    <td><span class="fw-normal">Login</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-normal">16</span>
                    </td>
                    <td>
                        <span class="fw-normal"> Forgotten account</span>
                    </td>
                    <td><span class="fw-normal">Forgotten account</span></td>
                    <td><span class="fw-normal">Login</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-normal">15</span>
                    </td>
                    <td>
                        <span class="fw-normal">Log In</span>
                    </td>
                    <td><span class="fw-normal">Log In</span></td>
                    <td><span class="fw-normal">Login</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-normal">14</span>
                    </td>
                    <td>
                        <span class="fw-normal">Password</span>
                    </td>
                    <td><span class="fw-normal">Password</span></td>
                    <td><span class="fw-normal">Login</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-normal">13</span>
                    </td>
                    <td>
                        <span class="fw-normal"> Mobile number or email address</span>
                    </td>
                    <td><span class="fw-normal">Mobile number or email address</span></td>
                    <td><span class="fw-normal">Login</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-normal">12</span>
                    </td>
                    <td>
                        <span class="fw-normal">Log in to Facebook</span>
                    </td>
                    <td><span class="fw-normal">Log in to Facebook</span></td>
                    <td><span class="fw-normal">Login</span></td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-normal">11</span>
                    </td>
                    <td>
                        <span class="fw-normal"> Find your account.</span>
                    </td>
                    <td><span class="fw-normal">Find your account.</span></td>
                    <td><span class="fw-normal">Login</span></td>
                </tr>
            </tbody>
        </table>

        <div style="padding-right:0" class="card-footer pt-4 border-0 d-flex align-items-center justify-content-start">
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination m-0">

                    <li class="disabled page-item" aria-disabled="true" aria-label="« Previous">
                        <span class="page-link" aria-hidden="true">‹</span>
                    </li>





                    <li class="active page-item" aria-current="page"><span class="page-link">1</span></li>
                    <li class="page-item"><a class="page-link" href="/labels?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="/labels?page=3">3</a></li>
                    <li class="page-item"><a class="page-link" href="/labels?page=4">4</a></li>
                    <li class="page-item"><a class="page-link" href="/labels?page=5">5</a></li>
                    <li class="page-item"><a class="page-link" href="/labels?page=6">6</a></li>
                    <li class="page-item"><a class="page-link" href="/labels?page=7">7</a></li>
                    <li class="page-item"><a class="page-link" href="/labels?page=8">8</a></li>


                    <li class="page-item">
                        <a class="page-link" href="/labels?page=2" rel="next"
                            aria-label="Next »">›</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
@endsection
