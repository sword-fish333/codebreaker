@props([
    'letters'
])
<div class="flex mb-10 flex-wrap">
    @foreach($letters as $letter=>$symbol)
        <div class="flex flex-col items-center border border-white/10 print:border-gray-400 p-2">
            <span class="font-bold mb-2 print:text-black">{{ucfirst($letter)}}</span>
            <span class="material-symbols-outlined character print:text-black text-2xl">{{$symbol}}</span>

        </div>
    @endforeach
</div>
