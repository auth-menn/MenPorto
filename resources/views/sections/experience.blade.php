<?php
$experience = [
    [
        'category' => 'Scomptec',
        'title' => 'Programmer',
        'subtitle' => 'Surabaya, Indonesia | Des. 2023 - Feb. 2024',
        'items' => [
            'Analyzed user needs and defined features for marketing through the official website.',
            'Managed and updated website content and maintained stability.',
            'Created social media content for TikTok and Instagram on programming topics.',
            'Maintained website versioning to ensure continuous stability.',
        ]
    ],
    [
        'category' => 'Universitas Internasional Semen Indonesia (UISI)',
        'title' => 'Inventory & Labeling Staff',
        'subtitle' => 'Gresik, Indonesia | Mar. 2023 - Apr. 2023',
        'items' => [
            'Recorded incoming and outgoing items and updated inventory systems.',
            'Ensured labeling compliance with company standards.',
            'Prepared reports regarding labeling status regularly.',
            'Verified and updated inventory data for accuracy.',
        ]
    ],
    [
        'category' => 'Horison GKB Gresik',
        'title' => 'Designer & Photographer',
        'subtitle' => 'Gresik, Indonesia | Jan. 2020 - Feb. 2020',
        'items' => [
            'Designed brochures, flyers, and promotional materials for hotel marketing.',
            'Created and edited visual content for social media and marketing campaigns.',
            'Captured and enhanced event photographs using Photoshop and Lightroom.',
            'Organized and maintained the hotel’s digital photo archive.',
        ]
    ],
];
?>

<section id="experience" class="relative min-h-screen flex flex-col items-center pt-20  mx-6 my-0 custom-border text-white overflow-hidden border border-blue-500">
    <div class="text-center">
        <h2 class="text-4xl font-bold font-mono bg-gradient-to-r from-blue-600 to-cyan-200 bg-clip-text text-transparent animate-fade-in-up mt-6">
            Experience
        </h2>
        <p class="text-sm mt-4 font-mono">
            <span class="text-blue-400">{</span>
            <span class="text-gray-400">THINGS I'VE BEEN INVOLVED IN</span>
            <span class="text-blue-400">}</span>
        </p>
    </div>

    <div class="w-full overflow-hidden flex justify-center items-center flex-grow">
        <div class="flex space-x-20">
            <div class="container-eksperience">
                <div class="horizontal-scroll-container-eksperience overflow-x-auto whitespace-nowrap py-4 scrollbar-blue flex justify-start">
                    <div class="scroll-content flex gap-4">
                        <?php foreach ($experience as $exp): ?>
                            <div class="bg-gray-900/40 rounded-xl p-6 backdrop-blur-sm border border-gray-700 shadow-xl min-w-[300px] max-w-[400px] flex-shrink-0">
                                <h3 class="text-purple-400 text-2xl sm:text-3xl font-semibold mb-2 break-words whitespace-normal">
                                    <?php echo htmlspecialchars($exp['category']); ?>
                                </h3>
                                <p class="text-gray-400 text-sm mb-4">
                                    <?php echo htmlspecialchars($exp['title']); ?>
                                </p>
                                <?php if (isset($exp['subtitle'])): ?>
                                    <p class="text-gray-500 text-sm mb-4">
                                        <?php echo htmlspecialchars($exp['subtitle']); ?>
                                    </p>
                                <?php endif; ?>
                                <ul class="space-y-6">
                                    <?php foreach ($exp['items'] as $item): ?>
                                        <li class="flex items-start space-x-3">
                                            <svg class="w-5 h-5 text-purple-500 mt-1 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="text-gray-300 text-sm whitespace-normal border-b border-gray-700 pb-2">
                                                <?php echo htmlspecialchars($item); ?>
                                            </span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="absolute bottom-1 right-4 cta-button hover:scale-105 transform transition flex items-center p-0.5" onclick="scrollToJourney()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 bounce-icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4-4z" clip-rule="evenodd" />
        </svg>
    </button>

    <script>
        function scrollToJourney() {
            const journeySection = document.getElementById('testi');
            if (journeySection) {
                journeySection.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
</section>
