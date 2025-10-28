<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Fashion Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
        h1 { font-size: 3rem; font-weight: 700; line-height: 1.2; }
        h2 { font-size: 2rem; font-weight: 600; line-height: 1.3; }
        h3 { font-size: 1.5rem; font-weight: 600; line-height: 1.4; }
        p { font-size: 1rem; line-height: 1.6; }
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
                    <a href="shop.php" class="hover:text-gray-600 border-b-2 border-black">Shop</a>
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
            <h1 class="mb-8">Shop All Products</h1>

            <!-- Filters -->
            <div class="flex flex-col sm:flex-row gap-4 mb-8 pb-8 border-b">
                <div class="flex-1">
                    <label class="block font-semibold mb-2">Category</label>
                    <div class="flex flex-wrap gap-2">
                        <button class="px-4 py-2 bg-black text-white rounded">All</button>
                        <button class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100">Tops</button>
                        <button class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100">Dresses</button>
                        <button class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100">Outerwear</button>
                        <button class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100">Formal</button>
                        <button class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100">Bottoms</button>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <a href="product.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <div class="aspect-square relative">
                        <img src="https://images.unsplash.com/photo-1651840760882-e5209bba5815?w=600" alt="Classic White T-Shirt" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded text-sm">Sale</div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 text-sm mb-1">Tops</p>
                        <h3 class="text-lg mb-2">Classic White T-Shirt</h3>
                        <div class="flex items-center gap-2">
                            <span class="font-semibold">$29.99</span>
                            <span class="line-through text-gray-400 text-sm">$39.99</span>
                        </div>
                    </div>
                </a>

                <!-- Product 2 -->
                <a href="product.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <div class="aspect-square">
                        <img src="https://images.unsplash.com/photo-1613966570650-add3cf83aa83?w=600" alt="Summer Floral Dress" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 text-sm mb-1">Dresses</p>
                        <h3 class="text-lg mb-2">Summer Floral Dress</h3>
                        <span class="font-semibold">$79.99</span>
                    </div>
                </a>

                <!-- Product 3 -->
                <a href="product.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <div class="aspect-square relative">
                        <img src="https://images.unsplash.com/photo-1543076447-215ad9ba6923?w=600" alt="Denim Jacket" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded text-sm">Sale</div>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 text-sm mb-1">Outerwear</p>
                        <h3 class="text-lg mb-2">Denim Jacket</h3>
                        <div class="flex items-center gap-2">
                            <span class="font-semibold">$89.99</span>
                            <span class="line-through text-gray-400 text-sm">$119.99</span>
                        </div>
                    </div>
                </a>

                <!-- Product 4 -->
                <a href="product.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <div class="aspect-square">
                        <img src="https://images.unsplash.com/photo-1714328564923-d4826427c991?w=600" alt="Premium Formal Suit" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 text-sm mb-1">Formal</p>
                        <h3 class="text-lg mb-2">Premium Formal Suit</h3>
                        <span class="font-semibold">$299.99</span>
                    </div>
                </a>

                <!-- Product 5 -->
                <a href="product.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <div class="aspect-square">
                        <img src="https://images.unsplash.com/photo-1761117228880-df2425bd70da?w=600" alt="Silk Blouse" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 text-sm mb-1">Tops</p>
                        <h3 class="text-lg mb-2">Silk Blouse</h3>
                        <span class="font-semibold">$59.99</span>
                    </div>
                </a>

                <!-- Product 6 -->
                <a href="product.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                    <div class="aspect-square">
                        <img src="https://images.unsplash.com/photo-1651840760882-e5209bba5815?w=600" alt="Casual Cargo Pants" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 text-sm mb-1">Bottoms</p>
                        <h3 class="text-lg mb-2">Casual Cargo Pants</h3>
                        <span class="font-semibold">$49.99</span>
                    </div>
                </a>
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
