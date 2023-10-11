@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">GPA Calculator</h2>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('calculate') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="gradeA">A's:</label>
                    <input type="number" class="form-control" id="gradeA" name="gradeA" value="{{ old('gradeA') }}" required>
                </div>
                <div class="form-group">
                    <label for="gradeB">B's:</label>
                    <input type="number" class="form-control" id="gradeB" name="gradeB" value="{{ old('gradeB') }}" required>
                </div>
                <div class="form-group">
                    <label for="gradeC">C's:</label>
                    <input type="number" class="form-control" id="gradeC" name="gradeC" value="{{ old('gradeC') }}" required>
                </div>
                <div class="form-group">
                    <label for="gradeD">D's:</label>
                    <input type="number" class="form-control" id="gradeD" name="gradeD" value="{{ old('gradeD') }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Calculate GPA</button>
            </form>
        </div>
        <div class="col-md-6">
            <div id="result" class="text-center">
                @isset($cummulative->gpa)
                    <p>The number of Grades:</p>
                    <p>A: {{ $cummulative->gradeA }}</p>
                    <p>B: {{ $cummulative->gradeB }}</p>
                    <p>C: {{ $cummulative->gradeC }}</p>
                    <p>D: {{ $cummulative->gradeD }}</p>
                    <p class="text-center text-success mt-2">Final GPA: {{ number_format($cummulative->gpa, 3) }}</p>
                @endisset
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

@endsection
