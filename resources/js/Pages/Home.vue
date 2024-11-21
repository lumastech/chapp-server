<template>
    <Head title="Home" />
    <div class="bg-gray-100 min-h-screen flex flex-col">
        <!-- Header Section -->
        <header class="bg-teal-600 text-white py-6">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-bold">CRESS</h1>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="#features" class="hover:underline">Features</a></li>
                        <li><a href="#about" class="hover:underline">About</a></li>
                        <li><a href="#contact" class="hover:underline">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="bg-teal-100 py-20 text-center">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-teal-600 mb-4">Community Rapid Emergency Support System</h2>
                <p class="text-lg text-gray-700 mb-6">
                    Simplifying emergency communication with one tap or shake.
                </p>
                <Link href="/register" class="bg-teal-600 text-white px-6 py-2 rounded shadow hover:bg-teal-700">
                    Join us today
                </Link>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-16 bg-white">
            <div class="container mx-auto">
                <h3 class="text-3xl font-bold text-center text-teal-600 mb-8">Features</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-100 p-6 rounded shadow text-center">
                        <h4 class="text-xl font-bold mb-4">Emergency Alerts</h4>
                        <p>Send location-based alerts with a single tap or shake.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded shadow text-center">
                        <h4 class="text-xl font-bold mb-4">Health Center Directory</h4>
                        <p>Find nearby health centers with real-time navigation.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded shadow text-center">
                        <h4 class="text-xl font-bold mb-4">Secure & Reliable</h4>
                        <p>Protect user data with encryption and secure connections.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-16 bg-gray-50">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-bold text-teal-600 mb-8">About CRESS</h3>
                <p class="text-lg text-gray-700">
                    CRESS is a mobile and web-based solution designed to enhance emergency response times and provide
                    vital location-based health services.
                </p>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-16 bg-white">
            <div class="container mx-auto text-center">
                <h3 class="text-3xl font-bold text-teal-600 mb-8">Contact Us</h3>
                <p class="text-lg text-gray-700 mb-6">Have questions or feedback? Reach out to us!</p>
                <form class="space-y-4">
                    <input type="text" placeholder="Your Name"
                        class="block w-full md:w-1/2 mx-auto p-3 border border-gray-300 rounded" />
                    <input type="email" placeholder="Your Email"
                        class="block w-full md:w-1/2 mx-auto p-3 border border-gray-300 rounded" />
                    <textarea placeholder="Your Message" rows="5"
                        class="block w-full md:w-1/2 mx-auto p-3 border border-gray-300 rounded"></textarea>
                    <button type="submit" class="bg-teal-600 text-white px-6 py-2 rounded shadow hover:bg-teal-700">
                        Submit
                    </button>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-teal-600 text-white py-4">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 CRESS. All rights reserved. | <Link href="/login">Login</Link></p>
            </div>
        </footer>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/vue3';

export default {
    components: {Link, Head},
    name: "LandingPage",
};
</script>

<style scoped></style>
