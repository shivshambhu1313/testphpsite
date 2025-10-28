<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Fashion Cart</title>
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
                    <a href="about.php" class="hover:text-gray-600 border-b-2 border-black">About</a>
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

    <main class="flex-1">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="mb-8">About Fashion Cart</h1>

            <div class="space-y-8">
                <div class="bg-white p-8 rounded-lg shadow">
                    <h2 class="mb-4">Our Story</h2>
                    <p class="text-gray-700 mb-4">
                        Fashion Cart was founded in 2020 with a simple mission: to make quality fashion accessible to everyone. 
                        We believe that great style shouldn't come with a premium price tag, and we're committed to bringing 
                        you the latest trends at prices that won't break the bank.
                    </p>
                    <p class="text-gray-700">
                        Based in New York City, we work with manufacturers and designers worldwide to curate a collection 
                        that combines style, quality, and affordability. Every item in our store is carefully selected and 
                        tested to meet our high standards.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow">
                    <h2 class="mb-4">Our Values</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="mb-2">Quality First</h3>
                            <p class="text-gray-700">
                                We never compromise on quality. Every product goes through rigorous quality control to ensure 
                                you receive items that last.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2">Customer Satisfaction</h3>
                            <p class="text-gray-700">
                                Your happiness is our priority. We offer hassle-free returns, responsive customer service, 
                                and a commitment to making things right.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2">Sustainability</h3>
                            <p class="text-gray-700">
                                We're committed to reducing our environmental impact through sustainable sourcing, 
                                eco-friendly packaging, and ethical manufacturing practices.
                            </p>
                        </div>
                        <div>
                            <h3 class="mb-2">Transparency</h3>
                            <p class="text-gray-700">
                                We believe in honest pricing, clear policies, and open communication with our customers.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow">
                    <h2 class="mb-4">Why Shop With Us?</h2>
                    <ul class="space-y-2 text-gray-700">
                        <li>✓ Free shipping on orders over $50</li>
                        <li>✓ 30-day hassle-free returns</li>
                        <li>✓ Secure payment processing</li>
                        <li>✓ Quality guaranteed on all products</li>
                        <li>✓ Responsive customer support</li>
                        <li>✓ Regular sales and promotions</li>
                        <li>✓ New arrivals every week</li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-lg shadow">
                    <h2 class="mb-4">Contact Information</h2>
                    <div class="space-y-2 text-gray-700">
                        <p><span class="font-semibold">Email:</span> support@fashioncart.com</p>
                        <p><span class="font-semibold">Phone:</span> +1 (234) 567-890</p>
                        <p><span class="font-semibold">Address:</span> 123 Fashion Street, New York, NY 10001</p>
                        <p><span class="font-semibold">Business Hours:</span> Monday - Friday, 9:00 AM - 6:00 PM EST</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
