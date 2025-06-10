<?php
$skills = [
    [
        'name' => 'JavaScript',
        'icon' => 'fab fa-js-square',
        'color' => 'text-yellow-400'
    ],
    [
        'name' => 'Java',
        'icon' => 'fab fa-java',
        'color' => 'text-red-500'
    ],
    [
        'name' => 'PHP',
        'icon' => 'fab fa-php',
        'color' => 'text-purple-500'
    ],
    [
        'name' => 'Tailwind CSS',
    'icon' => '',
    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 33" class="w-10 h-10 md:w-14 md:h-14 fill-current text-[#06B6D4]">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z"/>
    </svg>',
    'color' => 'text-[#06B6D4]'
    ],
    [
        'name' => 'GitHub',
        'icon' => 'fab fa-github',
        'color' => 'text-black'
    ],
    [
        'name' => 'Bootstrap',
        'icon' => 'fab fa-bootstrap',
        'color' => 'text-[#7952B3]'
    ],
    [
        'name' => 'React',
        'icon' => 'fab fa-react',
        'color' => 'text-[#61DAFB]'
    ],
    [
        'name' => 'CSS3',
        'icon' => 'fab fa-css3',
        'color' => 'text-blue-500'
    ],
    [
        'name' => 'Figma',
        'icon' => 'fab fa-figma',
        'color' => 'bg-[linear-gradient(135deg,#F24E1E_0%,#FF7262_25%,#A259FF_50%,#1ABCFE_75%,#0ACF83_100%)] text-transparent bg-clip-text'
    ],
    [
        'name' => 'HTML5',
        'icon' => 'fab fa-html5',
        'color' => 'text-red-500'
    ],
    [
        'name' => 'Laravel',
        'icon' => 'fab fa-laravel',
        'color' => 'text-red-500'
    ],
    [
        'name' => 'SQL',
        'icon' => 'fas fa-database',
        'color' => 'text-gray-400'
    ]
];
?>

<section id="skills"  class="relative min-h-screen flex flex-col items-center justify-between pt-20 mx-4 md:mx-6 border border-blue-500 text-white">
    <div class="text-center">
        <h2 class="text-3xl md:text-4xl font-bold font-mono bg-gradient-to-r from-blue-600 to-cyan-200 bg-clip-text text-transparent animate-fade-in-up mt-6">
            Tech Stack Mastery
        </h2>
        <p class="text-xs md:text-sm mt-3 md:mt-4 font-mono">
            <span class="text-blue-400">{</span>
            <span class="text-gray-400">TECHNOLOGIES I'VE RECENTLY WORKED WITH</span>
            <span class="text-blue-400">}</span>
        </p>
    </div>

    <!-- Marquee Section -->
    <div class="marquee mt-8 md:mt-10">
        <div class="marquee-overlay"></div>
        <ul class="marquee-content">
            <?php foreach ($skills as $skill): ?>
            <li>
                <div class="flex flex-col items-center">
                    <div class="bg-gray-600/20 p-3 md:p-4 rounded-full">
                        <?php if (isset($skill['svg'])): ?>
                            <div class="flex items-center justify-center">
                                <?php echo $skill['svg']; ?>
                            </div>
                        <?php elseif (isset($skill['image'])): ?>
                            <img src="<?php echo $skill['image']; ?>" 
                                 alt="<?php echo $skill['name']; ?> Logo" 
                                 class="<?php echo $skill['imageClass']; ?>">
                        <?php else: ?>
                            <i class="<?php echo $skill['icon']; ?> <?php echo $skill['color']; ?> text-4xl md:text-5xl"></i>
                        <?php endif; ?>
                    </div>
                    <h3 class="text-base md:text-lg text-center font-semibold mt-3 md:mt-4"><?php echo $skill['name']; ?></h3>
                </div>
            </li>
        <?php endforeach; ?>
        </ul>
        <div class="marquee-overlay right"></div>
    </div>

    <div class="text-sm md:text-base text-center text-mono text-gray-500 
            mb-14 md:mb-16 
            max-w-sm sm:max-w-md md:max-w-lg lg:max-w-3xl 
            px-4 -mt-6 md:mt-8
            leading-relaxed sm:leading-loose
            tracking-tight sm:tracking-normal
            mx-auto">
    <p>With a robust background as a developer, I possess substantial expertise in utilizing a diverse range of technologies. I have successfully developed & maintained numerous projects leveraging these tools, and I remain deeply committed to continuous learning and professional growth.</p>
</div>

    <button class="absolute bottom-1 right-2 md:right-4 cta-button hover:scale-105 transform transition flex items-center p-0.5" onclick="scrollToProjects()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 bounce-icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
    </button>



    <script>
        
        function scrollToProjects() {
            const projectsSection = document.getElementById('projects');
            if (projectsSection) {
                projectsSection.scrollIntoView({ behavior: 'smooth' });
            }
        }
        
        window.addEventListener('resize', function() {
            adjustMarqueeForScreenSize();
        });
        
    </script>
</section>