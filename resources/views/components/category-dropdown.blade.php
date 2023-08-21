<x-dropdown title="Categories" name="category" :hiddenInputs="['author', 'search']"
    class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
    <x-slot name="options">
        <option value="">All</option>

        @foreach ($categories as $category)
        <option value="{{$category->name}}">{{$category->name}}</option>
        @endforeach
    </x-slot>
</x-dropdown>