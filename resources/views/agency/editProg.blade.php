@extends('layout')
@section('page-title', 'Edit Training Program')
@section('page-content')
<form action="{{ route('programs-update', $program->id) }}" method="POST" class="container">
    @csrf
    @method('PUT')
    <div class="row mt-2 mb-2">
        <div class="col default-text header-texts border-bottom">
            <a href="{{ route('programs-manage') }}" class="m-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(4, 176, 0, 1);">
                    <path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path>
                </svg>
            </a>
            Edit Training Program
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="title" value="{{ $program->title }}" required placeholder="Title">
                <label for="floatingInput">Title</label>
                @error('title')
                <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="city" value="{{ $program->city }}" required placeholder="City">
                <label for="floatingInput">City</label>
                @error('city')
                <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Description" id="floatingTextarea2" name="description" style="height: 200px">{{ $program->description }}</textarea>
                <label for="floatingTextarea2">Description</label>
                @error('description')
                <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="start_date">Start Date: </label>
                <input type="date" name="start_date" value="{{ $program->start }}" required>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="end_date">End Date: </label>
                <input type="date" name="end_date" value="{{ $program->end }}" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" name="disability" aria-label="Floating label select example">
                    @foreach ($disabilities as $disability)
                    @if ($disability->id != 1)
                        <option value="{{ $disability->id }}" {{ $program->disability_id == $disability->id ? 'selected' : '' }}>{{ $disability->disability_name }}</option>
                    @endif
                    @endforeach
                </select>
                <label for="floatingSelect">Disability</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" name="education" aria-label="Floating label select example">
                    @foreach ($levels as $level)
                    <option value="{{ $level->id }}" {{ $program->education_id == $level->id ? 'selected' : '' }}>{{ $level->education_name }}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Education Level</label>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3 prog-btn">
        <button type="reset" class="delete-btn">Clear</button>
        <button type="submit" class="edit-btn btn-default">Update</button>
    </div>
</form>
@endsection