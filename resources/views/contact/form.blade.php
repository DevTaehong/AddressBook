<div class="form-group">
    <label for="first_name">First Name</label>
    <input name="first_name" type="text" class="form-control" id="first_name" aria-describedby="first_nameHelp"
           value="{{ old('first_name') ?? $contact->first_name }}" autocomplete="off">
    <small id="first_nameHelp" class="form-text text-muted">Enter first name.</small>

    @error('first_name')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="last_name">Last Name</label>
    <input name="last_name" type="text" class="form-control" id="last_name" aria-describedby="last_nameHelp"
           value="{{ old('last_name') ?? $contact->last_name }}" autocomplete="off">
    <small id="last_nameHelp" class="form-text text-muted">Enter last name.</small>

    @error('last_name')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="phone">Phone number</label>
    <input name="phone" type="text" class="form-control" id="phone" aria-describedby="phoneHelp"
           value="{{ old('phone') ?? $contact->phone }}" autocomplete="off">
    <small id="phoneHelp" class="form-text text-muted">Enter phone number.</small>

    @error('phone')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp"
           value="{{ old('email') ?? $contact->email }}" autocomplete="off">
    <small id="emailHelp" class="form-text text-muted">
        Enter email.
    </small>

    @error('email')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="image">Image</label>
    <input name="image" type="file" accept="image/*" class="form-control" id="image" aria-describedby="imageHelp" value="{{ old('image') ?? $contact->image }}" autocomplete="off">
    @error('image')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

@csrf
