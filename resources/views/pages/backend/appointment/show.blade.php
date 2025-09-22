@extends('layouts.backend.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title mb-0">Detail Messages</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-muted">First Name</h6>
                                <p class="font-weight-bold">{{ $appointment->first_name }}</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted">Last Name</h6>
                                <p class="font-weight-bold">{{ $appointment->last_name }}</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted">Email</h6>
                                <p class="font-weight-bold">{{ $appointment->email }}</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted">Subject</h6>
                                <p class="font-weight-bold">{{ $appointment->subject }}</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted">Description</h6>
                                <p>{{ $appointment->description }}</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted">Status</h6>
                                @if ($appointment->status == 'active')
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </div>

                            <div class="text-right mt-4">
                                <a href="{{ route('appointment.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
