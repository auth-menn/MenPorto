// resources/js/app.js

// Dark Mode Toggle

                
const themeToggle = document.getElementById('theme-toggle');
const html = document.documentElement;

themeToggle.addEventListener('click', () => {
    html.classList.toggle('dark');
    const isDark = html.classList.contains('dark');
    themeToggle.innerHTML = isDark 
        ? '<i class="fas fa-sun text-yellow-400 text-xl"></i>'
        : '<i class="fas fa-moon text-cyan-400 text-xl"></i>';
});

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Intersection Observer for animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-fade-in-up');
        }
    });
}, {
    threshold: 0.1
});
    


// Particle Animation
function initParticles() {
    const particlesContainer = document.getElementById('particles');
    for (let i = 0; i < 50; i++) {
        const particle = document.createElement('div');
        particle.className = 'absolute bg-cyan-400/20 rounded-full';
        particle.style.width = Math.random() * 5 + 2 + 'px'; // Ukuran acak antara 2px dan 7px
        particle.style.height = particle.style.width; // Membuat lingkaran
        particle.style.left = Math.random() * 100 + '%'; // Posisi horizontal acak
        particle.style.top = Math.random() * 100 + '%'; // Posisi vertikal acak
        particle.style.animation = `float ${Math.random() * 5 + 2}s infinite`; // Durasi acak antara 5s dan 10s
        particlesContainer.appendChild(particle);
    }
}

initParticles();

/* header*/ 

document.querySelector('.cta-button').addEventListener('click', function (e) {
    const ripple = document.getElementById('ripple');
    const circle = document.getElementById('circle');
    const arrowIcon = document.querySelector('.arrow-icon');
    
    // Ripple effect
    ripple.style.left = `${e.clientX - this.offsetLeft}px`;
    ripple.style.top = `${e.clientY - this.offsetTop}px`;
    ripple.classList.add('animate-ripple');
    
    // Circle placement
    circle.style.left = `${e.clientX - this.offsetLeft - 15}px`;
    circle.style.top = `${e.clientY - this.offsetTop - 15}px`;
    
    // Fly up animations
    arrowIcon.classList.add('arrow-fly-animation');
    circle.classList.add('fly-up');
    
    setTimeout(() => {
    ripple.classList.remove('animate-ripple');
    circle.classList.remove('fly-up');
    arrowIcon.classList.remove('arrow-fly-animation');
    }, 1000);
    });
    
    
                document.addEventListener("DOMContentLoaded", function () {
                 const menuToggle = document.getElementById("menu-toggle");
                 const menuIcon = document.getElementById("menu-icon");
                 const mobileMenu = document.getElementById("mobile-menu");
    
                menuToggle.addEventListener("click", function () {
                 mobileMenu.classList.toggle("hidden"); 
                 mobileMenu.classList.toggle("opacity-0"); // Animasi fade
                 mobileMenu.classList.toggle("opacity-100");
    
            // Animasi ikon burger berubah menjadi "X"
                menuIcon.classList.toggle("fa-bars");
                menuIcon.classList.toggle("fa-times");
                menuIcon.classList.toggle("rotate-180"); // Efek rotasi saat berubah
        });
    });
/* hero*/ 
 


/* about */ 
    document.getElementById("triggerBio").addEventListener("click", function() {
        const bio = document.getElementById("bio");
        const lines = [
            "{",
            "  <span class='text-blue-400'>name</span>: ",
            "<span class='text-yellow-300' style='margin-left: 20px;'>'Firman Maulana Syabani'</span>,",
            "  <span class='text-blue-400'>currentLocation</span>: ",
            "<span class='text-yellow-300' style='margin-left: 20px;'>'Gresik City, East Java'</span>,",
            "  <span class='text-blue-400'>age</span>: ",
            "<span class='text-yellow-300' style='margin-left: 20px;'>'22 Years old'</span>,",
            "  <span class='text-blue-400'>education</span>: ",
            "<span class='text-yellow-300' style='margin-left: 20px;'>'International University of Semen Indonesia'</span>",
            "}"
        ];
        
        bio.innerHTML = ""; 
        bio.classList.remove('hidden');
        
        let lineIndex = 0;
        let charIndex = 0;
        
        function typeLine() {
            if (lineIndex < lines.length) {
                const lineDiv = document.createElement('div');
                lineDiv.className = 'typing-line';
                bio.appendChild(lineDiv);
                
                const currentLine = lines[lineIndex];
                let displayText = "";
                
                function typeChar() {
                    if (charIndex < currentLine.length) {
                        displayText += currentLine[charIndex];
                        lineDiv.innerHTML = displayText;
                        charIndex++;
    
         
                        const cursor = document.createElement('span');
                        cursor.className = 'cursor';
                        lineDiv.appendChild(cursor);
                        
                        setTimeout(typeChar, 20); // Smoother typing speed
                    } else {
                        lineIndex++;
                        charIndex = 0;
                        typeLine(); // No delay before starting next line
                    }
                }
                
                typeChar();
            }
        }
        
        typeLine();
    });
    

/* Journey*/ 

/* skils*/ 
const root = document.documentElement;
const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
const marqueeContent = document.querySelector("ul.marquee-content");

root.style.setProperty("--marquee-elements", marqueeContent.children.length);

for (let i = 0; i < marqueeElementsDisplayed; i++) {
    marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
}


/* her*/ 

