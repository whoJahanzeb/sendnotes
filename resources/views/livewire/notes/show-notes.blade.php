<?php

use Livewire\Volt\Component;
use App\Models\Note;
new class extends Component {
    public function with(): array
    {
        return [
            'notes' => Auth::user()->notes()->orderBy('send_date', 'asc')->get(),
        ];
    }
}; ?>

<div>
    <div class="space-y-2">
        <div class="grid grid-cols-2 gap-4 mt-12">
            @foreach ($notes as $note)
                <x-card wire:key="{{ $note->id }}">
                    <div class="flex justify-between">
                        <a href="" class="text-xl font-bold hover:underline hover:text-indigo-600"
                            wire:navigate>{{ $note->title }}</a>
                        <div>
                            {{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y') }}
                        </div>
                    </div>
                </x-card>
            @endforeach
        </div>
    </div>
</div>
