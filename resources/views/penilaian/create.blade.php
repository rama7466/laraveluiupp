@extends('home')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="form-check form-check-success">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="ExampleRadio2" id="ExampleRadio2" checked>
              PUAS
            </label>
        </div>
        <div class="form-check form-check-success">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="ExampleRadio2" id="ExampleRadio2" checked>
              TIDAK PUAS
            </label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">ALASAN</label>
            <textarea class="form-control bg-secondary" id="exampleFormControlTextarea1" rows="3" placeholder="SILAHKAN ISI ALASAN"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mr-2">SUBMIT</button>
    </div>
</div>


@endsection
