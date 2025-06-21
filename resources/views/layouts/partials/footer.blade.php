
<footer class="border-t border-white/10 mt-20 py-8">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <section id="contact" class="py-20 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="backdrop-blur-lg p-6 shadow-lg rounded-lg border border-blue-500 relative">
                        <h3 class="text-xl font-semibold text-gray-400 text-left">Contact Information</h3>
                        <p class="mt-2 text-gray-600 text-left">Feel free to reach out to us through any of the platforms below.</p>
                        <ul class="mt-4 space-y-3 text-left">
                            <li class="cursor-pointer glow-trigger text-gray-400 border-b border-gray-500 pb-2"><i class="fas fa-envelope text-blue-500 mr-2"></i> email@example.com</li>
                            <li class="cursor-pointer glow-trigger text-gray-400 border-b border-gray-500 pb-2"><i class="fab fa-facebook text-blue-700 mr-2"></i> facebook.com/example</li>
                            <li class="cursor-pointer glow-trigger text-gray-400 border-b border-gray-500 pb-2"><i class="fab fa-instagram text-pink-500 mr-2"></i> @example_instagram</li>
                            <li class="cursor-pointer glow-trigger text-gray-400 border-b border-gray-500 pb-2"><i class="fab fa-twitter text-blue-400 mr-2"></i> @example_twitter</li>
                            <li class="cursor-pointer glow-trigger text-gray-400 border-b border-gray-500 pb-2"><i class="fas fa-phone text-green-500 mr-2"></i> +123 456 7890</li>
                        </ul>
                    </div>          
                    
                    <div class="backdrop-blur-lg p-6 shadow-lg rounded-lg border border-blue-500">
                        <form class="space-y-6">
                            <div class="form-group">
                                <input type="text" class="form-input" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-input h-32" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="cta-button w-full hover:scale-[1.02]">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <button class="absolute top-4 left-1/2 transform -translate-x-1/2 cta-button hover:scale-105 transition flex items-center p-2" onclick="scrollToHome()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 bounce-icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a1 1 0 01-1-1V5.414L4.707 9.707a1 1 0 01-1.414-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 01-1 1z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2 text-sm font-semibold">Back to Home</span>
            </button>
            
        </section>
        
        <style>
          
        </style>
        
        <p class="text-white/60">&copy; Men Portfolio.</p>
    </div>
</footer>

<script>
function scrollToHome() {
    const homeSection = document.getElementById('home');
    if (homeSection) {
        homeSection.scrollIntoView({ behavior: 'smooth' });
    }
}


</script>


