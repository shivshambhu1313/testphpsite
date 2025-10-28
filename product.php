<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic White T-Shirt - Fashion Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
        h1 { font-size: 3rem; font-weight: 700; line-height: 1.2; }
        h2 { font-size: 2rem; font-weight: 600; line-height: 1.3; }
        h3 { font-size: 1.5rem; font-weight: 600; line-height: 1.4; }
        p { font-size: 1rem; line-height: 1.6; }
        .size-option, .color-option { cursor: pointer; transition: all 0.2s; }
        .size-option:hover, .color-option:hover { border-color: #000; }
        .size-option.active, .color-option.active { border-color: #000; background-color: #000; color: #fff; }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="index.php" class="flex items-center gap-2 text-xl font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    Fashion Cart
                </a>
                <div class="hidden md:flex items-center gap-8">
                    <a href="index.php" class="hover:text-gray-600">Home</a>
                    <a href="shop.php" class="hover:text-gray-600">Shop</a>
                    <a href="about.php" class="hover:text-gray-600">About</a>
                    <a href="contact.php" class="hover:text-gray-600">Contact</a>
                </div>
                <a href="cart.php" class="relative p-2 hover:bg-gray-100 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <a href="shop.php" class="inline-flex items-center text-gray-600 hover:text-black mb-8">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Shop
            </a>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Product Image -->
                <div class="aspect-square relative overflow-hidden rounded-lg bg-white">
                    <img src="https://images.unsplash.com/photo-1651840760882-e5209bba5815?w=800" alt="Classic White T-Shirt" class="w-full h-full object-cover">
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded">Sale</div>
                </div>

                <!-- Product Details -->
                <div>
                    <p class="text-gray-600 mb-2">Tops</p>
                    <h1 class="mb-4">Classic White T-Shirt</h1>
                    
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-3xl font-bold">$29.99</span>
                        <span class="text-xl line-through text-gray-400">$39.99</span>
                        <span class="bg-red-500 text-white px-3 py-1 rounded">Save $10.00</span>
                    </div>

                    <p class="text-gray-700 mb-8">A timeless classic white t-shirt made from 100% organic cotton. Comfortable, breathable, and perfect for everyday wear.</p>

                    <!-- Size Selection -->
                    <div class="mb-6">
                        <label class="block font-semibold mb-3">Select Size</label>
                        <div class="flex flex-wrap gap-3">
                            <div class="size-option px-4 py-2 border-2 border-gray-300 rounded" onclick="this.parentElement.querySelectorAll('.size-option').forEach(el => el.classList.remove('active')); this.classList.add('active')">XS</div>
                            <div class="size-option px-4 py-2 border-2 border-gray-300 rounded" onclick="this.parentElement.querySelectorAll('.size-option').forEach(el => el.classList.remove('active')); this.classList.add('active')">S</div>
                            <div class="size-option px-4 py-2 border-2 border-gray-300 rounded" onclick="this.parentElement.querySelectorAll('.size-option').forEach(el => el.classList.remove('active')); this.classList.add('active')">M</div>
                            <div class="size-option px-4 py-2 border-2 border-gray-300 rounded" onclick="this.parentElement.querySelectorAll('.size-option').forEach(el => el.classList.remove('active')); this.classList.add('active')">L</div>
                            <div class="size-option px-4 py-2 border-2 border-gray-300 rounded" onclick="this.parentElement.querySelectorAll('.size-option').forEach(el => el.classList.remove('active')); this.classList.add('active')">XL</div>
                        </div>
                    </div>

                    <!-- Color Selection -->
                    <div class="mb-6">
                        <label class="block font-semibold mb-3">Select Color</label>
                        <div class="flex flex-wrap gap-3">
                            <div class="color-option px-4 py-2 border-2 border-gray-300 rounded" onclick="this.parentElement.querySelectorAll('.color-option').forEach(el => el.classList.remove('active')); this.classList.add('active')">White</div>
                            <div class="color-option px-4 py-2 border-2 border-gray-300 rounded" onclick="this.parentElement.querySelectorAll('.color-option').forEach(el => el.classList.remove('active')); this.classList.add('active')">Black</div>
                            <div class="color-option px-4 py-2 border-2 border-gray-300 rounded" onclick="this.parentElement.querySelectorAll('.color-option').forEach(el => el.classList.remove('active')); this.classList.add('active')">Gray</div>
                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-8">
                        <label class="block font-semibold mb-3">Quantity</label>
                        <div class="flex items-center gap-3">
                            <button class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100" onclick="let input = this.nextElementSibling; input.value = Math.max(1, parseInt(input.value) - 1)">-</button>
                            <input type="number" value="1" min="1" class="w-16 text-center border border-gray-300 rounded py-2">
                            <button class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100" onclick="let input = this.previousElementSibling; input.value = parseInt(input.value) + 1">+</button>
                        </div>
                    </div>

                    <!-- Add to Cart Button -->
                    <div class="space-y-4">
                        <a href="cart.php" class="block w-full bg-black text-white text-center py-3 rounded font-semibold hover:bg-gray-800 transition">
                            <svg class="inline-block w-5 h-5 mr-2 -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Add to Cart
                        </a>
                        <p class="text-green-600 text-center">✓ In Stock - Ships within 2-3 business days</p>
                    </div>

                    <!-- Product Info -->
                    <div class="mt-8 border-t pt-8 space-y-4">
                        <div>
                            <h3 class="mb-2">Product Details</h3>
                            <ul class="text-gray-600 space-y-1">
                                <li>• 100% Authentic</li>
                                <li>• Quality Guaranteed</li>
                                <li>• Free Shipping on orders over $50</li>
                                <li>• 30-Day Return Policy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Fashion Cart</h3>
                    <p class="text-gray-400 mb-4">Your trusted destination for quality fashion.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="shop.php" class="text-gray-400 hover:text-white">Shop</a></li>
                        <li><a href="about.php" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="contact.php" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="privacy.php" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="terms.php" class="text-gray-400 hover:text-white">Terms & Conditions</a></li>
                        <li><a href="shipping.php" class="text-gray-400 hover:text-white">Shipping & Returns</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="mailto:support@fashioncart.com">support@fashioncart.com</a></li>
                        <li>+1 (234) 567-890</li>
                        <li>123 Fashion Street, NY 10001</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Fashion Cart. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
