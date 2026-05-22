@php
    $url = $getRecord()->getFirstMediaUrl('audio');
@endphp

<div class="px-4 py-2">
    @if($url)
        <audio controls class="h-8">
            <source src="{{ $url }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    @else
        <span class="text-gray-400 italic text-sm">No recording</span>
    @endif
</div>
