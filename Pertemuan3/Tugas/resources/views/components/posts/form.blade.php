@props(['categories'])

{{-- Form Body --}}
<form action="{{ route('dashboard.store') }}" method="POST">
    @csrf
    <div class="grid gap-4 grid-cols-2">
        {{-- Title --}}
        <div class="col-span-2">
            <label for="title" class="block mb-2.5 text-sm font-medium text-heading">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Event post title">
        </div>

        {{-- Category --}}
        <div class="col-span-2">
            <label for="category_id" class="block mb-2.5 text-sm font-medium text-heading">Category</label>
            <select name="category_id" id="category_id" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ (old('category_id') == $category->id ? ' selected' : '' ) }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Excerpt --}}
        <div class="col-span-2">
            <label for="excerpt" class="block mb-2.5 text-sm font-medium text-heading">Excerpt</label>
            <textarea name="excerpt" id="excerpt" rows="3" class="block bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body" placeholder="Write a short excerpt">{{ old('excerpt') }}</textarea>
        </div>

        {{-- Body --}}
        <div class="col-span-2">
            <label for="body" class="block mb-2.5 text-sm font-medium text-heading">Body</label>
            <textarea name="body" id="body" rows="8" class="block bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body" placeholder="Write your post content here">{{ old('body') }}</textarea>
        </div>
    </div>

    {{-- Form Footer --}}
    <div class="mt-6 flex items-center space-x-4 border-t border-default pt-4 md:pt-6 md:mt-6">
        <button type="submit" class="inline-flex items-center text-white bg-brand hover:bg-brand-dark focus:ring-4 focus:outline-none focus:ring-brand-shadow font-medium rounded-base text-sm px-4 py-2.5 text-center shadow-xs transition">
            Publish
        </button>
        <a href="{{ route('dashboard') }}" class="text-body bg-neutral-secondary-medium box-border bg-neutral-default-medium border border-neutral-tertiary-medium text-heading hover:text-heading focus:ring-brand focus:outline-none focus:ring-brand-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 transition-none">
            Cancel
        </a>
    </div>
</form>
