<x-admin.wrapper>
    <x-slot name="title">
            {{ __($title) }}
    </x-slot>

    <div class="w-full py-2">
        {!! form($form) !!}
    </div>
</x-admin.wrapper>