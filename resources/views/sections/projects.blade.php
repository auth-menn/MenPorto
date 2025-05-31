<?php
$projects = [
    [
        'image' => 'https://source.unsplash.com/random/800x600?code1',
        'title' => 'E-Commerce Platform',
        'description' => 'Full-stack e-commerce solution with Laravel and Vue.js'
    ],
    [
        'image' => 'https://source.unsplash.com/random/800x600?code2',
        'title' => 'Portfolio Website',
        'description' => 'Personal portfolio built with React and Tailwind CSS'
    ],
    [
        'image' => 'https://source.unsplash.com/random/800x600?code3',
        'title' => 'Social Media Dashboard',
        'description' => 'Analytics platform with real-time data visualization'
    ],
    [
        'image' => 'https://source.unsplash.com/random/800x600?code4',
        'title' => 'Mobile Banking App',
        'description' => 'Secure mobile banking application with Flutter'
    ],
    [
        'image' => 'https://source.unsplash.com/random/800x600?code5',
        'title' => 'Task Management System',
        'description' => 'Collaborative project management tool'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Section</title>
</head>
<body class="bg-gray-900 text-white">
    <section id="projects" class="relative min-h-screen flex flex-col items-center justify-between pt-20 mx-4 md:mx-6 border border-blue-500">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-mono bg-gradient-to-r from-blue-600 to-cyan-200 bg-clip-text text-transparent animate-fade-in-up mt-6">
                Featured Projects
            </h2>
            <p class="text-sm mt-4 font-mono">
                <span class="text-blue-400">{</span>
                <span class="text-gray-400">PROJECTS I'VE HAD THE PLEASURE OF WORKING ON</span>
                <span class="text-blue-400">}</span>
            </p>
        </div>
        
        <div class="w-full overflow-hidden flex justify-center items-center flex-grow">
            <div class="w-full max-w-[1210px] px-4">
                <div class="overflow-x-auto custom-scrollbar">
                    <div class="flex space-x-4 md:space-x-6 pb-6">
                        <?php foreach($projects as $project): ?>
                            <div class="flex-shrink-0 w-[280px] md:w-[340px] lg:w-[370px] transition-transform duration-300 hover:scale-105">
                                <div class="border border-blue-500 rounded-lg overflow-hidden shadow-lg flex flex-col h-full">
                                    <div class="relative h-48 w-full">
                                        <img 
                                            src="<?php echo htmlspecialchars($project['image']); ?>" 
                                            alt="<?php echo htmlspecialchars($project['title']); ?>" 
                                            class="w-full h-full object-cover"
                                        >
                                    </div>
                                    <div class="p-4 bg-gray-800/50 flex-grow flex flex-col">
                                        <h3 class="text-lg font-semibold mb-2 text-white">
                                            <?php echo htmlspecialchars($project['title']); ?>
                                        </h3>
                                        <p class="text-gray-300 text-sm flex-grow">
                                            <?php echo htmlspecialchars($project['description']); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <button class="absolute bottom-1 right-4 cta-button hover:scale-105 transform transition flex items-center p-0.5" onclick="scrollToHobby()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 bounce-icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </button>

        <script>
            function scrollToHobby() {
                const hobbySection = document.getElementById('hobby');
                if (hobbySection) {
                    hobbySection.scrollIntoView({ behavior: 'smooth' });
                }
            }
        </script>
    </section>
</body>
</html>