<div class="max-w-md mx-auto mt-20 text-white border p-5 rounded-xl">
    <h1 class="py-2 font-bold text-xl">{{ $home->header }}</h1>
    <p class="leading-relaxed text-justify">{{ $home->message }}</p>
    <button id="toggle-btn" class="mt-4 text-blue-500 focus:outline-none">Read More</button>
    <button id="hide-btn" class="hidden mt-4 text-blue-500 focus:outline-none">Hide</button>
</div>

<script>
    const moreTextEl = document.getElementById('more-text');
    const toggleBtnEl = document.getElementById('toggle-btn');
    const hideBtnEl = document.getElementById('hide-btn');

    toggleBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });

    hideBtnEl.addEventListener('click', () => {
        moreTextEl.classList.toggle('hidden');
        toggleBtnEl.classList.toggle('hidden');
        hideBtnEl.classList.toggle('hidden');
    });
</script>
