<div class="w-full max-w-sm bg-white border border-gray-100 rounded-xl shadow-md hover:shadow-xl transition-transform transform hover:scale-105 dark:bg-gray-900 dark:border-gray-700">
    <a href="#">
        <img class="p-6 rounded-t-xl" src="<?php echo $details['image']; ?>" alt="product image" />
    </a> 
    <div class="px-4 pb-4">
        <a href="#">
            <h5 class="text-lg font-semibold tracking-tight text-gray-900 dark:text-white"> <?php echo $produit; ?></h5>
        </a>
        <div class="flex items-center mt-2 mb-4">
            <span class="bg-red-500 text-white text-xs font-semibold px-2 py-0.5 rounded-md">- <?php echo round((($details['prix-initial'] - $details['prix-promo']) / $details['prix-initial']) * 100); ?>%</span>
        </div>
        <div class="flex items-center justify-between">
            <div>
                <span class="text-2xl font-bold text-gray-900 dark:text-white"><?php echo $details['prix-promo']; ?><?php echo $details['device']; ?></span>
                <span class="text-gray-400 line-through ml-2"><?php echo $details['prix-initial']; ?><?php echo $details['device']; ?></span>
            </div>
            <!-- Bouton WhatsApp rectangulaire avec glow subtil -->
            <a href="#" class="flex items-center justify-center px-4 py-2 rounded-lg bg-green-500 hover:bg-green-600 transition-all duration-500 transform hover:scale-110 hover:rotate-1 shadow-md hover:shadow-green-300/60">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" class="w-6 h-6">
                    <path d="M12.04 2C6.5 2 2 6.5 2 12.04c0 2.12.62 4.09 1.79 5.8L2 22l4.29-1.77c1.64 1.07 3.55 1.64 5.75 1.64h.01c5.54 0 10.04-4.5 10.04-10.04S17.58 2 12.04 2zm0 18.27c-1.79 0-3.47-.52-4.93-1.5l-.35-.22-2.55 1.05.54-2.63-.17-.27c-1.1-1.63-1.68-3.52-1.68-5.47 0-5.07 4.12-9.19 9.19-9.19 2.45 0 4.75.95 6.48 2.68 1.73 1.73 2.68 4.03 2.68 6.48 0 5.07-4.12 9.19-9.19 9.19zm5.07-6.9c-.28-.14-1.65-.81-1.91-.9-.26-.1-.45-.14-.64.14-.19.28-.73.9-.9 1.08-.17.19-.33.21-.61.07-.28-.14-1.18-.44-2.25-1.41-.83-.74-1.39-1.65-1.55-1.93-.16-.28-.02-.43.12-.57.12-.12.28-.33.42-.49.14-.16.19-.28.28-.47.09-.19.05-.36-.02-.5-.07-.14-.64-1.54-.88-2.11-.23-.55-.47-.47-.64-.48h-.55c-.19 0-.5.07-.76.36-.26.28-1 1-1 2.43s1.02 2.82 1.16 3.01c.14.19 2 3.05 4.85 4.28.68.29 1.21.46 1.62.59.68.22 1.3.19 1.79.12.55-.08 1.65-.67 1.88-1.32.23-.65.23-1.21.16-1.32-.07-.11-.26-.18-.54-.32z"/>
                </svg>
            </a>
        </div>
    </div>
</div>
