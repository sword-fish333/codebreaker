@props([
    'message',
    'letters'
])
<div {{$attributes->class(['text-center text-white flex flex-wrap gap-7 mt-auto'])}}>
    @foreach(explode(' ',$message) as $word)
        @if(emoji($word))
            <span>{!!html_entity_decode($word)!!}</span>
            @continue
        @endif
        <div class="word flex gap-x-2">
            @foreach(str_split($word) as $character )
                <div>
                <span
                    class="material-symbols-outlined character !text-3xl print:text-black">{{$this->letters[strtolower($character)]??$character}}</span>
             <div class="bg-gray-200 w-12 h-12"></div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
