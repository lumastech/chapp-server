<template>
    <section id="contact" class="mt-16 max-w-7xl mx-auto p-2">
        <div class="max-7xl mx-auto p-2 border border-secondary-300 rounded-md">
            <h2 class="text-2xl text-primary-600">Contact Us</h2>
            <p class="mb-4">Ready to get started? Reach out to us today!</p>
            <div class="grid md:grid-cols-3 gap-4 overflow-hidden">
                <img src="../../assets/landing_cover.jpg" alt="1 Bedroom House Plan" class="aspect-video w-full rounded shadow">
                <form action="contact.php" method="post" class="md:col-span-2">
                    <input type="text" name="name" placeholder="Your Name" required class="block w-full bg-secondary-600 rounded border border-secondary-300 mb-3 placeholder-secondary-100">
                    <input type="email" name="email" placeholder="Your Email" required class="block w-full bg-secondary-600 rounded border border-secondary-300 mb-3 placeholder-secondary-100">
                    <textarea name="message" placeholder="Your Message" required class="block w-full bg-secondary-600 rounded border border-secondary-300 mb-3 placeholder-secondary-100"></textarea>
                    <div class="text-right">
                        <button type="submit" class="bg-primary-600 px-4 py-2 rounded hover:bg-primary-800 transition shadow">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>