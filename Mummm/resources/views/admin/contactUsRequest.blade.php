@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Message</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($contact_us_requests as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>

                                    <td>
                                        <i class="fa-lg text-danger me-3"></i>
                                        <strong>{{ $item->name }}</strong>
                                    </td>
                                    <td><i class="fa-lg text-danger me-3"></i>
                                        <strong>{{ $item->email }}</strong>
                                    </td>
                                    <td><i class="fa-lg text-danger me-3"></i>
                                        {{ $item->phone }}
                                    </td>
                                    <td><i class="fa-lg text-danger me-3"></i>
                                        <textarea rows="3">{{ $item->message }}</textarea>
                                    </td>

                                    <td><i class="fa-lg text-danger me-3"></i>
                                        <a href="{{ route('destroyRequest', $item->id) }}"
                                            class="confirm mb-1 btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>

                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
    @endsection
