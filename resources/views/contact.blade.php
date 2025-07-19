<x-layout>
    <x-slot:title title>Contact Us</x-slot:title>
    <form action="/contact" method="POST" novalidate>
        @csrf
        @if($errors->any())
            <div class="mb-4">
                <ul class="list-disc pl-5 text-red-500">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-4">
            <label for="name" class="block text-sm font-bold mb-2">Name</label>
            <input class="w-full px-3 py-2 border rounded-md focus:outline focus:border-indigo-500 text-black" type="text" id="name" name="name" value="{{ old("name") }}"required />
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-bold mb-2">Email Address</label>
            <input class="w-full px-3 py-2 border rounded-md focus:outline focus:border-indigo-500 text-black" type="email" id="email" name="email" value="{{ old("email") }}" required />
        </div>
        <div class="mb-6">
            <label for="message" class="block text-sm font-bold mb-2">Message</label>
            <textarea class="w-full px-3 py-2 border rounded-md focus:outline focus:border-indigo-500 text-black" id="message" name="message">{{ old("message") }}</textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Send Message</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
</x-layout>