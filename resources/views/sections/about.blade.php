<section id="about"  class="relative min-h-screen flex flex-col items-center pt-20  mx-6 my-0 custom-border text-white overflow-hidden border border-blue-500">
    <div class="text-center">
        <h2 class="text-4xl font-bold font-mono bg-gradient-to-r from-blue-600 to-cyan-200 bg-clip-text text-transparent animate-fade-in-up mt-6">
            About
        </h2>
        <p class="text-sm mt-4 font-mono">
            <span class="text-blue-400">{</span>
            <span class="text-gray-400">MEN IDENTITY INFORMATION</span>
            <span class="text-blue-400">}</span>
        </p>
    </div>  

    <div class="max-w-7xl  mx-auto px-4 sm:px-6 lg:px-8 w-full flex flex-col md:flex-row items-center justify-center gap-8 relative">
        <!-- Gambar karakter -->
        <div class="relative w-full md:w-1/2 flex items-center justify-center group order-2 md:order-1">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-cyan-400/20 rounded-xl mesh-pattern animate-mesh-glow"></div>
            <img 
                src="{{ asset('gambar/about.png') }}" 
                alt="Character" 
                class="w-3/4 sm:w-full max-w-md drop-shadow-lg relative transform transition-all duration-300 ease-in-out cursor-pointer rounded-xl border-2 border-transparent group-hover:border-blue-400/30">
        </div>
        
        <div class="relative bg-gray-900/40 border border-gray-700 rounded-lg shadow-xl text-white w-full md:w-1/2 max-w-xl p-6 order-1 md:order-2 mb-8 md:mb-0 terminal-box">
    
            <h5 class="absolute left-[-75px] top-[65%] sm:top-[70%] md:top-[62%] lg:top-[65%] transform -translate-y-1/2 text-lg font-mono text-gray-300 flex items-center animate-slide-right">
                click 👉
            </h5>
           
            <div class="border-b border-gray-700 px-4 py-2 flex items-center">
                <span class="w-3 h-3 mr-2 rounded-full bg-red-500"></span>
                <span class="w-3 h-3 mr-2 rounded-full bg-yellow-300"></span>
                <span class="w-3 h-3 rounded-full bg-green-400"></span>
                <span class="ml-auto text-xs text-gray-400">Executing: introduceSelf.js</span>
            </div>
            <div class="mt-4 text-green-400 font-mono">
                <p class="cursor-pointer"><span class="text-blue-400">self</span>.<span class="text-yellow-300">AboutMe</span>()</p>
                <p class="text-gray-400 cursor-pointer" id="triggerBio">> click here to see what I am about</p>
                <div id="bio" class="hidden mt-2"></div>
            </div>
        </div>
        
    </div>

    <button class="absolute bottom-1 right-4 cta-button hover:scale-105 transform transition flex items-center p-0.5" onclick="scrollToExperience()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 bounce-icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
    </button>
</section>


<script>

    function scrollToExperience() {
    const experienceSection = document.getElementById('experience');
    console.log("Experience section:", experienceSection);
    if (experienceSection) {
        experienceSection.scrollIntoView({ behavior: 'smooth' });
    } 
}

</script>
</section>




