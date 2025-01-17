@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Sliders</h1>

    <!-- Display Success Message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('sliders.create') }}" class="btn btn-primary mb-3">Create New Slider</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->description }}</td>
                    <td><img src="{{ asset('storage/' . $slider->image) }}" width="100"></td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>{{ $slider->category ? $slider->category->name : 'No Category' }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.alert').fadeOut('slow', function () {
                $(this).remove();
            });
        }, 2000);
    });
</script>
@endsection
