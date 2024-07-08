@extends('layout')

@section('page-title', 'PWDs Users');
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
    <!-- <div class="row">
        <div class="text-center m-2 less-opacity-bg dash-btns" >
            <a href="" class="link-underline link-underline-opacity-0">
                <span class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);"><circle cx="9" cy="4" r="2"></circle><path d="M16.98 14.804A1 1 0 0 0 16 14h-4.133l-.429-3H16V9h-4.847l-.163-1.142A1 1 0 0 0 10 7H9a1.003 1.003 0 0 0-.99 1.142l.877 6.142A2.009 2.009 0 0 0 10.867 16h4.313l.839 4.196c.094.467.504.804.981.804h3v-2h-2.181l-.839-4.196z"></path><path d="M12.51 17.5c-.739 1.476-2.25 2.5-4.01 2.5A4.505 4.505 0 0 1 4 15.5a4.503 4.503 0 0 1 2.817-4.167l-.289-2.025C3.905 10.145 2 12.604 2 15.5 2 19.084 4.916 22 8.5 22a6.497 6.497 0 0 0 5.545-3.126l-.274-1.374H12.51z"></path></svg>
                </span>
                <div class="d-flex justify-content-center align-items-center accent-text" style="height:5rem; font-weight: bold; font-size: 1.4rem;">Person with Disabilities</div>
            </a>
        </div>
        <div class="text-center m-2 less-opacity-bg dash-btns">
            <a href="" class="link-underline link-underline-opacity-0">
                <span class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);"><path d="M21 10h-2V4h1V2H4v2h1v6H3a1 1 0 0 0-1 1v9h20v-9a1 1 0 0 0-1-1zm-7 8v-4h-4v4H7V4h10v14h-3z"></path><path d="M9 6h2v2H9zm4 0h2v2h-2zm-4 4h2v2H9zm4 0h2v2h-2z"></path></svg>
                </span>
                <div class="d-flex justify-content-center align-items-center accent-text" style="height:5rem; font-weight: bold; font-size: 1.4rem;">Training Agencies</div>
            </a>
        </div>
        <div class="text-center m-2 less-opacity-bg dash-btns">
            <a href="" class="link-underline link-underline-opacity-0">
                <span class="row">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);"><path d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zm-5-2v2H9V4h6zM8 8h12v3H4V8h4zM4 19v-6h6v2h4v-2h6l.001 6H4z"></path></svg>
                </span>
                <div class="d-flex justify-content-center align-items-center accent-text" style="height:5rem; font-weight: bold; font-size: 1.4rem;">Companies</div>
            </a>
        </div>
        <div class="text-center m-2 less-opacity-bg dash-btns">
            <a href="" class="link-underline link-underline-opacity-0">
                <span class="row"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg></span>
                <div class="d-flex justify-content-center align-items-center accent-text" style="height:5rem; font-weight: bold; font-size: 1.4rem;">Sponsors</div>
            </a>
        </div>
    </div> -->

</div>
@endsection



