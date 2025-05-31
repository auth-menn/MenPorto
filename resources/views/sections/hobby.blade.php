<?php
$pageTitle = "Hobby";
$sectionDescription = "THINGS I'VE BEEN INVOLVED IN";

// Token Instagram yang kamu berikan
$access_token = "IGAGdcfze8yPhBZAE5qdmxWejl2dWdCMFhTZAmdZAZAGRyRkRWaGUwWEhRNlZAnOHJPbUdUN29FeFBfQVU4Njc4aVN1R05sQUxJMC1xM1dQdW9GUEU5VUhONFFsck9rRzY5MHdGMEtSOXh3YTFrNFZABWkNOdjVMdm9OVUlPeE5iTVJqawZDZD";

$media_ids = ["MEDIA_ID_1", "MEDIA_ID_2", "MEDIA_ID_3", "MEDIA_ID_4", "MEDIA_ID_5"];
$images = [];

foreach ($media_ids as $media_id) {
    $url = "https://graph.instagram.com/{$media_id}?fields=media_url&access_token={$access_token}";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response, true);
    
    if (isset($data['media_url'])) {
        $images[] = $data['media_url'];
    } else {
        $images[] = "https://via.placeholder.com/300"; // Placeholder jika gambar tidak ditemukan
    }
}
?>

<section id="hobby" class="relative min-h-screen flex flex-col items-center justify-between pt-20 mx-4 md:mx-6 border border-blue-500">
    <div class="text-center">
        <h2 class="text-3xl md:text-4xl font-bold font-mono bg-gradient-to-r from-blue-600 to-cyan-200 bg-clip-text text-transparent animate-fade-in-up mt-6">
            Hobby
        </h2>
        <p class="text-sm mt-4 font-mono text-white">
            <span class="text-blue-400">{</span>
            <span class="text-gray-400"><?php echo htmlspecialchars($sectionDescription); ?></span>
            <span class="text-blue-400">}</span>
        </p>
    </div>

    <div class="relative w-[630px] h-[450px]">
        <!-- Card Tengah -->
        <div class="absolute w-[300px] h-[360px] bg-green-700/50 rounded-lg shadow-md overflow-hidden flex items-center justify-center" style="left: 50%; top: 30%; transform: translate(-50%, -50%);">
            <img src="<?php echo $images[0]; ?>" class="w-full h-full object-cover" alt="Instagram Image">
        </div>

        <!-- Card Kiri Atas -->
        <div class="absolute w-[220px] h-[200px] bg-green-700/50 rounded-lg shadow-md overflow-hidden flex items-center justify-center" style="left: -13%; top: -20%;">
            <img src="<?php echo $images[1]; ?>" class="w-full h-full object-cover" alt="Instagram Image">
        </div>

        <!-- Card Kiri Bawah -->
        <div class="absolute w-[200px] h-[180px] bg-green-700/50 rounded-lg shadow-md overflow-hidden flex items-center justify-center" style="left: -10%; bottom: 20%;">
            <img src="<?php echo $images[2]; ?>" class="w-full h-full object-cover" alt="Instagram Image">
        </div>

        <!-- Card Kanan Atas -->
        <div class="absolute w-[200px] h-[180px] bg-green-700/50 rounded-lg shadow-md overflow-hidden flex items-center justify-center" style="right: -10%; top: -20%;">
            <img src="<?php echo $images[3]; ?>" class="w-full h-full object-cover" alt="Instagram Image">
        </div>

        <!-- Card Kanan Bawah -->
        <div class="absolute w-[220px] h-[200px] bg-green-700/50 rounded-lg shadow-md overflow-hidden flex items-center justify-center" style="right: -13%; bottom: 20%;">
            <img src="<?php echo $images[4]; ?>" class="w-full h-full object-cover" alt="Instagram Image">
        </div>
    </div>
    <button class="absolute bottom-1 right-4 cta-button hover:scale-105 transform transition flex items-center p-0.5" 
            onclick="scrollToContact()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 bounce-icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" 
                  d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" 
                  clip-rule="evenodd" />
        </svg>
    </button>
</section>

<script>
function scrollToContact() {
    const contactSection = document.getElementById('contact');
    if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'smooth' });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.panel-animate').forEach(panel => {
        panel.style.animationPlayState = 'paused';
        observer.observe(panel);
    });
});
</script>
