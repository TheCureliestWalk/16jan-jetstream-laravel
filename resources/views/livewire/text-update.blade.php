<!-- Earnings (Monthly) Card Example -->
<div class="col-xl col-md mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">{{ $title }}</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Livewire Test update</div>
                    <div class="text-md-left">Text: {{ $message }}</div>

                    <form action="">
                        <input type="text" wire:model="message">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
