@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">{{ __('Add Member') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('member.create') }}">
                        @csrf

                        <div class="row mb-3">
                            
                            <div class="col-md-6">
                                <label for="province" class="text-md-end">{{ __('Province') }}</label>
                                <select id="province" class="form-control" name="province" required id="province">
                                    <option disabled>Select a Province</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="Division" class="text-md-end">{{ __('Division') }}</label>
                                <select class="form-control" name="division" required id="division">
                                    <option disabled>Select a Division</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="district" class="text-md-end">{{ __('District') }}</label>
                                <select class="form-control" name="district" required id="district">
                                    <option disabled>Select a District</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="tehsil" class="text-md-end">{{ __('tehsil') }}</label>
                                <select id="tehsil" class="form-control" name="tehsil" required>
                                    <option disabled>Select a tehsil</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="unioncouncil" class="text-md-end">{{ __('Union Council') }}</label>
                                <select id="unioncouncil" class="form-control" name="unioncouncil" required>
                                    <option disabled>Select a Union Council</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="household" class="text-md-end">{{ __('Household') }}</label>
                                <select id="household" class="form-control" name="household" required>
                                    <option disabled>Select a Household</option>
                                </select>
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3">
                            <hr />
                            <div class="col-md-8">
                            <label for="name" class="text-md-end">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8">
                            <label for="father_name" class="text-md-end">{{ __('Name') }}</label>
                                <input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" required autocomplete="name" autofocus>

                                @error('father_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8">
                            <label for="contact_number" class="text-md-end">{{ __('Contact Number') }}</label>
                                <input id="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" required >

                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8">
                            <label for="dob" class="text-md-end">{{ __('DOB') }}</label>
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" required>

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8">
                            <label for="age" class="text-md-end">{{ __('Age') }}</label>
                                <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" required>

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $.ajax({
            type:'POST',
            url:'{{ route("province.fetch") }}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(response){
                $.each(response.data,function(index,value){
                    $('#province').append(`<option value="${value.id}">${value.name}</option>`);
                });
            }
        });

        $('#province').on('change',function(){
            var id = $(this).val();
            $.ajax({
            type:'POST',
            url:'{{ route("division.fetch") }}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {id,id},
            success:function(response){
                $('#division').html('<option disabled>Select a District</option>');
                $.each(response.data,function(index,value){
                    $('#division').append(`<option value="${value.id}">${value.name}</option>`);

                });
                $('#district').html('<option disabled>Select a District</option>');
                $('#tehsil').html('<option disabled>Select a Tehsil</option>');
                $('#unioncouncil').html('<option disabled>Select a Union Council</option>');
            }

        });
    });
        $('#division').on('change',function(){
            var id = $(this).val();
            $.ajax({
            type:'POST',
            url:'{{ route("district.fetch") }}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {id,id},
            success:function(response){
                $('#district').html('<option disabled>Select a District</option>');
                $.each(response.data,function(index,value){
                    $('#district').append(`<option value="${value.id}">${value.name}</option>`);
                });
                $('#tehsil').html('<option disabled>Select a Tehsil</option>');
                $('#unioncouncil').html('<option disabled>Select a Union Council</option>');
            }
        });
        });
        $('#district').on('change',function(){
            var id = $(this).val();
            $.ajax({
            type:'POST',
            url:'{{ route("tehsil.fetch") }}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {id,id},
            success:function(response){
                $('#tehsil').html('<option disabled>Select a Union Council</option>');
                $.each(response.data,function(index,value){
                    $('#tehsil').append(`<option value="${value.id}">${value.name}</option>`);
                });
                $('#unioncouncil').html('<option disabled>Select a Union Council</option>');
            }
        });
        });
        $('#tehsil').on('change',function(){
            var id = $(this).val();
            $.ajax({
            type:'POST',
            url:'{{ route("unioncouncil.fetch") }}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {id,id},
            success:function(response){
                $('#unioncouncil').html('<option disabled>Select a Union Council</option>');
                $.each(response.data,function(index,value){
                    $('#unioncouncil').append(`<option value="${value.id}">${value.name}</option>`);
                });
            }
        });
        });
        $('#unioncouncil').on('change',function(){
            var id = $(this).val();
            $.ajax({
            type:'POST',
            url:'{{ route("household.fetch") }}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {id,id},
            success:function(response){
                $('#household').html('<option disabled>Select a Union Council</option>');
                $.each(response.data,function(index,value){
                    $('#household').append(`<option value="${value.id}">${value.household_no}</option>`);
                });
            }
        });
        });
    });


</script>
@endsection
