<section id="home" class="min-h-screen flex items-center pt-20 relative mx-6 my-0 border border-blue-500 text-white overflow-hidden">
    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 relative flex flex-col items-center">
        <h1 class="title-right font-serif text-5xl mt-36 md:text-7xl font-bold bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent animate-fade-in-up text-center md:text-right">
            Hi, I'm Men
        </h1>
        
        <p class="subtitle-left font-serif text-xl md:text-2xl mt-1 md:mt-40 font-extrabold text-zinc-300 relative z-10 drop-shadow-[0_5px_15px_rgba(0,0,0,0.5)] text-center md:text-left">
            front end developer & UI Designer
        </p>
        
        <div class="relative w-full flex items-center mt-8 md:mt-20 justify-center">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-cyan-400/20 rounded-xl mesh-pattern"></div>
            <img
                src="{{ asset('gambar/hero.png') }}"
                alt="Character"
                class="w-full max-w-xs md:max-w-lg drop-shadow-lg rounded-xl border-2 border-transparent transform scale-110 md:scale-100">
            <div class="btn-container mb-3">
                <button class="cta-button hover:scale-105 transform transition" onclick="scrollToAbout()">
                    Let's see
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 bounce-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
</style>

<script>
function scrollToAbout() {
    const aboutSection = document.getElementById('about');
    if (aboutSection) {
        aboutSection.scrollIntoView({ behavior: 'smooth' });
    }
}
</script>