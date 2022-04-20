<div class="col-md-5">
    <div class="Multiple-group">
        <a  type="button" value="-"  id="decrease" wire:click="decrement({{ $id }})"
         class="button-minus border rounded-circle  icon-shape icon-sm mx-1
            "onclick="decreaseValue({{ $key }})">
            <i class="bi bi-dash-circle"></i>
        </a>
        <span id="number_{{ $key }}">{{ $inputQty }} </span>
        <a type="button" value="+" wire:click="increment({{ $id }})" id="increase" class="button-plus border rounded-circle icon-shape icon-sm"
        onclick="increaseValue({{ $key }})" >
            <i class="bi bi-plus-circle"></i>
        </a>
    </div>
</div>
@if (session()->has('max_'.$id))
<div class="alert alert-danger">
    {{ session('max_'.$id) }}
</div>
@endif
@error('quantity') <div class="lvError">{{ $message }}</div> @enderror
