<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Name"/>
        @error('form.name')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="address" :value="__('Address')"/>
        <x-text-input wire:model="form.address" id="address" name="address" type="text" class="mt-1 block w-full" autocomplete="address" placeholder="Address"/>
        @error('form.address')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="phone" :value="__('Phone')"/>
        <x-text-input wire:model="form.phone" id="phone" name="phone" type="text" class="mt-1 block w-full" autocomplete="phone" placeholder="Phone"/>
        @error('form.phone')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>