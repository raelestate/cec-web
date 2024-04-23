<div class="max-w-md mx-auto mt-20 text-white border p-5 rounded-xl">
    <h1 class="py-2 font-bold text-xl ">Welcome to Casino Español!
    </h1>
    <p class="leading-relaxed text-justify">
        The Casino Español de Cebu, Inc. is a non-stock, and non-profit corporation domiciled in the City of Cebu,
        Republic of the Philippines, organized for the purpose of providing its members, their spouses and minor
        children, social, recreational, sports and cultural facilities and

        <span class="hidden" id="more-text">
            activities proper for a good organization
            fomenting unity, promoting the Spanish language and culture, and the spirit of harmony and cooperation
            among
            members, absolutely disregarding racial prejudice, political creed and religious beliefs.<br><br><br>
            The Spanish Tradition lives on through Casino Español de Cebu. It is Cebu’s club of choice - a well
            patronized,
            financially sustainable world-class landmark where families, friends and guests relax, meet and consider
            it
            their second home; where members, guests and Cebu’s elite gather to talk and transact business.
        </span>
    </p>
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
