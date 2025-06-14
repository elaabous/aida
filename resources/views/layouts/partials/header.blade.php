<header class="bg-[#141414] p-4 flex justify-between items-center border-b border-gray-700">
    <div class="text-lg font-semibold">Hello, {{ Auth::user()->name ?? 'User' }}</div>
    <div>
        <button class="bg-green-500 hover:bg-green-600 text-black px-4 py-1 rounded">Logout</button>
    </div>
</header>
