<x-layout>
    <section class="px-6 container mx-auto flex h-full flex-col" style="max-width: 1000px;">
            <header class="flex">
                <h1>
                    <img src="./logo.svg" alt="{{config('app.name')}}" aria-label="{{config('app.name')}}" class="print:invert w-52 print:w-36">
                </h1>
            </header>
            <livewire:create-code/>
    </section>
</x-layout>
