<div class="container mx-auto p-5 pt-5">
    <div class="flex justify-center items-center">
        <div class="border bg-transparent p-10 rounded-lg shadow-md max-w-md w-full md:max-w-2xl">
            <h1 class="text-2xl font-bold mb-4">Email Us</h1>
            <form action="contact_form.php" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block">Name</label>
                    <input type="text" id="name" name="name" class="border rounded px-4 py-2 w-full">
                </div>
                <div>
                    <label for="email" class="block">Email</label>
                    <input type="email" id="email" name="email" class="border rounded px-4 py-2 w-full">
                </div>
                <div>
                    <label for="message" class="block">Message</label>
                    <textarea id="message" name="message" rows="4" class="border rounded px-4 py-2 w-full"></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>

</div>
