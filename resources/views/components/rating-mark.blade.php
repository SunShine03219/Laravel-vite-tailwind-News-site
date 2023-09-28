@props(['disabled' => true, 'rating' => 0])

<div {!! $attributes->merge(['class' => 'flex space-x-1']) !!}
    x-cloak
    x-init="[initValue()]"
    x-data="app({
        @if($attributes->whereStartsWith('wire:model')->first())
            value: @entangle($attributes->wire('model')),
        @else
            value: {{$rating}},
        @endif
        disabled: {{ $disabled ? 1 : 0 }}
    })"
    >
    @for($i = 0; $i < 5; $i++)
        <svg class="w-8 h-8" :class="(disabled && value > {{$i+0.5}}) || (!disabled && tempValue > {{$i+0.5}}) ?  'text-yellow-500' : 'text-gray-500'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
            @click="updateValue({{$i+1}})"
            @mouseover="moveValue({{$i+1}})"
            @mouseout ="leaveValue()">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
        </svg>
    @endfor
</div>

<script>
    function app(config) {
        return {
            value: config.value,
            tempValue: 0,
            disabled: config.disabled,
            initValue() {
                this.tempValue = Number.parseInt(this.value);
            },
            moveValue(val) {
                if (this.disabled) {
                    return;
                }
                this.tempValue = Number.parseInt(val);
            },
            leaveValue() {
                if (this.disabled) {
                    return;
                }
                this.tempValue = Number.parseInt(this.value);
            },
            updateValue(val) {
                if (this.disabled) {
                    return;
                }
                this.tempValue = Number.parseInt(val);
                this.value = Number.parseInt(val);
            }
        }
    }
</script>