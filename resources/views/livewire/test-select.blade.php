@push('select2')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
<form wire:submit.prevent="save">
    <div class="m-5">
        <x-select2 multiple wire:model="value" class="pt-5 w-1/2" id="select" :options="$options"/>
    </div>
        <input type="submit">
    </div>
</form>



