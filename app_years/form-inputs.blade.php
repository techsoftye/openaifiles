@php $editing = isset($appYear) @endphp

<div class="row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="year_no"
            label="{{__('year_no')}}"
            :value="old('year_no', ($editing ? $appYear->year_no : '2013'))"
            maxlength="4"
            placeholder="{{__('year_no')}}"
              title="{{__('validation.required')}}<br/>{{__('validation.numeric')}}"
             required
             number
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="prev_year_no"
            label="{{__('prev_year_no')}}"
            :value="old('prev_year_no', ($editing ? $appYear->prev_year_no : ''))"
            maxlength="4"
            placeholder="{{__('prev_year_no')}}"
            title="{{__('validation.required')}}<br/>{{__('validation.numeric')}}"
             required
             number
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="next_year_no"
            label="{{__('next_year_no')}}"
            :value="old('next_year_no', ($editing ? $appYear->next_year_no : ''))"
            maxlength="4"
            placeholder="{{__('next_year_no')}}"
            title="{{__('validation.required')}}<br/>{{__('validation.numeric')}}"
            required
            number
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.date
            name="form_date"
            label="{{__('form_date')}}"
            value="{{ old('form_date', ($editing ? optional($appYear->form_date)->format('Y-m-d') : '')) }}"
            max="16"
            title="{{__('validation.required')}}"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.date
            name="to_dates"
            label="{{__('to_dates')}}"
            value="{{ old('to_dates', ($editing ? optional($appYear->to_dates)->format('Y-m-d') : '')) }}"
            max="16"
            title="{{__('validation.required')}}"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="year_Short_name"
            label="{{__('year_Short_name')}}"
            :value="old('year_Short_name', ($editing ? $appYear->year_Short_name : ''))"
            maxlength="2"
            placeholder="{{__('year_Short_name')}}"
            title="{{__('validation.required')}}<br/>{{__('validation.numeric')}}"
            required
            number
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
       
        <x-inputs.select name="Is_closed" label="{{ __('Is_closed') }}"
        title="{{__('validation.required')}}"
        required
        >
        <option disabled {{ empty($selected) ? 'selected' : '' }}>{{ __('Please select One') }}</option>
            @php $selected = old('Is_closed', ($editing ? $appYear->status : '')) @endphp
            <option {{ $selected =='1' ? 'selected' : '' }} value="1">مفتوح</option>
            <option value="0" {{ $selected =='0' ? 'selected' : '' }}>مقفل</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.number
            name="period_month_count"
            label="{{__('period_month_count')}}"
            :value="old('period_month_count', ($editing ? $appYear->period_month_count : '12'))"
            max="255"
            placeholder="{{__('period_month_count')}}"
            title="{{__('validation.required')}}<br/>{{__('validation.numeric')}}"
            required number
            
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
       
        <x-inputs.select name="status" label="{{ __('status') }}"
        title="{{__('validation.required')}}"
        required
        >

        <option disabled {{ empty($selected) ? 'selected' : '' }}>{{ __('Please select One') }}</option>
            @php $selected = old('status', ($editing ? $appYear->status : '')) @endphp
            <option {{ $selected =='1' ? 'selected' : '' }} value="1">تفعيل</option>
            <option value="0" {{ $selected =='0' ? 'selected' : '' }}>تعطيل</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="notes"
        label="{{__('notes')}}"
         maxlength="255"
            >{{ old('notes', ($editing ? $appYear->notes : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    {{-- <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="Is_closed"
            label="{{__('Is_closed')}}"
            :value="old('Is_closed', ($editing ? $appYear->Is_closed : '1'))"
            maxlength="255"
            placeholder="{{__('Is_closed')}}"
              title="{{__('validation.required')}}"
  required
        ></x-inputs.text>
    </x-inputs.group> --}}

    
 

  
    <x-inputs.group class="col-sm-6 hidmeinform">
        <x-inputs.select name="created_by" 
        label="{{ __('created_by') }}"
        title="{{__('validation.required')}}"
        required>
        @php $selected = old('created_by', ($editing ? $appYear->created_by :auth()->user()->id )) @endphp
            <option disabled {{ empty($selected) ? 'selected' :'' }}>{{ __('Please select the User') }}</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected':'' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6 hidmeinform">
        <x-inputs.select name="updated_by" label="{{ __('updated_by') }}">
            @php $selected = old('updated_by', ($editing ? $appYear->updated_by :auth()->user()->id )) @endphp
            <option disabled {{ empty($selected) ? 'selected' :'' }}>{{ __('Please select the User') }}</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected':''  }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
