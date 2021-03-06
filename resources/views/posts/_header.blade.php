<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="lg:flex lg:flex-row space-y-2 lg:space-y-0 lg:space-x-4 mt-4 justify-center">
        <!--  Category -->
    <x-category-dropdown />


{{--        <!-- Other Filters -->--}}
{{--        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">--}}
{{--                <select name="category"--}}
{{--                        class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold"--}}
{{--                >--}}
{{--                    <option value="category" disabled selected>Categories</option>--}}
{{--                    @foreach($categories as $category)--}}
{{--                        <option value="{{$category->slug}}">{{$category->name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--                <x-icon.down-arrow class="absolute pointer-events-none"/>--}}
{{--        </div>--}}

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="">


                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{request('search')}}"
                >
            </form>
        </div>
    </div>
</header>
