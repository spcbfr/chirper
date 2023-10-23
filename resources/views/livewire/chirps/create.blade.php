<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $message = '';
}; ?>


<div>
    <form wire:submit="store">
        <textarea
            name="message"  cols="30" rows="10"
            wire:model='message' 
            placeholder="{{ __('What\'s on your mind?') }}"
            class="block w-full border-gray-300 focus:border-indigo-300
            focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm "
        ></textarea>
        <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
        
    </form>
</div>
