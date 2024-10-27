<div class=" my-8 flex flex-col items-center text-white gap-10 flex-1">
    <form action="" class="w-full print:hidden">
            <textarea wire:model.live="message" name="" id="" cols="30" rows="10"
                      class="bg-white/10 text-white py-2 px-3 rounded-xl w-full"></textarea>
        <div class="mt-2 flex justify-end">
            <button type="button" @disabled(!$message) class="bg-blue-500 font-semibold text-sm px-4 py-1 rounded-md disabled:bg-gray-300" @click="window.print()">Print</button>
        </div>
    </form>
    <x-code :message="$message" :letters="$this->letters"/>
    @if($message)
        <x-legend :letters="$this->letters"/>
    @endif
</div>
