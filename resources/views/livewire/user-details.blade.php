<div>
    <x-label for="name">First name</x-label>
    <x-input wire:model.lazy="name" class="mb-8" type="text" />
    <x-label for="lastName">Last name</x-label>
    <x-input wire:model="lastName" class="mb-8" type="text" />

    {{-- <select wire:model.lazy="name">
        <option value="Jenna">Jenna</option>
        <option value="John">John</option>
        <option value="Max">Max</option>
    </select> --}}

    <h3 class="mb-2 text-4xl font-somibold leading-normal text-gray-800">
        {{ $name }} {{ $lastName }}
    </h3>
    <div class="mt-0 mb-2 text-sm font bold leading-normal text-gray-500 uppercase">
        <i class="mr-2 text-lg text-gray-500 fas-fa-briefcase"></i>
        Los Angeles, California
    </div>
    <div class="mt-10 mb-2 text-gray-700">
        <i class="mr-2 text-lg text-gray-500 fas fa-briefcase"></i>Solution Manager - Creative Tim Officer
    </div>
    <div class="mb-2 text-gray-700">
        <i class="mr-2 text-lg text-gray-500 fas fa-university"></i>University of Computer Science
    </div>

    <livewire:connect-button :name="$name"/>
</div>
