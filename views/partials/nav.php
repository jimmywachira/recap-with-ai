<nav class="bg-opacity-50 mt-5">
    <div class=" mx-auto p-4 flex justify-evenly items-center">
        <a href="#" class="text-2xl font-bold text-blue-500 hover:text-blue-700">Blo<span class='text-black '>G*</span></a>
        <ul class="flex space-x-4">
            <!-- <li><a href="index" class="px-4 py-2 rounded-full <?= urlIs('/index') ? 'border-2 border-black text-xl' : 'hover:border-2 hover:border-black '; ?>">Home</a></li>
            <li><a href="about" class="px-4 py-2 rounded-full <?= urlIs('/about') ? 'border-2 border-black text-xl' : 'hover:border-2 hover:border-black '; ?>">About</a></li>
            <li><a href="contact" class="px-4 py-2 rounded-full <?= urlIs('/contact') ? 'border-2 border-black text-xl' : 'hover:border-2 hover:border-black '; ?>">Contact</a></li> -->
            <li><a href="/notes" class="px-4 py-2 rounded-full <?= urlIs('/notes') ? 'border-2 border-black text-xl' : 'hover:border-2 hover:border-black '; ?>">Notes</a></li>
        </ul>
    </div>
</nav>