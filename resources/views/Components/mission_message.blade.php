<div class="transparent border shadow-lg p-6 rounded-lg">
    <h2 class="text-3xl font-bold mb-4">Mission</h2>
    <p class="text-lg mb-8">
        To offer excellent food with efficient services at the most competitive prices that delight our members and
        their guests.
        To ensure that our impressive physical structures, excellent recreational and leisure facilities and amenities
        are well-maintained;
        To promote an atmosphere of collegiality and camaraderie among its members through various relevant activities.
    </p>
    <span class="hidden" id="missionDetails">
        SPECIFIC ACTION PLANS TO ACHIEVE THE MISSION
        <ul>
            1. Re-align existing training programs to address: consistency in food preparation, compliance to F &amp; B
            SOP , inventory monitoring of stocks, revival of traditional service, review of costing of menu items,
            20-4-7, attractive marketing packages for members to avail of, no recurring complaints on food and
            service, all personnel are familiar with the operation of all equipment/facilities assigned to him.<br>
            2. Implement 5S and ensure findings of 5S audits are addressed.<br>
            3. Continue implementing the existing programs for preventive maintenance.<br>
            4. Consistently implement weekly inspections.<br>
            5. Conduct survey/focus group discussions among members and team leaders and address priority findings.
            <br>
            6. Consistently implement weekly inspections/checking and conduct of random roving.<br>
            7. Acquire metal detectors/reflector mirrors; regular inspection of entering cars.<br>
            8. Conduct seminar or proper handling of bomb threats (for team leaders and team members).<br>
            9. Implement existing programs for members and guest and open these programs to the public, if there are
            vacant slots.<br>
            10. Sponsor musical events for members and guests.<br>
            11. Promote and sponsor multi-cultural special events and special occasions.<br>
        </ul>
    </span>
    <button id="showMissionDetails" class="mt-4 text-blue-500 focus:outline-none">Read More</button>
    <button id="hideMissionDetails" class="hidden mt-4 text-blue-500 focus:outline-none">Hide</button>
</div>

<script>
    const missionDetails = document.getElementById('missionDetails');
    const showMissionDetailsBtn = document.getElementById('showMissionDetails');
    const hideMissionDetailsBtn = document.getElementById('hideMissionDetails');

    showMissionDetailsBtn.addEventListener('click', () => {
        missionDetails.classList.remove('hidden');
        showMissionDetailsBtn.classList.add('hidden');
        hideMissionDetailsBtn.classList.remove('hidden');
    });

    hideMissionDetailsBtn.addEventListener('click', () => {
        missionDetails.classList.add('hidden');
        showMissionDetailsBtn.classList.remove('hidden');
        hideMissionDetailsBtn.classList.add('hidden');
    });
</script>
