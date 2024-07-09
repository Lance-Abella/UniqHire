@extends('layout')

@section('page-title', 'Training Programs')
@section('page-content')
<div class="d-flex justify-content-center">
    <div class="mt-2 prog-grid">
        <div class="add-prog-card d-flex justify-content-center align-items-center ">
            <a href="{{ route('programs-add') }}" class="add-btn">+</a>
        </div>
        @foreach ($programs as $program)
        <div class="prog-card">
            <h4>{{ $program->title }}</h4>
            <p class="sub-text prog-loc">
                <i class='bx bx-map sub-text'></i>{{ $program->city }} City
            </p>
            <div class="prog-desc-container">
                <p class="prog-desc mt-3">
                    {{ $program->description }}
                </p>
            </div>

            <div class="d-flex mt-3">
                <p class="sub-text prog-details ">
                    <i class='bx bx-group sub-text'></i> Number Participants
                </p>
                <p class="sub-text period">•</p>
                <p class="sub-text prog-details "><i class='bx bx-calendar sub-text'></i> {{ $program->remainingDays }} days to go</p>
            </div>
            <div class="d-flex justify-content-center mt-3 prog-btn">
                <form action="{{ route('programs-delete', $program->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Delete</button>
                </form>
                <form action="{{ route('programs-edit', $program->id) }}" method="GET">
                    <button class="edit-btn btn-default">Edit</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection