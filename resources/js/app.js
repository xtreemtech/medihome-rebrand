import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';

// const embla = EmblaCarousel(emblaRoot, { loop: false }, [Autoplay()]); // Add plugin

// Grab wrapper nodes
const rootNode = document.querySelector('.embla')
const viewportNode = rootNode.querySelector('.embla__viewport')

// Grab button nodes
const prevButtonNode = rootNode.querySelector('.embla__prev')
const nextButtonNode = rootNode.querySelector('.embla__next')

    
// Initialize the carousel

const autoplayOptions = {
  delay: 4000,
  rootNode: (emblaRoot) => emblaRoot.parentElement,
}

const embla = EmblaCarousel(viewportNode, { loop: false }, [
  Autoplay(autoplayOptions), // Add plugin with options
])

// Add click listeners
prevButtonNode.addEventListener('click', embla.scrollPrev, false)
nextButtonNode.addEventListener('click', embla.scrollNext, false)


