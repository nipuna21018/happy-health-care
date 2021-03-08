<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($doctor->name) ? $doctor->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('residential_address') ? 'has-error' : ''}}">
    <label for="residential_address" class="control-label">{{ 'Residential Address' }}</label>
    <textarea class="form-control" rows="5" name="residential_address" type="textarea" id="residential_address" >{{ isset($doctor->residential_address) ? $doctor->residential_address : ''}}</textarea>
    {!! $errors->first('residential_address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('institute_address') ? 'has-error' : ''}}">
    <label for="institute_address" class="control-label">{{ 'Institute Address' }}</label>
    <textarea class="form-control" rows="5" name="institute_address" type="textarea" id="institute_address" >{{ isset($doctor->institute_address) ? $doctor->institute_address : ''}}</textarea>
    {!! $errors->first('institute_address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($doctor->email) ? $doctor->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
    <label for="mobile" class="control-label">{{ 'Mobile' }}</label>
    <input class="form-control" name="mobile" type="text" id="mobile" value="{{ isset($doctor->mobile) ? $doctor->mobile : ''}}" >
    {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : ''}}">
    <label for="date_of_birth" class="control-label">{{ 'Date Of Birth' }}</label>
    <input class="form-control" name="date_of_birth" type="date" id="date_of_birth" value="{{ isset($doctor->date_of_birth) ? $doctor->date_of_birth : ''}}" >
    {!! $errors->first('date_of_birth', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
    <label for="gender" class="control-label">{{ 'Gender' }}</label>
    <select name="gender" class="form-control" id="gender" >
    @foreach (json_decode('{"male":"Male","female":"Female"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($doctor->gender) && $doctor->gender == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marital_status') ? 'has-error' : ''}}">
    <label for="marital_status" class="control-label">{{ 'Marital Status' }}</label>
    <select name="marital_status" class="form-control" id="marital_status" >
    @foreach (json_decode('{"married":"Married","single":"Single"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($doctor->marital_status) && $doctor->marital_status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('marital_status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nationality') ? 'has-error' : ''}}">
    <label for="nationality" class="control-label">{{ 'Nationality' }}</label>
    <input class="form-control" name="nationality" type="text" id="nationality" value="{{ isset($doctor->nationality) ? $doctor->nationality : ''}}" >
    {!! $errors->first('nationality', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('education_qualiication') ? 'has-error' : ''}}">
    <label for="education_qualiication" class="control-label">{{ 'Education Qualiication' }}</label>
    <textarea class="form-control" rows="5" name="education_qualiication" type="textarea" id="education_qualiication" >{{ isset($doctor->education_qualiication) ? $doctor->education_qualiication : ''}}</textarea>
    {!! $errors->first('education_qualiication', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('experience_after_graduation') ? 'has-error' : ''}}">
    <label for="experience_after_graduation" class="control-label">{{ 'Experience After Graduation' }}</label>
    <textarea class="form-control" rows="5" name="experience_after_graduation" type="textarea" id="experience_after_graduation" >{{ isset($doctor->experience_after_graduation) ? $doctor->experience_after_graduation : ''}}</textarea>
    {!! $errors->first('experience_after_graduation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
    <label for="position" class="control-label">{{ 'Position' }}</label>
    <input class="form-control" name="position" type="text" id="position" value="{{ isset($doctor->position) ? $doctor->position : ''}}" >
    {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('registration_number') ? 'has-error' : ''}}">
    <label for="registration_number" class="control-label">{{ 'Registration Number' }}</label>
    <input class="form-control" name="registration_number" type="text" id="registration_number" value="{{ isset($doctor->registration_number) ? $doctor->registration_number : ''}}" >
    {!! $errors->first('registration_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($doctor->user_id) ? $doctor->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
