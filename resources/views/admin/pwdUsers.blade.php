@extends('layout')

@section('page-title', 'PWDs Users')
@section('page-content')
<div class="">
    <div class="row mt-4 mb-2">
        <div class="col default-text header-texts border-bottom">
            Person with Disabilities
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td class="table-head">User ID</td>
                <td class="table-head">Name</td>
                <td class="table-head">Email</td>
                <td class="table-head">Contact Number</td>
                <td class="table-head">Location</td>
                <td class="table-head">Disability</td>
                <td class="table-head" colspan="2">--</td>
            </tr>
        </thead>
        <tbody class="table-group-divider text-center">
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->userInfo->firstname . ' ' . $user->userInfo->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->userInfo->contactnumber }}</td>
                    <td>{{ $user->userInfo->state. ' ' .$user->userInfo->city }}</td>
                    <td>{{ $user->userInfo->disability->disability_name }}</td>
                    <td colspan="2"><i class='bx bx-trash' id="trash-btn"></i></td>
                </tr>
            @empty
                    <tr>
                        <td colspan="7">No PWD users found.</td>
                    </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection



