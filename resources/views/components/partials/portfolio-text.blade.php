{{-- resources/views/components/partials/portfolio-text.blade.php --}}

<div class="flex flex-col justify-center">
    <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 leading-tight">
        {!! $title !!}
    </h3>
    <div class="mt-6 border-t border-gray-200 pt-6">
        <dl class="grid grid-cols-2 gap-x-6 gap-y-4 text-sm">
            <div>
                <dt class="text-gray-500">Client</dt>
                {{-- font-semibold dihapus dari sini --}}
                <dd class="text-gray-800">{{ $client }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Event Category</dt>
                {{-- font-semibold dihapus dari sini --}}
                <dd class="text-gray-800">{{ $category }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Venue</dt>
                {{-- font-semibold dihapus dari sini --}}
                <dd class="text-gray-800">{{ $venue }}</dd>
            </div>
            <div>
                <dt class="text-gray-500">Total Participant</dt>
                {{-- font-semibold dihapus dari sini --}}
                <dd class="text-gray-800">{{ $participants }}</dd>
            </div>
        </dl>
    </div>
</div>