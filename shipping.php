<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping & Returns - Fashion Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
        h1 { font-size: 3rem; font-weight: 700; line-height: 1.2; margin-bottom: 2rem; }
        h2 { font-size: 2rem; font-weight: 600; line-height: 1.3; margin-bottom: 1rem; }
        h3 { font-size: 1.5rem; font-weight: 600; line-height: 1.4; margin-bottom: 0.5rem; }
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

    <main class="flex-1">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1>Shipping & Returns</h1>

            <div class="space-y-8">
                <div class="bg-white p-8 rounded-lg shadow">
                    <div class="flex items-center gap-3 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/>
                        </svg>
                        <h2>Shipping Information</h2>
                    </div>

                    <section class="mb-6">
                        <h3>Shipping Options</h3>
                        <div class="space-y-4 mt-3">
                            <div class="border-l-4 border-black pl-4">
                                <p class="font-semibold mb-1">Standard Shipping</p>
                                <p class="text-gray-700 mb-2">Delivery in 5-7 business days</p>
                                <p class="text-gray-600">$9.99 - FREE on orders over $50</p>
                            </div>

                            <div class="border-l-4 border-gray-300 pl-4">
                                <p class="font-semibold mb-1">Express Shipping</p>
                                <p class="text-gray-700 mb-2">Delivery in 2-3 business days</p>
                                <p class="text-gray-600">$19.99</p>
                            </div>

                            <div class="border-l-4 border-gray-300 pl-4">
                                <p class="font-semibold mb-1">Overnight Shipping</p>
                                <p class="text-gray-700 mb-2">Next business day delivery</p>
                                <p class="text-gray-600">$29.99</p>
                            </div>
                        </div>
                    </section>

                    <section class="mb-6">
                        <h3>Processing Time</h3>
                        <p class="text-gray-700 mb-4">
                            Orders are processed within 1-2 business days. Orders placed on weekends or holidays will be 
                            processed on the next business day.
                        </p>
                    </section>

                    <section class="mb-6">
                        <h3>Shipping Locations</h3>
                        <p class="text-gray-700 mb-4">
                            We currently ship to all 50 US states. International shipping is not available at this time.
                        </p>
                    </section>

                    <section>
                        <h3>Order Tracking</h3>
                        <p class="text-gray-700">
                            Once your order ships, you will receive a shipping confirmation email with tracking information. 
                            You can track your package using the provided tracking number.
                        </p>
                    </section>
                </div>

                <div class="bg-white p-8 rounded-lg shadow">
                    <div class="flex items-center gap-3 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <h2>Return Policy</h2>
                    </div>

                    <section class="mb-6">
                        <h3>30-Day Return Window</h3>
                        <p class="text-gray-700 mb-4">
                            We offer a 30-day return policy from the date of delivery. Items must be unworn, unwashed, and 
                            in original condition with all tags attached.
                        </p>
                    </section>

                    <section class="mb-6">
                        <h3>How to Return</h3>
                        <ol class="list-decimal pl-6 text-gray-700 space-y-2">
                            <li>Contact our customer service at returns@fashioncart.com</li>
                            <li>Provide your order number and reason for return</li>
                            <li>Receive a return authorization and shipping label</li>
                            <li>Pack the item securely with all original packaging and tags</li>
                            <li>Ship the package using the provided label</li>
                        </ol>
                    </section>

                    <section class="mb-6">
                        <h3>Return Shipping</h3>
                        <p class="text-gray-700 mb-4">
                            Return shipping is free for US customers. We will provide a prepaid return shipping label.
                        </p>
                    </section>

                    <section class="mb-6">
                        <h3>Refund Processing</h3>
                        <p class="text-gray-700 mb-4">
                            Once we receive and inspect your return, we will process your refund within 5-7 business days. 
                            Refunds will be issued to the original payment method.
                        </p>
                    </section>

                    <section>
                        <h3>Non-Returnable Items</h3>
                        <ul class="list-disc pl-6 text-gray-700 space-y-2">
                            <li>Items marked as final sale</li>
                            <li>Worn or damaged items</li>
                            <li>Items without original tags</li>
                            <li>Intimates and swimwear (for hygiene reasons)</li>
                        </ul>
                    </section>
                </div>

                <div class="bg-white p-8 rounded-lg shadow">
                    <div class="flex items-center gap-3 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        <h2>Exchanges</h2>
                    </div>

                    <p class="text-gray-700 mb-4">
                        We offer free exchanges for different sizes or colors of the same item, subject to availability.
                    </p>

                    <section>
                        <h3>How to Exchange</h3>
                        <ol class="list-decimal pl-6 text-gray-700 space-y-2">
                            <li>Contact customer service at exchanges@fashioncart.com</li>
                            <li>Specify the item and desired size/color</li>
                            <li>We'll confirm availability and provide instructions</li>
                            <li>Return the original item using our prepaid label</li>
                            <li>Your new item will be shipped once we receive the return</li>
                        </ol>
                    </section>
                </div>

                <div class="bg-white p-8 rounded-lg shadow">
                    <div class="flex items-center gap-3 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <h2>Damaged or Defective Items</h2>
                    </div>

                    <p class="text-gray-700 mb-4">
                        If you receive a damaged or defective item, please contact us within 7 days of delivery at 
                        support@fashioncart.com with photos of the damage.
                    </p>

                    <p class="text-gray-700">
                        We will provide a full refund or replacement at no cost to you, including return shipping.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow">
                    <h2>Contact Us</h2>
                    <p class="text-gray-700 mb-4">
                        For any questions about shipping or returns, please contact our customer service team:
                    </p>
                    <ul class="text-gray-700 space-y-2">
                        <li><span class="font-semibold">Email:</span> support@fashioncart.com</li>
                        <li><span class="font-semibold">Phone:</span> +1 (234) 567-890</li>
                        <li><span class="font-semibold">Hours:</span> Monday - Friday, 9:00 AM - 6:00 PM EST</li>
                    </ul>
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
