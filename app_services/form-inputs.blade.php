@php $editing = isset($appService) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="  {{__('native')}}"
            :value="old('name', ($editing ? $appService->name : ''))"
            maxlength="255"
            placeholder="Name"
              title="{{__('validation.required')}}"
  required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="native"
   label="{{__('native')}}"
            :value="old('native', ($editing ? $appService->native : ''))"
            maxlength="255"
            placeholder="Native"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="service_subtile"
            label="Service Subtile"
            :value="old('service_subtile', ($editing ? $appService->service_subtile : ''))"
            maxlength="255"
            placeholder="Service Subtile"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="service_icon"
            label="Service Icon"
            :value="old('service_icon', ($editing ? $appService->service_icon : ''))"
            maxlength="255"
            placeholder="Service Icon"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="services_key"
            label="Services Key"
            :value="old('services_key', ($editing ? $appService->services_key : ''))"
            maxlength="255"
            placeholder="Services Key"
              title="{{__('validation.required')}}"
  required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="cost_type"
            label="Cost Type"
            :value="old('cost_type', ($editing ? $appService->cost_type : ''))"
            maxlength="255"
            placeholder="Cost Type"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="comosian_rate"
            label="Comosian Rate"
            :value="old('comosian_rate', ($editing ? $appService->comosian_rate : ''))"
            max="255"
            step="0.01"
            placeholder="Comosian Rate"
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="account_no"
            label="Account No"
            :value="old('account_no', ($editing ? $appService->account_no : ''))"
            maxlength="255"
            placeholder="Account No"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="tax_id"
            label="Tax Id"
            :value="old('tax_id', ($editing ? $appService->tax_id : ''))"
            maxlength="255"
            placeholder="Tax Id"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="description"
          label="{{__('description')}}"
            maxlength="255"
            >{{ old('description', ($editing ? $appService->description : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="options" label="Options" maxlength="255"
            >{{ old('options', ($editing ? json_encode($appService->options) :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="status"
            label="{{ __('status') }}"
            :value="old('status', ($editing ? $appService->status : '1'))"
            maxlength="255"
            placeholder="{{ __('status') }}"
              title="{{__('validation.required')}}"
  required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="default"
            label="Default"
            :value="old('default', ($editing ? $appService->default : '0'))"
            maxlength="255"
            placeholder="Default"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="show_4app"
            label="Show 4app"
            :value="old('show_4app', ($editing ? $appService->show_4app : '1'))"
            maxlength="255"
            placeholder="Show 4app"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 hidmeinform">
        <x-inputs.text
            name="company_id"
            label="{{ __('company_id') }}"
            :value="old('company_id', ($editing ? $appService->company_id : '1'))"
            maxlength="255"
            placeholder="{{ __('company_id') }}"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="created_by" label="{{ __('created_by') }}" required>
            @php $selected = old('created_by', ($editing ? $appService->created_by :auth()->user()->id)) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>{{ __('Please select the User') }}</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="updated_by" label="{{ __('updated_by') }}">
            @php $selected = old('updated_by', ($editing ? $appService->updated_by : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>{{ __('Please select the User') }}</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="deleted_by" label="Deleted At">
            @php $selected = old('deleted_by', ($editing ? $appService->deleted_by : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>{{ __('Please select the User') }}</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
