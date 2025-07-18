<?php
$journeyCards = [
    [
        'image' => 'gambar/SMK_SG.PNG',
        'title' => 'Technology Stack',
        'description' => 'saya sebagai firman saputra polisi bulan sabit.'
    ],
    [
        'image' => 'gambar/SMK_SG.PNG',
        'title' => 'Technology Stack',
        'description' => 'saya sebagai firman saputra polisi bulan sabit.'
    ],
    [
        'image' => 'gambar/horison.png',
        'title' => 'Technology Stack',
        'description' => 'saya sebagai firman saputra polisi bulan sabit.'
    ],
    [
        'image' => 'gambar/horison.png',
        'title' => 'Technology Stack',
        'description' => 'saya sebagai firman saputra polisi bulan sabit.'
    ],
    [
        'image' => 'gambar/UISI.png',
        'title' => 'Technology Stack',
        'description' => 'saya sebagai firman saputra polisi bulan sabit.'
    ],
    [
        'image' => 'gambar/UISI.png',
        'title' => 'Technology Stack',
        'description' => 'saya sebagai firman saputra polisi bulan sabit.'
    ],
    [
        'image' => 'gambar/scomptec.png',
        'title' => 'Technology Stack',
        'description' => 'saya sebagai firman saputra polisi bulan sabit.'
    ],
    [
        'image' => 'gambar/scomptec.png',
        'title' => 'Technology Stack',
        'description' => 'saya sebagai firman saputra polisi bulan sabit.'
    ],
];
?>
<section id="testi" class="relative min-h-screen flex flex-col items-center pt-20 mx-6 my-0 custom-border text-white overflow-hidden border border-blue-500">
    <div class="text-center">
        <h2 class="text-4xl font-bold font-mono bg-gradient-to-r from-blue-600 to-cyan-200 bg-clip-text text-transparent animate-fade-in-up mt-6">
            Journey
        </h2>
        <p class="text-sm mt-4 font-mono">
            <span class="text-blue-400">{</span>
            <span class="text-gray-400">MY JOURNEY TO A BETTER LIFE</span>
            <span class="text-blue-400">}</span>
        </p>
    </div>

    <div class="container-testi w-full mt-36 px-4">
        <div class="journey-wrapper flex gap-8 overflow-x-auto">
            <?php foreach($journeyCards as $card): ?>
                <div class="card flex-shrink-0 min-w-[200px] max-w-[300px] bg-gray-900/40 rounded-xl p-4 backdrop-blur-sm border border-gray-700 shadow-xl">
                    <div class="image flex justify-center items-center p-4 bg-white rounded-lg">
                        <img src="<?php echo htmlspecialchars($card['image']); ?>" alt="Image" class="h-24 w-24 object-contain">
                    </div>
                    <div class="content mt-4">
                        <h3 class="text-xl font-semibold mb-2">
                            <?php echo htmlspecialchars($card['title']); ?>
                        </h3>
                        <p class="text-gray-400 whitespace-normal">
                            <?php echo htmlspecialchars($card['description']); ?>
                        </p>
                    </div>    
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <button class="absolute bottom-1 right-4 cta-button hover:scale-105 transform transition flex items-center p-0.5" onclick="scrollToSkilss()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 bounce-icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
    </button>
</section>


<script>
    function scrollToSkilss() {
        const skillsSection = document.getElementById('skills');
        if (skillsSection) {
            skillsSection.scrollIntoView({ behavior: 'smooth' });
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const journeyWrapper = document.querySelector('.journey-wrapper');
        if (journeyWrapper && window.innerWidth < 1024) {
            journeyWrapper.scrollLeft = 0;
        }
    });
</script>