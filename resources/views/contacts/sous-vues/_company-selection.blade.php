<div class="form-group">
    <select class="form-control" id="company">
        <option value="" disabled>Select Company</option>
        @isset($companies)
            @foreach($companies as $company)
                <option value="{{ $company }}">{{ $company }}</option>
            @endforeach
        @endisset
    </select>
</div>
