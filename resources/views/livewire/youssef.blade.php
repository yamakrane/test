<div>
    <button type="button" wire:click="$toggle('openModal')">Open Modal</button>

    <x-dialog-modal wire:model="openModal" id="submissionModal">
            <x-slot name="title">
                {{ __('Apply to this job') }}
            </x-slot>

            <x-slot name="content">
                    {{ $this->form }}
            </x-slot>

            <x-slot name="footer">
                <div class="flex space-x-2">
                    <x-buttons.secondary wire:click="$toggle('openModal')" wire:loading.attr="disabled">
                        {{ __('Cancel') }}
                    </x-buttons.secondary>
                </div>
            </x-slot>
    </x-dialog-modal>
</div>
