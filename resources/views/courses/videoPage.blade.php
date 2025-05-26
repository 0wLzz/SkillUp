<x-layout>
    <section class="bg-white dark:bg-gray-900 min-h-screen pb-8">
        <div class="max-w-screen-xl mx-auto px-4">

            <!-- Course Header -->
            <div class="py-6 border-b border-gray-200 dark:border-gray-700">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Live Class: {{ $video->title }}
                </h1>
                <p class="text-gray-600 dark:text-gray-400">{{ $video->curriculum->title }}</p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
                <!-- Video/Live Stream Section -->
                <div class="lg:col-span-2">
                    <!-- Video Player -->
                    <div class="bg-black rounded-lg overflow-hidden aspect-video">
                        <!-- Replace with your actual video embed code -->
                        <video controls class="w-full h-auto rounded-lg bg-black" preload="metadata">
                            <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <!-- Video Controls -->
                    <div class="flex items-center justify-between mt-4 px-2">
                        <div class="flex items-center space-x-4">
                            <button
                                class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button class="p-2 rounded-full bg-blue-600 text-white hover:bg-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                            <button
                                class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <span class="text-gray-700 dark:text-gray-300">1:24:35 / 2:30:00</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button
                                class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414 1.414m2.828-9.9a9 9 0 012.728-2.728" />
                                </svg>
                            </button>
                            <button
                                class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                            </button>
                            <button
                                class="p-2 rounded-full bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Session Materials -->
                    <div class="mt-8 bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Session Materials</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="#"
                                class="flex items-center p-3 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span class="ml-3 text-gray-700 dark:text-gray-300">Session Slides.pdf</span>
                            </a>
                            <a href="#"
                                class="flex items-center p-3 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                                <span class="ml-3 text-gray-700 dark:text-gray-300">Worksheet.docx</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Chat Section -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg overflow-hidden flex flex-col">
                    <div class="p-4 border-b border-gray-200 dark:border-gray-700">
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Class Chat</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Connected: 24 participants</p>
                    </div>

                    <!-- Chat Messages -->
                    <div class="flex-1 overflow-y-auto p-4 space-y-4">
                        <!-- Tutor Message -->
                        <div class="flex items-start">
                            <img class="w-8 h-8 rounded-full mr-3" src="{{ asset('assets/Carousel2.jpg') }}"
                                alt="Tutor">
                            <div>
                                <div class="flex items-center">
                                    <span class="font-bold text-gray-900 dark:text-white mr-2">Ambda Jansen
                                        (Tutor)</span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">14:32</span>
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 bg-blue-50 dark:bg-blue-900 p-3 rounded-lg">
                                    Welcome everyone to today's session! We'll be discussing effective communication
                                    strategies in professional settings.</p>
                            </div>
                        </div>

                        <!-- Student Message -->
                        <div class="flex items-start">
                            <img class="w-8 h-8 rounded-full mr-3"
                                src="https://randomuser.me/api/portraits/women/44.jpg" alt="Student">
                            <div>
                                <div class="flex items-center">
                                    <span class="font-bold text-gray-900 dark:text-white mr-2">Sarah Johnson</span>
                                    <span class="text-xs text-gray-500 dark:text-gray-400">14:34</span>
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 p-3 rounded-lg">
                                    Hello! Excited for today's lesson. I've been struggling with networking events.</p>
                            </div>
                        </div>

                        <!-- System Message -->
                        <div class="text-center">
                            <span
                                class="text-xs text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-900 px-2 py-1 rounded-full">Michael
                                joined the chat</span>
                        </div>

                        <!-- More messages would appear here as the chat progresses -->
                    </div>

                    <!-- Chat Input -->
                    <div class="p-4 border-t border-gray-200 dark:border-gray-700">
                        <form class="flex space-x-2">
                            <input type="text" placeholder="Type your message..."
                                class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                            <button type="submit"
                                class="p-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            </button>
                        </form>
                        <div class="flex justify-between mt-2 text-xs text-gray-500 dark:text-gray-400">
                            <button class="hover:text-blue-500">Raise hand</button>
                            <button class="hover:text-blue-500">Send private message</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Resources -->
            <div class="mt-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Additional Resources</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Recommended Reading</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">Networking
                                    for Introverts</a></li>
                            <li><a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">The Art of
                                    Conversation</a></li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Next Session</h3>
                        <p class="text-gray-700 dark:text-gray-300">Thursday, June 15 at 2:00 PM</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Topic: Maintaining Professional
                            Relationships</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Assignment</h3>
                        <p class="text-gray-700 dark:text-gray-300">Due: June 20</p>
                        <a href="#"
                            class="inline-block mt-2 text-blue-600 dark:text-blue-400 hover:underline">View assignment
                            details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Chat Functionality -->
    <script>
        // This would be replaced with actual WebSocket or API calls in a real implementation
        document.addEventListener('DOMContentLoaded', function() {
            const chatForm = document.querySelector('.chat-form');
            const chatInput = document.querySelector('.chat-input');
            const chatMessages = document.querySelector('.chat-messages');

            // Simulate sending a message
            chatForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const message = chatInput.value.trim();
                if (message) {
                    // In a real app, this would send to a server
                    addMessage('You', message, new Date());
                    chatInput.value = '';
                }
            });

            function addMessage(sender, text, timestamp) {
                const timeString = timestamp.toLocaleTimeString([], {
                    hour: '2-digit',
                    minute: '2-digit'
                });
                const messageElement = document.createElement('div');
                messageElement.classList.add('flex', 'items-start', 'mb-4');
                messageElement.innerHTML = `
                    <img class="w-8 h-8 rounded-full mr-3" src="https://randomuser.me/api/portraits/men/32.jpg" alt="${sender}">
                    <div>
                        <div class="flex items-center">
                            <span class="font-bold text-gray-900 dark:text-white mr-2">${sender}</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">${timeString}</span>
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 p-3 rounded-lg">${text}</p>
                    </div>
                `;
                chatMessages.appendChild(messageElement);
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            // Simulate receiving messages (in a real app this would come from WebSocket)
            setTimeout(() => {
                addMessage('Ambda Jansen (Tutor)', 'Great question! We\'ll cover that in about 10 minutes.',
                    new Date());
            }, 3000);
        });
    </script>
</x-layout>
