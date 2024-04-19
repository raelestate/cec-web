<div class="transparent border rounded shadow-lg p-6 rounded-lg">
    <h2 class="text-3xl font-bold mb-4">Vision</h2>
    <p class="text-lg mb-8">
        The Spanish Tradition lives on through Casino Español de Cebu.
        It is Cebu's club of choice - a well patronized, financially sustainable world-class landmark:
        - where families, friends and guests relax, meet and consider it their second home;
        - where members, guests and Cebu's elite gather to talk and transact business.
        We are a socially-relevant Club. As we grow as an organization, we help create job opportunities for those who
        are qualified.
    </p>
    <span class="hidden" id="4">
        SPECIFIC ACTION PLANS TO ACHIEVE THE VISION<br>

        1. Implement calendar of Spanish cultural activities (especially those related to food and cuisine)<br>
        2. Play host to foreign Spanish personalities.<br>
        3. Review pricing strategy until economy improves.<br>
        4. Encourage shareholders to be members.<br>
        5. Continue revival of old menus.<br>
        6. Leverage on the existing strengths of the club in order to increase patronage.
    </span>
    <button id="5" class="mt-4 text-blue-500 focus:outline-none">Read More</button>
    <button id="6" class="hidden mt-4 text-blue-500 focus:outline-none">Hide</button>
</div>

<script>
    const e = document.getElementById('4');
    const f = document.getElementById('5');
    const g = document.getElementById('6');

    f.addEventListener('click', () => {
        e.classList.toggle('hidden');
        f.classList.toggle('hidden');
        g.classList.toggle('hidden');
    });

    g.addEventListener('click', () => {
        e.classList.toggle('hidden');
        f.classList.toggle('hidden');
        g.classList.toggle('hidden');
    });
</script>
